<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Platforms;
use App\Models\User;

class PlatformController extends Controller
{
    public function index()
    {
        
        $platforms = Platform();
        
        return view('platforms.index', [
            'platforms' => $platforms]);
    }
}
