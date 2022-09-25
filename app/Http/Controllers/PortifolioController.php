<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Services\GithubRequest;
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
            'LoginKamiya-FrontEnd',
            'LoginKamiya-BackEnd'
        );

        $repositories = GithubRequest::getRepositories($client, $baseUrl, $repos);

        return view('index', compact('repositories'));
    }
}