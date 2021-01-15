<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'authfilter' => \App\Filters\AuthFilter::class,

	];

	// Always applied before every request
	public $globals = [
		//filter kalo blm login
		'before' => [
			'authfilter' => ['except' => [
				'auth', 'auth/*',
				'web', 'web/*',
				'/'
			]]
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			//filter kalo udah login
			'authfilter' => ['except' => [
				'home', 'home/*',
				'user', 'user/*',
				'order', 'order/*',
				'orderUser', 'orderUser/*',
				'orderAdmin', 'orderAdmin/*',

			]],
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
