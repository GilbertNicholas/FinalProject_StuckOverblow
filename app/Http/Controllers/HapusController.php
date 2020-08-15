<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class HapusController extends Controller
{
    public function index()
    {
        $data = Question::all();

        return view('hapus', compact('data'));
    }
}
