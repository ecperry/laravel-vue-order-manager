<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ordersController extends Controller
{
  public function index ()

{
  // GET request
  // list orders
  $orders = orders::all();
  return Response::json($orders);
}

public function create(Request $request)

{
//POST /orders
//create new order
order::create($request->all());
return Response::json(['created => true']);

}

public function show ($id)

{

// GET /orders/$id
// show a single game info
$order = Order::find($id);
return Response::json($order);

}

public function update (Request $request, $id)

{
// DELETE /orders/$id
// update a single game
$order = Order::find($id);
$success = $order->update($request->all());
return Response::json(['updated' => $success]);

}

public function destroy ($id)

{
//DELETE /orders/$id
// remove a single order
$order = Order::find($id);
$order->delete();
return Response::json(['deleted' => true]);
  }
}
