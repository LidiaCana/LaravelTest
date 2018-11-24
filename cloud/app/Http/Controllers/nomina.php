	<?php 
	namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nomina extends Controller
{
    //
    public function index(){

    	return view('home');
    }

    public function datashboard(){

    	return view('nominaV');
    }
}
 