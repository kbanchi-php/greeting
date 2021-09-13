<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function greeting($greeting)
    {
        $greetings = [
            'morning' => [
                'timing' => '朝',
                'greeting' => 'おはようございます',
            ],
            'afternoon' => [
                'timing' => '昼',
                'greeting' => 'こんにちは',
            ],
            'evening' => [
                'timing' => '夕方',
                'greeting' => 'こんばんは',
            ],
            'night' => [
                'timing' => '夜',
                'greeting' => 'おやすみ',
            ],
        ];
        $data = $greetings[$greeting];
        return view('comments.greeting', $data);
    }

    public function freeword($word)
    {
        $data = [
            'word' => $word,
        ];
        return view('comments.freeword', $data);
    }

    public function random()
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $random = $greetings[array_rand($greetings)];
        $data = [
            'random' => $random,
        ];
        return view('comments.random', $data);
    }
}
