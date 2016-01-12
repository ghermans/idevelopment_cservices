<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomersController extends Controller
{

  public function __construct()
{

}

public function index()
{

  return view('customers/search');
}

public function search()
{

  return view('customers/search');
}


// List all clients stored in plesk
 public function list()
    {
      $config = array(
          'host'=> \Config::get('plesk.url'),
          'username'=> \Config::get('plesk.username'),
          'password'=> \Config::get('plesk.password'),
      );

      $request = new \pmill\Plesk\ListClients($config);
      $info = $request->process();
      return view('customers/list', ["info" =>  $info]);


/* $sites= new \pmill\Plesk\ListSubscriptions($config);
$info2 = $sites->process();
print_r($info2);
echo "</pre>";
*/
}


// Create a new customer to plesk
public function save(Request $request)
{

  $config = array(
      'host'=> \Config::get('plesk.url'),
      'username'=> \Config::get('plesk.username'),
      'password'=> \Config::get('plesk.password'),
  );

  $params = array(
  	'contact_name' => $request->get('contact_name'),
    'address'      => $request->get('address'),
    'city'         => $request->get('city'),

    'phone'        => $request->get('phone'),
  	'username'     => $request->get('plesk_username'),
  	'password'     => $request->get('plesk_password'),
    'email'        => $request->get('department_name'),
  );
  $request = new \pmill\Plesk\CreateClient($config, $params);
  $info = $request->process();
  echo "<pre>";
  var_dump($info);
  echo "/<pre>";
  echo "<BR>Created client id: ".$request->id;
}

public function view()
{
  $config = array(
      'host'=> Config::get('plesk.url'),
      'username'=> \Config::get('plesk.username'),
      'password'=> \Config::get('plesk.password'),
  );

  $params = array(
    'id'=> 2,
    //'username'=>'',
);
$request = new \pmill\Plesk\GetClient($config, $params);
$info = $request->process();
var_dump($info);
}

}
