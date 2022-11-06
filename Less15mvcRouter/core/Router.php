<?php

namespace Core;

use App\Controllers\Error404;

class Router
{
	private string $exp;
	private array $config = [];

	public function __construct()
	{
		$this->exp = substr($_SERVER["REQUEST_URI"], 1);
		$this->config = include_once (__DIR__) . '/../app/config/config.php';
	}

	public function run()
	{
		if (array_key_exists($this->exp, $this->config)) {
			$classPath = 'App\Controllers\\' . $this->getClassName();
		} else {
			$classPath = new Error404();
		}

		if (class_exists($classPath)) {
			$obj = new $classPath;
		} else {
			$obj = new Error404;
		}

		$methodName = $this->getMethodName();
		if (method_exists($obj, $methodName)) {
			$obj->$methodName();
		} else {
			(new Error404)->index();
		}
	}

	private function getMethodName(): string
	{
		$expmethod = explode(':', $this->config[$this->exp]);
		return $expmethod[1];
	}

	private function getClassName(): string
	{
		$exp = explode(':', $this->config[$this->exp]);
		return $exp[0];
	}
}
