<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class LoginGoogleController extends Controller
{
    protected $client;
    public function __construct()
    {
        $this->client = new Client();
    }

    public function login() {
        $accessToken = "ya29.a0AfH6SMDyb2Stq0d_wZjgDCiUnrGcCFFZntnbgg2PCFeXfB9hqe0Yd2F71iPzPd7timsGTYA_W4V3Qb7RjQn3USglXkGGYm6_ZRbFq5uLQlld0BfZq5hsoXvWXvppMXft4848q8zLjtLdorqp3fKdionwz11istONFyLuqkEK7Ic";
        $checkToken = $this->client->get("https://www.googleapis.com/oauth2/v3/userinfo?access_token=$accessToken");
        $responseGoogle = json_decode($checkToken->getBody()->getContents(), true);
        dd($responseGoogle);
    }
}
