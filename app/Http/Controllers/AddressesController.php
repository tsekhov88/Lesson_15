<?php

namespace App\Http\Controllers;

use App\Address;

class AddressesController extends Controller {

	public function index()
	{
		$is_auth = session()->get('is_auth');
		if(!$is_auth) {
			return redirect('login');
		}

		$query = Address::query();
		$items = $query->get();

		return view('addresses', [
			'items' => $items
		]);
	}

	public function store() 
	{
		$date = request()->all();

		$model = new Address(); //получили модель
		$model->fill($date); // запомнили 
		$model->save(); //сохранили в базу

		

		return redirect('/addresses');
	}
}