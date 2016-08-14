/**
 * Created by Steph on 13/08/2016.
 */

var data_file = "/../../CVWebsite/data/students.txt";
var http_request = new XMLHttpRequest();
var asychronous = false;

http_request.open("GET", data_file, asychronous);

http_request.send();

var stringData = http_request.responseText;

document.getElementById("students").innerHTML=stringData;
