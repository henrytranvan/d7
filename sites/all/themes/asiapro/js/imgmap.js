jQuery(document).ready(function($) {

        if($('#edit-field-region-tid-1618').prop( "checked" ) ) {		
		   $('#rbn').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else {
		 $('#rbn').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
		}
    
	   if($('#edit-field-region-tid-1617').prop( "checked" )) {		
		   $('#rbw').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else{
		 $('#rbw').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
	    }
		
        if($('#edit-field-region-tid-1621').prop( "checked" )) {		
		   $('#rne').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else{
		 $('#rne').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
	    }
		 if($('#edit-field-region-tid-1616').prop( "checked" )) {		
		   $('#rmm').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else{
		 $('#rmm').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
	    }
		
		 if($('#edit-field-region-tid-1620').prop( "checked" )) {		
		   $('#rg').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else{
		 $('#rg').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
	    }
		
		if($('#edit-field-region-tid-1619').prop( "checked" )) {		
		   $('#rgs').data('maphilight',{alwaysOn:true}).trigger('alwaysOn.maphilight');
		} else{
		 $('#rgs').data('maphilight',{alwaysOn:false}).trigger('alwaysOn.maphilight');
	    }
		
		

		
			
		$("#rbn").live( "click", function( event ) {						
		 $('#edit-field-region-tid-1618').attr("checked", !$('#edit-field-region-tid-1618').attr("checked"));
		 $('#edit-submit-training-courses-view').click();		 
		 return false;
		});
		
		
		 $("#rbw").live( "click", function( event ) {
		 $('#edit-field-region-tid-1617').attr("checked", !$('#edit-field-region-tid-1617').attr("checked"));
		 $('#edit-submit-training-courses-view').click();		 
		 return false;
		});
		
		 $("#rmm").live( "click", function( event ) {
		 $('#edit-field-region-tid-1616').attr("checked", !$('#edit-field-region-tid-1616').attr("checked"));
		 $('#edit-submit-training-courses-view').click();	 
		 return false;
		});
		
		
		
		 $("#rne").live( "click", function( event ) {
		 $('#edit-field-region-tid-1621').attr("checked",!$('#edit-field-region-tid-1621').attr("checked"));
		 $('#edit-submit-training-courses-view').click();		 
		 return false;
		});
		
		 $("#rg").live( "click", function( event ) {
		 $('#edit-field-region-tid-1620').attr("checked", !$('#edit-field-region-tid-1620').attr("checked"));
		 $('#edit-submit-training-courses-view').click();		 
		 return false;
		});
		
		 $("#rgs").live( "click", function( event ) {
		 $('#edit-field-region-tid-1619').attr("checked", !$('#edit-field-region-tid-1619').attr("checked"));
		 $('#edit-submit-training-courses-view').click();		 
		 return false;
		});
		




		
});
