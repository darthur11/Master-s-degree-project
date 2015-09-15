function AjaxSendard(){
			if (led1.checked)
				state1=1;
			else 
				state1=0;
			
			if (led2.checked)
				state2=1;
			else 
				state2=0;
				
			var http=createCORSRequest("GET","http://10.110.1.20?LED1="+state1+"&LED2="+state2);

			http.onload = function() {
				if (http.readyState==4 && http.status == 200)
				{
					
				}
			}
			http.send();
		}
		