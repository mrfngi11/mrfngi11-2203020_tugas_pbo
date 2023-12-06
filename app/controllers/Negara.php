<?php

namespace App\Controllers;

use App\Core\Controller;

class Negara extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Negara();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('negara/index', $data);
	}

	public function input()
	{
		$this->dashboard('negara/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/negara');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('negara/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/negara');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/negara');
	}
}
