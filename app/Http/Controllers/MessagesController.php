<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
  function home () {
      $message = Message::All();
      dd($message);
      return view('welcome');
  }
}
