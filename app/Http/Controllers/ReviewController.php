<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        Review::create([
            'name' => auth()->user()->name
            ] + $request->all());
        return redirect()->back();
    }
}
