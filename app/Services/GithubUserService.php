<?php
namespace App\Services;

use App\Models\GithubUser;
use Illuminate\Support\Facades\Http;

class GithubUserService
{
    public function __construct()
    {
        //
    }

    public function saveUser($data)
    {
        return GithubUser::create($data);
    }
}
