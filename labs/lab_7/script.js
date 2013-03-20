var XMLHttpRequestObject = false
if (window.XMLHttpRequest) {
	XMLHttpRequestObject = new XMLHttpRequest()
} else if (window.ActiveXObject) {
	XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP")
}

function myFunction(){
	var selector = document.getElementById("stateSelector")	
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("GET", "getStates.php")
		XMLHttpRequestObject.onreadystatechange = function() {
			if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
				var response = XMLHttpRequestObject.responseText;
				var split_response = response.split(",");
				for(var i = 0; i < split_response.length-1; i++){
					selector.options[selector.options.length] = new Option(split_response[i], split_response[i]);
				}
			}
		}
		XMLHttpRequestObject.send(null)
	}

}

function getClients(){
        var table = document.getElementById("table");
	var state = document.getElementById("stateSelector").value; 
        if(XMLHttpRequestObject) {
                XMLHttpRequestObject.open("GET", "getClients.php?state=" + state)
		XMLHttpRequestObject.onreadystatechange = function() {
                        if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) {
                                var response = XMLHttpRequestObject.responseText;
                                table.innerHTML = response;
                        }
                }
                XMLHttpRequestObject.send(null)
        }
}
