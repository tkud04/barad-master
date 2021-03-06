<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
    {
        $ret = null;
    	return view('index');
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getIndexx()
    {
    	abort(404);
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getAbout()
    {
        $ret = null;
    	return view('about');
    }	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getSubscribe()
    {
        $ret = null;
    	return redirect()->intended('/');
    }
	
	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function postContact(Request $request)
    {
        $req = $request->all();
    	return redirect()->intended('/');
    }
	
    /**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function getZoho()
    {
        $ret = "1535561942737";
    	return $ret;
    }


}
