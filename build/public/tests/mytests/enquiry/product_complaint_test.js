registerTest ('Product complaint test', {
    setup: function($) {
        $('#first_name').val('Charles');
        $('#surname').val('Li');
	$('#email').val('charles@example.com');
	$('#daytime_contact_number').val('98765432');
	$('#address').val('1 george street');
	$('#suburb').val('Sydney');
	$('#state').val('NSW');
	$('#postcode').val('2000');
	$('#enquiry_type').val('Product complaint');
	$('input[type="submit"]').click();
    },
    load:function() {
        this
	.wait(function($){
	    return $('ul').length;
	},5000)
        .test ("Can we submit form without product info when use select 'Product compllaint' as enquiry type?",function($){
	    // After click submit, if data is invalid, validation error will show up and this means the form is not submitted successfully
            ok($('ul').length, 'Cannot submit form without product info when use select "Product compllaint" as enquiry type');
        })
    }
});
