<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receive;

class ReceiverController extends Controller
{
    //
    public function getAllOrders() {
    	return Receive::all();
    }

    public function createOrder(Request $request) {
    	$data = array(
    		'data_json' => json_encode( $request->all() )
    	);
    	$receive = new Receive($data);
    	$receive->save();
    	return $receive;
    }
}
