@extends('layouts.common')

@section('title')
	Customer Enquiry
@stop

@section('body-class')

        	hello
@stop

@section('body')

        <!-- Add your site or application content here -->
        <h3>Customer Enquiry</h3>
	@include('common.customer_enquiries_errors')

	{{Form::open(array('url' => '/', 'method' => 'post'))}}

	<p>
		{{Form::label('first_name', 'First Name *')}} <br />
		{{Form::text('first_name', Input::old('first_name'), array('required' => 'required'))}}
	</p>
	<p>
                {{Form::label('surname', 'Surname *')}} <br />
                {{Form::text('surname', Input::old('surname'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('email', 'Email Address *')}} <br />
                {{Form::email('email', Input::old('email'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('daytime_contact_number', 'Daytime Contact Number *')}} <br />
                {{Form::text('daytime_contact_number', Input::old('daytime_contact_number'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('address', 'Address *')}} <br />
                {{Form::text('address', Input::old('address'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('suburb', 'Suburb *')}} <br />
                {{Form::text('suburb', Input::old('suburb'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('state', 'State *')}} <br />
                {{Form::select('state', $states,  Input::old('state'), array('required' => 'required'))}}
        </p>
        <p>
                {{Form::label('postcode', 'Postcode *')}} <br />
                {{Form::text('postcode', Input::old('postcode'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('enquiry_type', 'Enquiry Type *')}} <br />
                {{Form::select('enquiry_type', $enquiryTypes, Input::old('enquiry_type'), array('required' => 'required'))}}
        </p>
	<p>
                {{Form::label('product_name', 'Product Name')}} <br />
                {{Form::text('product_name', Input::old('product_name'))}}
        </p>
	<p>
                {{Form::label('product_size', 'Product Size')}} <br />
                {{Form::text('product_size', Input::old('prpduct_size'))}}
        </p>
	<p>
                {{Form::label('use_by_date', 'Use By Date')}} <br />
                {{Form::text('use_by_date', Input::old('use_by_date'))}}
        </p>
	<p>
                {{Form::label('batch_code', 'Batch Code')}} <br />
                {{Form::text('batch_code', Input::old('batch_code'))}}
        </p>
	<p>
                {{Form::label('enquiry', 'Enquiry')}} <br />
                {{Form::textarea('enquiry', Input::old('enquiry'))}}
        </p>	
	</p>
		{{Form::submit('Submit Enquiry')}}	
	</p>

	{{Form::close()}}
@stop

