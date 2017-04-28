<?php

/**
 * GOALS:
 */

// Get all goals of a campaign
$vwo->account($accountId)->campaign($campaignId)->goals();

// Find a goal
$vwo->account($accountId)->campaign($campaignId)->goal($goalId)->find();

// Create a goal in a project
$vwo->account($accountId)->campaign($campaignId)->createGoal([
	'goals' => [
		'name' => 'New Goal 2',
		'type' => 'visitPage',
		'urls' => [
			array(
				'type' => 'url',
				'value' => 'http://google.com'
			)
		]
	]
]);

// Update a goal
$vwo->account($accountId)->campaign($campaignId)->goal($goalId)->update([
	'goals' => [
		'name' => 'Update Goal 2 name'
	]
]);

// Delete a goal
$vwo->account($accountId)->campaign($campaignId)->goal($goalId)->delete();