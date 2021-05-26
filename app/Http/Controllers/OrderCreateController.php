<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events\OrderCreated;

class OrderCreateController extends Controller
{
	public function __invoke(){
				
		$order = [
			"total_price" => 10,
		];
		
        //event(new OrderCreated($order));
		event(new OrderCreated($order));		
	}
}
