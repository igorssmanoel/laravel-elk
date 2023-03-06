<?php

namespace App\Console\Commands;

use App\Jobs\GithubJob;
use Illuminate\Console\Command;

class GithubCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github {userName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Fetching data from Github...');
        $userName = $this->argument('userName');
        GithubJob::dispatch($userName);
        $this->info('Done!');
    }
}
