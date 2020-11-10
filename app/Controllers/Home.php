<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$controllerData = [
			'breadcrumb' => 'home/index'
		];
		return view('appHome/index', $controllerData);
	}
}
