<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome(){
		$requestData = Input::all();

		// The following data can be retrieved from DB tables
		$states = array(
			''	=> ' ',
			'ACT' 	=> 'ACT', 
			'NSW' 	=> 'NSW', 
			'NT' 	=> 'NT', 
			'QLD' 	=> 'QLD', 
			'SA' 	=> 'SA', 
			'TAS' 	=> 'TAS', 
			'VIC' 	=> 'VIC', 
			'WA' 	=> 'WA'
		);
		$enquiryTypes = array(
			''				=> ' ',
			'General enquiry' 		=> 'general enquiry',
			'Product feedback or enquiry' 	=> 'Product feedback or enquiry',
			'Product complaint' 		=> 'Product complaint'
		);
		$viewData = array('states' => $states, 'enquiryTypes' => $enquiryTypes);
	
		if(!empty($requestData)){
			$validation = CustomerEnquiry::validate($requestData);
			if($validation->fails()){
				return Redirect::route('hello')->witherrors($validation)->withinput();
			}else{
				CustomerEnquiry::create(array(
					'first_name' 		 => Input::get('first_name'),
					'surname' 		 => Input::get('surname'),
					'email' 		 => Input::get('email'),
					'daytime_contact_number' => Input::get('daytime_contact_number'),
					'address' 		 => Input::get('address'),
					'suburb' 		 => Input::get('suburb'),
					'state' 		 => Input::get('state'),
					'postcode' 		 => Input::get('postcode'),
					'enquiry_type' 		 => Input::get('enquiry_type'),
					'product_name' 		 => Input::get('product_name'),
					'product_size' 		 => Input::get('product_size'),
					'use_by_date' 		 => Input::get('use_by_date'),
					'batch_code' 		 => Input::get('batch_code'),
					'enquiry' 		 => Input::get('enquiry')
				));
				return Redirect::route('hello')->with('message','Success!');
			}
		}
		return View::make('hello', $viewData);
	}

}
