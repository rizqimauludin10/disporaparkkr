<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		
		return view('admin/index', $data);
	}

	public function userlist()
	{
		$data['title'] = 'User List';
		$users = new \Myth\Auth\Models\UserModel();
		$data['users'] = $users->findAll();
		
		return view('admin/userlist', $data);
	}
}
