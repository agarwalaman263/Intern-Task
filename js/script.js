function callApi() {
		var number=parseInt(document.getElementsByClassName("number")[0].value)
    
    if (number >= 0) 
    {
     if(number==0 || number==1 || number==2)
     {
     	$(".error-container")[0].innerHTML="The output is blank for "+ number;
     }

     else
     {
     	$(".error-container")[0].innerHTML="";

     	        $.get({
     	            url: "js/getInfo.php",
     	            contentType: "application/json",
     	            data: {
     	                "number": parseInt(document.getElementsByClassName("number")[0].value)
     	            },
     	            success: function(JSON) 
     	            {
     	                if (JSON.length != 0) 
     	                {
     	                	$(".output-half").css("display", "block");
     	                    console.log(JSON);
     	                    var i = 0;
     	                    var str = '';
     	                    JSON = JSON.split(",");
     	                    for (i = 0; i < JSON.length; i++) 
     	                    {
     	                        str = str + '<div class="row">' + JSON[i] + '</div>';
     	                    }
     	                    $(".output-half")[0].innerHTML = str;
     	
     	                } 
     	                else 
     	                {
     	                    $(".output-half").css("display", "none");
     	                }
     	            }
     	        });
     	    } 
     	}
    else 
    {
    	$(".error-container")[0].innerHTML="";
        $(".output-half").css("display", "none");
    }
}
