<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../../Common/generated/Common/FreyServer.php';
require __DIR__ . '/../src/TwirpServer.php';

$request = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
$handler = new \Common\FreyServer(new \Frey\TwirpServer());

$response = $handler->handle($request);

if (!headers_sent()) {
    // status
    header(sprintf('HTTP/%s %s %s', $response->getProtocolVersion(), $response->getStatusCode(), $response->getReasonPhrase()), true, $response->getStatusCode());

    // headers
    foreach ($response->getHeaders() as $header => $values) {
        foreach ($values as $value) {
            header($header . ': ' . $value, false, $response->getStatusCode());
        }
    }
}

echo $response->getBody();
