<?php

namespace App\Models;

class pushNotificationsModel {

	public function getNewNotification($user_id) {
		global $app;
		$query = $app->buildQuery('PushNotification');
		$query
			->select('pushNotifications')
			->where('pushNotifications.processed=false')
			->andWhere('pushNotifications.user_id=' . $user_id)
			->from('PushNotification', 'pushNotifications')
			->orderBy('pushNotifications.id')
			->setMaxResults(1)
		;
		$result = $app->getResults($query, 2);
		if ($result) {
			$result = $result[0];
		};
		return $result;
	}
}