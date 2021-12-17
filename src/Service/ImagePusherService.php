<?php

namespace Greendot\ImagePusherServer\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ImagePusherService
{
    private HttpClientInterface $client;

    /**
     * @param HttpClientInterface $client
     */
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function sendImage(string $projectName) {
        // TODO: fill send image logic
    }
}