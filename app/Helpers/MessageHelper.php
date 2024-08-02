<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
class MessageHelper
{
    public static function send($numero,$mensagem)
    {
        try {
            
            $apiToken = env('API_TOKEN');
            $sender = env('API_SENDER');

            $client = new Client();
            $url = 'http://52.30.114.86:8080/mimosms/v1/message/send?token=' . $apiToken;

            $data = [
                'sender' => $sender,
                'recipients' => $numero,
                "text" => $mensagem
            ];

            $response = $client->post($url, [
                'json' => $data,
            ]);
    
            return response()->json([
                'status'=>1,
                'message'=>$response
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status'=>0,
                'message'=>$th->getMessage()
            ]);
        }
        
    }
}
