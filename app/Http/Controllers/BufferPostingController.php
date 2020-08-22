<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BufferPosting;
use App\SocialPostGroup;

class BufferPostingController extends Controller
{


    public function index(){
        
       $bufferPostings=BufferPosting::paginate(10);
        return view('buffer.buffer')->with('bufferPostings', $bufferPostings);
    }
}
