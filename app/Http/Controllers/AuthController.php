<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Public function me(){
        return [
            'NIS' => '3103119073',
            'Nama'=> 'Farhan',
            'Gender' => 'Male',
            'Phone' => '085328797002',
            'Kelas' => 'XII RPL 3'
        ];
    }
}
