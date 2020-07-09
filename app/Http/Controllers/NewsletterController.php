<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newsletter;

class NewsletterController extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $newsletter = new newsletter;
        $newsletter->email= $req->email;
        echo $newsletter->save();

    }
}
