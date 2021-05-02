<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class Profiles extends Controller
{
    public function list() {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        // dd($data);

        return view('profiles',['data'=>$data]);

    }
}
