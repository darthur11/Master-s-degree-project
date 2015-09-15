pattern1=/\u0026/g;
		pattern2=/\u003d/g;
		
		sensnum=new Array();
		sensvalue=new Array();
		senstype=new Array();
		
function AjaxSendserver() {
			var http=createCORSRequest("GET",server+"/dbdata.php?request=sensors");
			http.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 

			http.onload = function() {
				if (http.readyState==4)
				{
				blocktemp.innerHTML="";
					blockhumid.innerHTML="";
					blockairqual.innerHTML="";
					blockwatleak.innerHTML="";
					blockmotion.innerHTML="";
					blocklumin.innerHTML="";
					x=http.responseText;
					c=x.split(pattern1);
					for(i=0;i<c.length-1;i++)
						{
						temp=c[i].split(pattern2);
						sensnum[i]=Number(temp[0].substring(1,3));
						senstype[i]=Number(temp[0].substring(0,1));
						sensvalue[i]=temp[1];
//				alert(c[i]+"  "+type[senstype[i]]+" of "+sensnum[i]+" is "+sensvalue[i]);
						switch(senstype[i])
							{
							case 0:
								blocktemp.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							case 1:
								blockhumid.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							case 2:
								blockairqual.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							case 3:
								blockwatleak.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							case 4:
								blockmotion.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							case 5:
								blocklumin.innerHTML+="Sensor "+sensnum[i]+" value is "+sensvalue[i]+"<br>";
								break;
							default:
								break;
						}

					}
				}
			}
			http.send();
			
		}
		setInterval(AjaxSendserver,10000);