// Object XMLHttpRequest 
var xmlHttp = createXmlHttpRequestObject();
// Получаем объект XMLHttpRequest 
function createXmlHttpRequestObject()
{

var xmlHttp;
// if IE
if(window.ActiveXObject)
{
try
{
xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
xmlHttp = false;
}
}
// if google,mozilla
else
{
try
{
xmlHttp = new XMLHttpRequest();
}
catch (e)
{
xmlHttp = false;
}
}
// if not create object XMLHttpRequest
if (!xmlHttp)
alert("Error creating the XMLHttpRequest object.");
else
return xmlHttp;
}
// http=query
function ajax()
{

if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
{
	//get the Username, and than ===
name = encodeURIComponent(document.getElementById("Name").value);
// get to the ajax.php
xmlHttp.open("GET", "ajax.php?name=" + name, true);

xmlHttp.onreadystatechange = processServerResponse;
// call the server
xmlHttp.send(null);
}
else
// timeOut in a sec
setTimeout('ajax()', 10);
}
// check the server////
function processServerResponse()
{
if (xmlHttp.readyState == 4)
{
// статус 200 :) connection sucssesful;
if (xmlHttp.status == 200)
{

xmlResponse = xmlHttp.responseXML;
xmlDocumentElement = xmlResponse.documentElement;
helloMessage = xmlDocumentElement.firstChild.data;

document.getElementById("OurMessage").innerHTML =
'<i>' + helloMessage + '</i>';

setTimeout('ajax()', 1000);
}
// if not 200 - mistake!
else
{
alert("Error accessing the server: " +
xmlHttp.statusText);
}
}
}