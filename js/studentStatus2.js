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
        // var stringData = http_request.responseText;
        // alert('data received: ' + stringData);
        // document.getElementById("students").innerHTML = stringData;

        extractJSONFields(http_request.responseText);
    }
}

//http_request.send();

//var stringData = http_request.responseText;

//document.getElementById("students").innerHTML=stringData;

var data_file = "/../../CVWebsite/data/studentList1.json";
http_request.open("GET", data_file, true);
http_request.send();

function extractJSONFields(stringJSON) {
    var studentList = JSON.parse(stringJSON);
    var studentName = studentList.studentName;
    var studentStatus = studentList.studentStatus;

  //  updateHTMLContents(studentName,studentStatus);
//}

//function updateHTMLContents(studentName, studentStatus) {
    document.getElementById("studentName").innerHTML=studentName;
    document.getElementById("studentStatus").innerHTML=studentStatus;
}

//function processAJAXString(messageString) {
//    var jsonObject=JSON.parse(messageString);
//  var studentName=jsonObject.studentName;
//  var studentStatus=jsonObject.studentStatus;
//  
//  var html = '';
//  html += '<dl>';
//  html += '<dt>Student Name:</dt>';
//  html += '<dd>' + studentName + '</dd>';
//  html += '<dl>';
//  html += '<dt>Student Status:</dt>';
//
//  updateHTMLContents(studentName,studentStatus);
//}

function updateHTMLContents(studentName, studentStatus) {
  document.getElementById("studentName").innerHTML=studentName;
  document.getElementById("studentStatus").innerHTML=studentStatus;
//  document.write(html);
}
