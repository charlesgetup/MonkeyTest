@if($errors->has())
	<ul>
		{{$errors->first('first_name', 		   '<li>:message</li>')}}
		{{$errors->first('surname', 		   '<li>:message</li>')}}
		{{$errors->first('email', 		   '<li>:message</li>')}}
		{{$errors->first('daytime_contact_number', '<li>:message</li>')}}
		{{$errors->first('address', 		   '<li>:message</li>')}}
		{{$errors->first('suburb', 		   '<li>:message</li>')}}
		{{$errors->first('state', 		   '<li>:message</li>')}}
		{{$errors->first('postcode', 		   '<li>:message</li>')}}
		{{$errors->first('enquiry_type', 	   '<li>:message</li>')}}
		{{$errors->first('product_name', 	   '<li>:message</li>')}}
		{{$errors->first('product_size', 	   '<li>:message</li>')}}
		{{$errors->first('use_by_date', 	   '<li>:message</li>')}}
		{{$errors->first('batch_code', 	   	   '<li>:message</li>')}}
		{{$errors->first('enquiry', 		   '<li>:message</li>')}}
	</ul>
@endif
