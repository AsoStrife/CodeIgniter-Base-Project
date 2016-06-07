$("#adminCheckboxGallery").justifiedGallery(); 

    $('.image-checkbox').click(function(e) {
    	var id = $(this).attr("data-id");
    	
        if( $('#' + id).is(":checked") != true)
        {
        	$(this).addClass('selected');
        	$('#' + id).prop('checked', true);
        }
        else
        {
        	$('#' + id).prop('checked', false);
			$(this).removeClass('selected');
            
        }
       
    });