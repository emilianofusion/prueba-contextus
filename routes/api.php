<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the api.
|
 */

$r->addGroup('/api', function (FastRoute\RouteCollector $r) {

	$r->put('/user-notification', 'contextusController::updateUserNotification');
	$r->post('/push-notification', 'contextusController::pushNotification');
	$r->get('/listen-notifications', 'contextusController::listenNotifications');

});
