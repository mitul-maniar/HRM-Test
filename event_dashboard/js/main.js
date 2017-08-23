$(document).ready(function () {     
    $("#eventname").change(function () {
        toggleFields();
    });
    toggleFields();
});

function toggleFields() {
	
	$("#member_2").val('');
	$("#member_3").val('');
	$("#member_4").val('');
	$("#member_5").val('');
	$("#member_6").val('');
	$("#member_7").val('');
	$("#member_8").val('');
	$("#member_9").val('');
	$("#member_10").val('');
	$("#member_11").val('');
	$("#member_12").val('');
	
	//LOGIC FOR events
	if (($("#eventname").val()=='clay_modeling') || ($("#eventname").val()=='rangoli') || ($("#eventname").val()=='dance_duet') || ($("#eventname").val()=='singing_duet')) {
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideUp();
        $("#div_4").slideUp();
        $("#div_5").slideUp();
		$("#div_6").slideUp();
        $("#div_7").slideUp();
        $("#div_8").slideUp();
        $("#div_9").slideUp();
        $("#div_10").slideUp();
        $("#div_11").slideUp();
        $("#div_12").slideUp();
		
		if(($("#eventname").val()=='dance_duet') || ($("#eventname").val()=='singing_duet'))
		{
	 		$("#member_2").prop('required',true);
	 		$("#member_3").prop('required',false);
		 	$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
	   	} 
	   	else if(($("#eventname").val()=='clay_modeling') || ($("#eventname").val()=='rangoli')){
	   		$("#member_2").prop('required',false);
	   		$("#member_3").prop('required',false);
		 	$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
	   	}  
    }

    else if (($("#eventname").val()=='story_drawing') || ($("#eventname").val()=='poster_making') || ($("#eventname").val()=='antakshari')) {
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
        $("#div_4").slideUp();
        $("#div_5").slideUp();
		$("#div_6").slideUp();
        $("#div_7").slideUp();
        $("#div_8").slideUp();
        $("#div_9").slideUp();
        $("#div_10").slideUp();
        $("#div_11").slideUp();
        $("#div_12").slideUp();
        if(($("#eventname").val()=='story_drawing') || ($("#eventname").val()=='antakshari'))
	   	{
			$("#member_2").prop('required',true);
			$("#member_3").prop('required',false);
			$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);		
	   	}
	   	else if(($("#eventname").val()=='poster_making'))
	   	{
	   		$("#member_2").prop('required',false);
			$("#member_3").prop('required',false);
			$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
	   	}
    }

    else if (($("#eventname").val()=='treasure_hunt')) {
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
		$("#div_4").slideDown();
		$("#div_5").slideUp();
		$("#div_6").slideUp();
        $("#div_7").slideUp();
        $("#div_8").slideUp();
        $("#div_9").slideUp();
        $("#div_10").slideUp();
        $("#div_11").slideUp();
        $("#div_12").slideUp();
        if(($("#eventname").val()=='treasure_hunt'))
	   	{
			$("#member_2").prop('required',true);
			$("#member_3").prop('required',false);
			$("#member_3").prop('required',false);
			$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);			
	   	}
    }

    else if (($("#eventname").val()=='main_bhi_filmy_hoon')){
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
        $("#div_4").slideDown();
        $("#div_5").slideDown();
        $("#div_6").slideUp();
        $("#div_7").slideUp();
        $("#div_8").slideUp();
        $("#div_9").slideUp();
        $("#div_10").slideUp();
        $("#div_11").slideUp();
        $("#div_12").slideUp();
		
		if(($("#eventname").val()=='main_bhi_filmy_hoon'))
	   	{
	   		$("#member_2").prop('required',false);
		 	$("#member_3").prop('required',false);
		 	$("#member_4").prop('required',false);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
	   }       
    }

	else if (($("#eventname").val() == 'leggy_cricket') || ($("#eventname").val() == 'singing_group') || ($("#eventname").val()=='ulta_fulta_film_jagat')){
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
        $("#div_4").slideDown();
        $("#div_5").slideDown();
        $("#div_6").slideDown();
        $("#div_7").slideUp();
        $("#div_8").slideUp();
        $("#div_9").slideUp();
        $("#div_10").slideUp();
        $("#div_11").slideUp();
        $("#div_12").slideUp();
		
		if(($("#eventname").val()=='leggy_cricket'))
	   	{
			$("#member_2").prop('required',true);
		 	$("#member_3").prop('required',true);
		 	$("#member_4").prop('required',true);
		 	$("#member_5").prop('required',true);
		 	$("#member_6").prop('required',true);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);	
	   }       
	   else if(($("#eventname").val()=='ulta_fulta_film_jagat') || ($("#eventname").val() == 'singing_group'))
	   {
			$("#member_2").prop('required',true);
			$("#member_3").prop('required',true);
			$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);	
	   }
    }

    else if (($("#eventname").val()=='band_group')) {
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
		$("#div_4").slideDown();
		$("#div_5").slideDown();
        $("#div_6").slideDown();
        $("#div_7").slideDown();
		$("#div_8").slideDown();
		$("#div_9").slideUp();
		$("#div_10").slideUp();
		$("#div_11").slideUp();
        $("#div_12").slideUp();
        if(($("#eventname").val()=='band_group'))
	   	{
		 	$("#member_2").prop('required',true);
		 	$("#member_3").prop('required',true);
		 	$("#member_4").prop('required',true);
		 	$("#member_5").prop('required',false);
		 	$("#member_6").prop('required',false);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
	   }
    }

    else if (($("#eventname").val()=='nukkad_natak') || ($("#eventname").val()=='dance_group')) {
        $("#div_1").slideDown();
        $("#div_2").slideDown();
        $("#div_3").slideDown();
		$("#div_4").slideDown();
		$("#div_5").slideDown();
        $("#div_6").slideDown();
        $("#div_7").slideDown();
		$("#div_8").slideDown();
		$("#div_9").slideDown();
		$("#div_10").slideDown();
		$("#div_11").slideDown();
        $("#div_12").slideDown();
        if(($("#eventname").val()=='dance_group'))
	   	{
		 	$("#member_2").prop('required',true);
		 	$("#member_3").prop('required',true);
		 	$("#member_4").prop('required',true);
		 	$("#member_5").prop('required',true);
		 	$("#member_6").prop('required',true);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
		 	$("#member_9").prop('required',false);
		 	$("#member_10").prop('required',false);
		 	$("#member_11").prop('required',false);
		 	$("#member_12").prop('required',false);
		 	
	   	}
	   	else if(($("#eventname").val()=='nukkad_natak'))
	   	{
		 	$("#member_2").prop('required',true);
		 	$("#member_3").prop('required',true);
		 	$("#member_4").prop('required',true);
		 	$("#member_5").prop('required',true);
		 	$("#member_6").prop('required',true);
		 	$("#member_7").prop('required',false);
		 	$("#member_8").prop('required',false);
		 	$("#member_9").prop('required',false);
		 	$("#member_10").prop('required',false);
		 	$("#member_11").prop('required',false);
		 	$("#member_12").prop('required',false);
	   	}
    }
    
    else{
        $("#div_1").slideUp();
        $("#div_2").slideUp();
        $("#div_3").slideUp();
        $("#div_4").slideUp();
        $("#div_5").slideUp();
        $("#div_6").slideUp();
		$("#div_7").slideUp();
		$("#div_8").slideUp();
		$("#div_9").slideUp();
		$("#div_10").slideUp();
		$("#div_11").slideUp();
        $("#div_12").slideUp();
		$("#member_1").val()="";
		$("#member_2").val()="";
		$("#member_3").val()="";
		$("#member_4").val()="";
		$("#member_5").val()="";
		$("#member_6").val()="";
		$("#member_7").val()="";
		$("#member_8").val()="";
		$("#member_9").val()="";
		$("#member_10").val()="";
		$("#member_11").val()="";
		$("#member_12").val()="";
        
    }
}
