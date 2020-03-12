<?php

namespace SJaswinder\Repository;

class Repository 
{
	private $model;

	function __construct($model)
	{
		$this->setModel($model);
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function getBuilder()
	{
		return $this->model;
	}

	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	public function getAll()
	{
		return $this->model->all();
	}
}