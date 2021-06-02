<?php
/**
 * 
		'elgg_hybridauth:user:authenticate' => [
			'path' => 'hybridauth/authenticate',
			'resource' => 'hybridauth/authenticate'
		],
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
**/
return [
	'bootstrap' => \Pessek\Hybridauth\Bootstrap::class,
	'routes' => [
		'elgg_hybridauth:settings:user' => [
			'path' => '/hybridauth/accounts/{username}',
			'resource' => 'hybridauth/accounts',
		],
		'elgg_hybridauth:user:authenticate' => [
			'path' => 'hybridauth/authenticate',
			'resource' => 'hybridauth/authenticate',
			'walled' => false,
		],
		'elgg_hybridauth:user:endpoint' => [
			'path' => 'hybridauth/endpoint',
			'resource' => 'hybridauth/endpoint',
			'walled' => false,
		],
	],
];
