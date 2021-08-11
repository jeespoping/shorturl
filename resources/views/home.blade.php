@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg-white p-4 text-center">
            <div class="row">
                <div class="col-8">
                    <input type="text" class="form-control" id="long_url" placeholder="Pega la URL aqui">
                </div>
                <div class="col-4">
                    <button class="btn btn-dark" onclick="shorter.short_url()">Acortar</button>
                </div>
            </div>
            <div id="short_url_container" class="row py-3" style="display: none;">
                <div class="col-12">
                    <input type="text" id="short_url" class="form-control" onclick="shorter.copy_url()">
                </div>
            </div>
        </div>

        <div id="scroll-container"></div>
        

    </div>

@endsection
