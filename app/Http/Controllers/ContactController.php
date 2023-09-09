<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Khairul\Fm\Fm;

class ContactController extends Controller
{
    public function testUser()
    {
       return Fm::event(name: "AsSa", val: 4890);
    }
}
