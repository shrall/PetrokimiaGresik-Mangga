<?php

namespace App\Helper;

use App\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Helper
{
    public static function userlog(Request $request, String $desc, String $notes)
    {
        UserLog::create([
            'creator_id' => Auth::id(),
            'desc' => $desc,
            'notes' => $notes == '' ? null : $notes,
            'path' => $request->getRequestUri(),
            'ip' => $request->ip()
        ]);
    }
}
