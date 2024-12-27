<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show($id)
    {
        $stamp = Stamp::findOrFail($id); 
        return view('components.detail', compact('stamp')); 
    }
}
