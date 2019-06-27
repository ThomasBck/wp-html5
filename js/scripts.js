(function ($, root, undefined) {
	
	$(function () {
		
		cf7hide();
	    $('form.wpcf7-form').submit(function(){
	        cf7hide();
	    });
	    function cf7hide(){
	        $('div.wpcf7-response-output').on('click',function(){
	            $(this).slideUp();
	        });
	        setTimeout(function(){
	            $('form.wpcf7-form > div.wpcf7-response-output').slideUp();
	            
	        },5000);
	    }
            
		
		
		
		
	});
	
})(jQuery, this);
