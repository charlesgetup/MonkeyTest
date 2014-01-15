<?php
class CustomerEnquiry extends Eloquent {
	
	protected $fillable = array(
		'first_name', 
		'surname',
		'email',
		'daytime_contact_number',
		'address',
		'suburb',
		'state',
		'postcode',
		'enquiry_type',
		'product_name',
		'product_size',
		'use_by_date',
		'batch_code',
		'enquiry'
	);
	
	public static $rules = array(
		'first_name' 		 => 'required',
		'surname' 		 => 'required',
		'email' 		 => 'required',
		'daytime_contact_number' => 'required',
		'address'  		 => 'required',
		'suburb' 		 => 'required',
		'state' 		 => 'required',
		'postcode' 		 => 'required',
		'enquiry_type' 		 => 'required'
	);

	public static function validate($data){
		if(isset($data['enquiry_type']) && $data['enquiry_type'] == 'Product complaint'){
			$additionalRules = array(
				'product_name' => 'required',
				'product_size' => 'required',
				'use_by_date'  => 'required',
				'batch_code'   => 'required'
			);
			static::$rules = array_merge(static::$rules, $additionalRules);
		}
		return Validator::make($data, static::$rules);
	}
}
