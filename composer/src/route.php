<?php

$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'index.phtml');
});

$app->get('/hello/{name}', function ($request, $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});