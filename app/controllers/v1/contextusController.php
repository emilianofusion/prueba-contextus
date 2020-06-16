<?php

namespace App\Controllers;

class contextusController {

	//Set vars
	private $app;
	private $user;
	private $push_model;
	private $push_entity;

	public function __construct($app) {
		$this->app = $app;
		// Connect to database & Load user store
		try {
			$app->connectORM();
			$users = $app->loadEntity('User');
			$this->push_entity = $this->app->loadEntity('PushNotification');
			$this->push_model = $this->app->loadModel('pushNotifications');
		} catch (Exception $e) {
			$app->checkConnection();
		}
		// Get user id=1
		$this->user = $users->find(1);
	}

	public function processView() {

		// Render front contextus
		$this->app->render(
			'contextus',
			[
				'allow_pnotification' => $this->user->getAllowPNotification(),
				'user_id' => $this->user->getId(),
			]
		);

	}

	// Update user allow notification
	public function updateUserNotification() {
		$alow_notifications = $this->app->put()->alow_notifications;

		$this->user->setAllowPNotification($alow_notifications);

		try {
			$this->app->save($this->user);
			$json = jsonResponse([
				"msj" => "User notifications updated to " . $alow_notifications,
			]);
		} catch (Exception $e) {
			$json = jsonResponse([
				"msj" => "Error to update: " . $e->getMessage(),
			],
				500
			);
		}

		return $json;
	}

	// Create push notification
	public function pushNotification() {
		$vars = $this->app->post();
		$text = $vars->text;
		$body = $vars->body;

		$push_notification = new \PushNotification;
		$push_notification->setUserId(1);
		$push_notification->setText($text);
		$push_notification->setBody($body);
		$push_notification->setProcessed(false);

		try {
			$this->app->save($push_notification);
			$json = jsonResponse([
				"msj" => "Push notification created!",
			]);
		} catch (Exception $e) {
			$json = jsonResponse([
				"msj" => "Error to create: " . $e->getMessage(),
			],
				500
			);
		}

		return $json;
	}

	// Check notifications
	public function listenNotifications() {
		// Load notification
		$response = $this->push_model->getNewNotification($this->user->getId());

		if ($response) {
			$notification = $this->push_entity->find($response["id"]);
			// Mark as processed
			$notification->setProcessed(1);
			$this->app->save($notification);
			// Json response
			return jsonResponse($response);
		} else {
			usleep(100000);
			clearstatcache();
			$this->listenNotifications();
		}

	}

}