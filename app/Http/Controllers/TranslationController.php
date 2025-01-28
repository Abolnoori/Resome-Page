<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TranslationController extends Controller
{
    public function translate($text, $targetLanguage)
    {
        $apiKey = 'YOUR_API_KEY';
        $url = "https://translation.googleapis.com/language/translate/v2?key={$apiKey}";

        $client = new Client();
        $response = $client->post($url, [
            'json' => [
                'q' => $text,
                'target' => $targetLanguage
            ]
        ]);

        $result = json_decode($response->getBody(), true);
        return $result['data']['translations'][0]['translatedText'];
    }
}
