<?php

	App::uses('SubdomainRoute', 'Route');

	function getSubDomain() {
		$url = explode('.', env('HTTP_HOST'));
		return $url;
	}
	$subDomain = getSubDomain();

	if($subDomain[0] != 'www' && isset($subDomain[2])) {
		Router::connect('/', array('controller' => 'products', 'action' => 'index'));
	} else {
		Router::connect('/', array('controller' => 'sites', 'action' => 'index'));
	}

	Router::connect('/product/:id-:slug', array('controller' => 'products', 'action' => 'view'), array('pass' => array('id', 'slug'), 'id' => '[0-9]+', 'routeClass' => 'SubdomainRoute'));

	Router::connect('/sitemap.xml', array('controller' => 'products', 'action' => 'sitemap'));

	Router::connect(
		'/recipe/:short_name/:slug',
		array(
			'controller' => 'recipes',
			'action' => 'view'
		),
		array(
			'pass' => array('slug')
		)
	);

	Router::connect(
		'/blog/:year/:month/:day/:slug',
		array(
			'controller' => 'blogs',
			'action' => 'view'
		),
		array(
			'pass' => array(
				'slug',
			)
		)
	);

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();

	require CAKE . 'Config' . DS . 'routes.php';
