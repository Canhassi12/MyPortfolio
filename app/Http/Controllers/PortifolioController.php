<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;




class PortifolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $client = new Client();

        $baseUrl = "https://api.github.com/repos/Canhassi12/";

        $repos = array(
            'Learn-laravel',
            'MyAnimeList',
            'MyPortfolio',
            'api-2-php',
            'Consumindo-api2-php',
            'Netflix-Anime'
        );

        if (!Cache::has('request')) {
            for ($i = 0; $i <= 5; $i++) {

                $response = $client->request('GET', $baseUrl . $repos[$i]);

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

        $repositories = Cache::get('request');

        return view('index', compact('repositories'));
    }
}
