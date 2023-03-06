<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Services\GithubService;
use App\Services\GithubUserService;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class GithubJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $userName;
    /**
     * Create a new job instance.
     */
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

    /**
     * Execute the job.
     */
    public function handle(GithubService $githubService, GithubUserService $githubUserService): void
    {
        Log::error('this is a log');
        $data = $githubService->getGithubData($this->userName);
        if ($data) {
            $githubUserService->saveUser($data);
        }
        Log::info('Github user data saved');
    }
}
