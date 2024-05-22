<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;
/**
 * Class SmsService.
 */
class SmsService
{
    protected $api_url;
    protected $api_key;
    protected $api_sender_id;

    public function __construct()
    {
        $this->api_url = env('SMS_API_URL');
        $this->api_key = env('SMS_API_KEY');
        $this->api_sender_id = env('SMS_SENDER_ID');
    }

    

    public function sendSms($number, $message)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .$this->api_key,
            'Content-Type' => 'application/json',
        ])->post($this->api_url, [
            'senderid' => $this->api_sender_id,
            'api_key' => $this->api_key,
            'number' => $number,
            'message' => $message,
        ]);

        return $response->json();

    }

}
