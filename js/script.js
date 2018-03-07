function callApi()
{
	$.get({
                url: "js/getInfo.php",
                contentType: "application/json",
                data :{
                	"number":parseInt(document.getElementsByClassName("number")[0].value)
                		},
                success: function(JSON){
                	var i=0;
                	var str='';
                	JSON=JSON.split(",");
                	for(i=0;i<JSON.length;i++)
							{
								
								str=str+'<div class="row">'+JSON[i]+'</div>';
							}
							$(".output-half")[0].innerHTML=str;
                }
            });
}

