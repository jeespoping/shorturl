<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    public function store(Request $request, Url $url){

        $code = $url->short_url($request->long_url);

        return response()->json([
            'short_url' => url('/') . '/' . $code,
        ]);
    }

    public function show($code){
        $url = DB::table('urls')->where('code',$code)->first();

        if ($url){
            return redirect()->away($url->url);
        }else{
            abort(404);
        }
    }
}
