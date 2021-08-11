<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrlController extends Controller
{
    public function store(Request $request, Url $url)
    {

        $code = $url->short_url($request->long_url);

        return response()->json([
            'short_url' => url('/') . '/' . $code,
        ]);
    }

    public function show(Request $request, $code)
    {
        $url = DB::table('urls')->where('code', $code)->first();

        if ($url) {
            //... logicas
            return redirect()->away($url->url);
        } else {
            abort(404);
        }
    }

    public function index()
    {
        $urls = Url::paginate(10)->toJson();

        return response()->json([
           'urls' => $urls
        ]);
    }
}
