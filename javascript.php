<?php

/***
  Javascript Functionality

  @project LoL Fantasy LCS
  @author A.Chu
  @date July-2014
**/
include_once('active_get.php');
include_once('db.php');
include_once('constants.php');

$search = (isset($_GET['q'])) ? $_GET['q'] : null;
$results = search_names($search);
?>


function add (type, id) {
  var loading_num = 0;

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById(type + "_" + id).innerHTML = xmlhttp.responseText; 
      if (document.getElementById("active_get").innerHTML != '') {
        document.getElementById("active_get").innerHTML = type + "[]=" + id + "&" + document.getElementById("active_get").innerHTML;
      } else {
        document.getElementById("active_get").innerHTML = type + "[]=" + id;
      }
      document.getElementById("perma_link").href = "?" + document.getElementById("active_get").innerHTML.replace("&amp;", "&");

    }

  }

  document.getElementById("data").innerHTML="<div class=\"row\" id=\"" + type + "_" + id + "\">Loading .. </div>" + document.getElementById("data").innerHTML;
  xmlhttp.open("GET","lookup.php?" + type + "_add=" + id,true);
  xmlhttp.send();
}

function search(str) {
  var results = [];

  <?php

  foreach ($results as $result)
  {
    echo sprintf("results[results.length] = [\"%s\", \"%s\", \"%s\"]; \n", ($result['type'] == 1) ? 'p' : 't', $result['id'], $result['name']);
  }

  ?>

  document.getElementById("search_result_box").innerHTML = "";

  for (i=0; i < results.length; i++)
  {
    if (results[i][2].indexOf(str) > -1) {
     document.getElementById("search_result_box").innerHTML = document.getElementById("search_result_box").innerHTML + "<option class='search_result' onclick='add(\"" + results[i][0] + "\",\"" + results[i][1] + "\");' >" + results[i][2] + "</option>";
    }
  }

}