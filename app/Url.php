<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes\CodeGenerator;

class Url extends Model
{
    protected $fillable = ['url', 'user_id'];

    public $timestamps = false;

    public function user(){
        $this->belongsTo(User::class);
    }

    public function short_url($long_url){
        // crear la Url
        $url = self::create([
            'url' => $long_url,
            'user_id' => auth()->user()->id
        ]);

        //Generacion de codigo
        $code = (new CodeGenerator())->get_code($url->id);

        // Actualizar el codigo en la $url
        $url->code = $code;
        $url->save();

        return $url->code;
    }
}
