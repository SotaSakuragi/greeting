<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreethingControllers extends Controller
{
    public function greeting($timeZone)
    {
        $greeting = null;
        $information = null;

        if ($timeZone == 'morning') {
            $information = '朝のあいさつ';
            $greeting = 'おはようございます';
        } elseif ($timeZone == 'afternoon') {
            $information = '昼のあいさつ';
            $greeting = 'こんにちは';
        } elseif ($timeZone == 'evening') {
            $information = '夕方のあいさつ';
            $greeting = 'こんばんは';
        } elseif ($timeZone == 'night') {
            $information = '夜のあいさつ';
            $greeting = 'おやすみ';
        } elseif ($timeZone == 'random') {
            $information = 'ランダムなメッセージ';
            # code...
        } else {
            $information = '自由なメッセージ';
            $greeting = $timeZone;
        }

        return view('greeting', ['greeting' => $greeting, 'information' => $information]);
    }
}
