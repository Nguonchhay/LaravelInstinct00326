<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sendSuccess($data, $message = '', $errorCode = 0)
    {
        return response()->json([
            'error_code' => $errorCode,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function sendError($message, $errorCode, $data = [])
    {
        return response()->json([
            'error_code' => $errorCode,
            'message' => $message,
            'data' => $data
        ]);
    }
}
