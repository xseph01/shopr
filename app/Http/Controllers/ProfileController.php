<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class ProfileController extends Controller {

   public function index() {
      return view('profile');
   }
}
