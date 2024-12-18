<?php
namespace App;

require 'vendor/autoload.php';
require 'bootstrap.php';


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Bot
{
    const API_URL = 'https://api.telegram.org/bot';

    private string $token;
    public $client;

    /**
     * @throws GuzzleException
     */
    public function makeRequest($method, $data = []): \Psr\Http\Message\ResponseInterface
    {
        $this->token = $_ENV['TG_TOKEN'];
        $this->client = new Client([
            'base_uri' => self::API_URL . $this->token . '/',
            'timeout' => 2.0,
        ]);

        return $this->client->request('POST', $method . '?' . http_build_query($data));
    }
}