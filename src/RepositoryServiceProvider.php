<?php

namespace SJaswinder\Repository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider 
{
	/**
	 * bootstrap application services
	 * @return void
	 */
	public function boot()
	{
		include __DIR__.'/routes.php';
	}

	/**
	 * register application services
	 * @return void
	 */
	public function register() 
	{

	}
}