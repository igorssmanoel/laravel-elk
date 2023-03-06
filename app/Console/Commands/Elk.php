<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Elastic\Elasticsearch\ClientBuilder;

class Elk extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elk';

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
        $client = ClientBuilder::create()
            /* ->setSSLVerification(false)->setBasicAuthentication('elastic', 'password')->setHosts(['192.168.18.18:9200'])->build(); */
            ->setSSLVerification(false)
            ->setBasicAuthentication('elastic', 'password')
            ->setHosts(['elasticsearch:9200'])
            ->build();

        $params = array();
        $params['body'] = array(
            'name' => "TEASADASDAS123123",
            'age' => 12
        );
        $params['index'] = 'logs_test';
        $params['type'] = '_doc';
        $result = $client->index($params); //using Index() function to inject the data
        Log::info("result: " . $result);


    }
}
