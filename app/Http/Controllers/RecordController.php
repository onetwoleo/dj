<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function store(Request $request)
    {
        Record::create([
            ] + $request->all());
        return redirect()->back();
    }
}
