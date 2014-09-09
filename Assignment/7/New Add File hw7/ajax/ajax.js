//cs275 Assignment 7
var XHR;
function getXMLHTTPRequest(){
	if(window.ActiveXObject){
		XHR=new ActiveXObject('Microsoft.XMLHTTP');
	}
	if(window.XMLHttpRequest){
		XHR=new XMLHttpRequest();
	}
}
function checkNameLog(){
	var user=document.log.username.value;
	getXMLHTTPRequest();
	XHR.open("GET","../ajax/checkname.php?username="+user,true);
	XHR.onreadystatechange=useHttpResponse;
	XHR.send(null);
}
function checkNameReg(){
	var user=document.reg.username.value;
	getXMLHTTPRequest();
	XHR.open("GET","../ajax/checkname.php?username="+user,true);
	XHR.onreadystatechange=useHttpResponse;
	XHR.send(null);
}
function useHttpResponse(){
	if(XHR.readyState == 4){
		if(XHR.status == 200){	
			var textHTML=XHR.responseText;			
			document.getElementById('returnbox').innerHTML=textHTML;
		}
	}
}