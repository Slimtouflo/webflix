<?php

namespace App\Http\Controllers;

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

    public function show($user)
    {
        if (! in_array($user, ['Fiorella', 'Toto'])) {
            abort(404); // Renvoie une 404
        }

        return view('about-show', [
            'user' => $user,
        ]);
    }
}
