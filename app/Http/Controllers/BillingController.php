<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{

public function index(){
  return view('billing/home');
}

public function show(){
  return view('billing/display');
}

}
