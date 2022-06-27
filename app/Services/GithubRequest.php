<?php 

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class GithubRequest {

   public static function getRepositories($client, $baseUrl, $repos)
    {
        if (!Cache::has('request')) {
            for ($i = 0; $i <= 5; $i++) {

                $response = $client->request('GET', $baseUrl.$repos[$i]);

                $body = json_decode($response->getBody());

                $repositories[] = [
                    'name'        => $body->name,
                    'url'         => $body->html_url,
                    'stars'       => $body->stargazers_count,
                    'description' => $body->description,
                    'img'         => "https://raw.githubusercontent.com/Canhassi12/{$body->name}/main/{$body->name}.png",
                ];
            }
            Cache::put('request', $repositories, now()->addDay());
        }
        return $repositories = Cache::get('request');
    } 
}