<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guitar;

class PublicController extends Controller
{
    public function index() {
      $guitar = Guitar::all();
      return view('guitars.index', compact('guitar'));
    }
}
