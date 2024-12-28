<?php

namespace App\Http\Controllers;

use App\Models\Stamp;
use DateTime; 
use Illuminate\Http\Request;

class NewsStampsController extends Controller
{
    public function show()
    {
        $date = new DateTime();
        
        $dateFiveDaysAgo = $date->modify('-5 days');
        $formattedDate = $dateFiveDaysAgo->format('Y-m-d H:i:s');

        $newsStamps = Stamp::where('created_at', '>=', $formattedDate)->get(); 
        
        return view('components.news-stamps-list', compact('newsStamps'));
    }
}



