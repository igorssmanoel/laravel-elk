<?php
namespace App\Loggers;

use Elastic\Elasticsearch\ClientBuilder;
use Monolog\Handler\ElasticsearchHandler;
use Monolog\Logger;

class CreateElasticsearchLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        $logger = new Logger('elasticsearch');

        //create the client
        $client = ClientBuilder::create()
            ->setSSLVerification(false)->setBasicAuthentication('elastic', 'password')->setHosts(['elasticsearch:9200'])->build();

        //create the handler
        $options = [
            'index' => 'user_logs',
            'type' => '_doc'
        ];
        $handler = new ElasticsearchHandler($client, $options, Logger::INFO, true);

        $logger->setHandlers(array($handler));

        return $logger;
    }
}

## eLASTIC SEARCH GET ALL ITEmS BY INDEX
