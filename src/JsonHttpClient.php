<?php

namespace HamzaMughales\HttpClient;

class JsonHttpClient
{
    public static function get(string $url): array
    {
        $curlHandle = curl_init();

        curl_setopt_array($curlHandle, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $response = curl_exec($curlHandle);

        curl_close($curlHandle);

        return json_decode($response, true);
    }
}