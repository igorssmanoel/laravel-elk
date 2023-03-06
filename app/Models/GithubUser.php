<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GithubUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'login',
        'name',
        'avatar_url',
        'html_url',
        'followers',
        'following',
        'public_repos',
        'public_gists',
        'created_at',
        'updated_at',
    ];
}
