<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receive;

class ReceiverController extends Controller
{
    //
    public function getAllOrders() {
    	return Receive::all()->orderBy('created_at');
    }

    public function createOrder(Request $request) {
    	$data = array(
            'data_json' => json_encode( array_merge( $request->all(), $request->header() ) )
    	);
    	$receive = new Receive($data);
    	$receive->save();
    	return $receive;
    }
}
