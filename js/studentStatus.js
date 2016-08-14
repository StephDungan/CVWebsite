/**
 * Created by Steph on 13/08/2016.
 */

//var data_file = "/../../CVWebsite/data/students.txt";
var HTTP_REQUEST_COMPLETED = 4;
var http_request = new XMLHttpRequest();
//var asychronous = false;

//http_request.open("GET", data_file, asychronous);
http_request.onreadystatechange = function () {
    if (HTTP_REQUEST_COMPLETED == http_request.readyState){
        var stringData = http_request.responseText;
        alert('data received: ' + stringData);
        document.getElementById("students").innerHTML = stringData;
    }
}

//http_request.send();

//var stringData = http_request.responseText;

//document.getElementById("students").innerHTML=stringData;

var data_file = "/../../CVWebsite/data/students.txt";
http_request.open("GET", data_file, true);
http_request.send();