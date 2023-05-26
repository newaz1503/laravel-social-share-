<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;
class SocialShareController extends Controller
{
    public function socialWidget(){
        $shareComponent = Share::page('http://jorenvanhocht.be', 'Share title')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp();
        return view('welcome', compact('shareComponent'));
    }
}
