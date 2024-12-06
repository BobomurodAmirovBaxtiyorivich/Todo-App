<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

use GuzzleHttp\Client;

class Bot
{
    const API_URL = 'https://api.telegram.org/bot';

    private string $token;

    public $client;

    public function makeRequest($method, $data = [])
    {
        $this->token = $_ENV['TG_TOKEN'];
        $this->client = new Client([
            'base_uri' => self::API_URL . $this->token . '/',
            'timeout' => 2.0,
        ]);

        $request = $this->client->request('POST', $method . '?' . http_build_query($data));

        return $request;
    }
}