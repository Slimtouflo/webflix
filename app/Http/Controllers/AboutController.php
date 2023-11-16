<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('a-propos', [
            'title' => 'Les devs',
            'team'  => [
                [
                    'name'  => 'Fiorella',
                    'job'   => 'CEO',
                    'image' => 'https://i.pravatar.cc/100?u=remi'
                ],
                [
                    'name'  => 'Toto',
                    'job'   => 'CTO',
                    'image' => 'https://i.pravatar.cc/100?u=patrick'
                ],
            ]
        ]);
    }
}
