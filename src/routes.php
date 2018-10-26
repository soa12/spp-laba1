<?php
/**
 * Created by PhpStorm.
 * User: sabyrzhan
 * Date: 25.10.18
 * Time: 23:53
 */

$app->get('/',
    function () {
        echo 'hi';
    }
);

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
    $this->logger->addInfo('name =' . $args['name']);
})->setName('profile');

$app->get('/tickets', function ($request, $response) {
    $this->logger->addInfo('Ticket list');
    $tickets = array('ticket1' => array(
        'Title' => 'Title',
        'Component' => 'Component',
        'Description' => 'Description',
        'Actions' => 'Actions',
    ));

    $response = $this->view->render($response, 'tickets.phtml', ['tickets' => $tickets]);
    return $response;
});

$app->post(
    '/check', 'DocumentController:check'
);

$app->get(
    '/documents',
    function () {
        echo 'doclist';
    }
);
