<?php

namespace App\Services;

use GuzzleHttp\Client;
use PhpParser\Node\Stmt\TryCatch;

class Services
{
    function user(){
        return $nick_name = auth()->user();
    }

    function userGetProfile()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/users/'.$this->user()->nickname);
            return json_decode($res->getBody());

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    function userGetRepos()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/users/'.$this->user()->nickname.'/repos');
            return json_decode($res->getBody());

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

}
