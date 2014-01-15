registerTest ('Require fields test', {
    setup: function($) {
        $('input[type="submit"]').click();
    },
    load:function() {
        this
	.wait(function($){
		return $('p#message').length;
	}, 5000)
        .test ("Can we submit form without required data?",function($){
	    // If the form can be submit, we should see the success message; if not, this means the form is not submitted
            ok(!$('p#message').length, 'Cannot submit form without required data');
        })        
    }
});
