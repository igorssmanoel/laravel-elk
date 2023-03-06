<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class GithubService
{
    public function __construct()
    {
        //
    }

    public function getGithubData(string $userName)
    {
        $response = Http::get('https://api.github.com/users/' . $userName);
        if ($response->status() === 200) {
            return $response->json();
        }
        return false;
    }
}
