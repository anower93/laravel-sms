<?php

namespace App\Http\Controllers;

use App\Services\SmsService;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    protected $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    public function sendSms(Request $request)
    {
        $request->validate([
            'number' => 'required|string',
            'message' => 'required|string',
        ]);

        $number = $request->number;
        $message = $request->message;

        $response = $this->smsService->sendSms($number, $message);

        return response()->json($response);
    }


}
