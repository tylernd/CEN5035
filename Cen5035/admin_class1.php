<?php
  include('session.php');

  ?>

<!DOCTYPE html>
<html>
<head>
  <style>
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover {
    background-color: #111;
  }

  li {
    border-right: 1px solid #bbb;
  }

  li:last-child {
    border-right: none;
  }

  div{

  }

  .container{
    margin: 20px auto;
    width:400px;
    height:400px;
    background-color:white;
    display:grid;
    grid-template-columns: 200px 200px;
    grid-row: auto auto;
    grid-column-gap: 50px;
    grid-row-gap: 20px;
  }
    .box{
      background-color:white;
      padding:20px;
      border-radius:10px;
      color:#fff;
      display:flex;
      align-items:center;
      justify-content:center;

      font-family:sans-serif;
    }

  #btn1 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      background: white;
  }

  #active1 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s;
      animation-iteration-count: 0;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #btn2 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      background: white;
  }

  #active2 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 0;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #btn3 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      background: white;
  }

  #active3 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 0;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #btn4 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      background: white;
  }

  #active4 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 0;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #toggle1 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 3;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #toggle2 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 3;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #toggle3 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 3;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }

  #toggle4 {
      text-align: center;
      height: 60px;
      width: 200px;
      display: block;
      font-size: 1.5em;
      animation: effect 0.4s infinite;
      animation-iteration-count: 3;
      border-color: green;
      background-color: lightgreen;
      cursor: not-allowed;
  }



  @keyframes effect {
      0% {
          transform: translateX(0px) rotate(0deg);
      }
      20% {
          transform: translateX(-4px) rotate(-4deg);
      }
      40% {
          transform: translateX(-2px) rotate(-2deg);
      }
      60% {
          transform: translateX(4px) rotate(4deg);
      }
      80% {
          transform: translateX(2px) rotate(2deg);
      }
      100% {
          transform: translateX(0px) rotate(0deg);
      }
  }

  </style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script>
        function inactive1() {
            document.getElementById('btn1').id = 'active1';
        }
        function active1() {
            document.getElementById('active1').id = 'btn1';
        }
        function inactive2() {
            document.getElementById('btn2').id = 'active2';
        }
        function active2() {
            document.getElementById('active2').id = 'btn2';
        }
        function inactive3() {
            document.getElementById('btn3').id = 'active3';
        }
        function active3() {
            document.getElementById('active3').id = 'btn3';
        }
        function inactive4() {
            document.getElementById('btn4').id = 'active4';
        }
        function active4() {
            document.getElementById('active4').id = 'btn4';
        }
</script>
</head>
<body>

<ul>
  <li><a href="admin_index.php">Home</a></li>
  <li><a href="admin_info.php">View Admin Information</a></li>
  <li><a href="admin_lookup.php">Lookup Student Info</a></li>
  <li><a href="admin_attendance.php">Lookup Student Attendance</a></li>
  <li><a href="admin_addbal.php">Add Student Balance</a></li>
  <li><a href="admin_class1.php">Class 1</a></li>
  <li><a href="admin_logout.php">Log out</a></li>
</ul>



<table>

  <tbody id="data">
  </tbody>
</table>

</body>
<script>
var laststate1 = 0;
var laststate2 = 0;
var laststate3 = 0;
var laststate4 = 0;
$(document).ready(function(){
  setInterval(function() {
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "toggle.php";
    var asynchronous = true;
    var toggle1 = false;
    var toggle2 = false;
    var toggle3 = false;
    var toggle4 = false;


    ajax.open(method, url, asynchronous);
    ajax.send();

    ajax.onreadystatechange = function()
    {
      if (this.readyState == 4 && this.status == 200)
      {
        var data = JSON.parse(this.responseText);

        if (laststate1 == 0 && data[0].in_class == 1)
         toggle1 = true;
        if (laststate2 == 0 && data[1].in_class == 1)
          toggle2 = true;
        if (laststate3 == 0 && data[2].in_class == 1)
           toggle3 = true;
        if (laststate4 == 0 && data[3].in_class == 1)
           toggle4 = true;


        var html = "";

        html += "<div class=\"container\">";
        html += "<div class = \"box\">";
        if (data[0].in_class == 1 && toggle1 == true)
            html += "<button id=\"toggle1\">John Doe</button>"
        if (data[0].in_class == 1 && toggle1 == false)
          html += "<button id=\"active1\">John Doe</button>"
        if (data[0].in_class == 0 && toggle1 == false)
          html += "<button id=\"btn1\">John Doe</button>"
        html += "</div>";
        html += "<div class = \"box\">";
        if (data[1].in_class == 1 && toggle2 == false)
          html += "<button id=\"active2\">Vin Diesel</button>"
        if (data[1].in_class == 1 && toggle2 == true)
          html += "<button id=\"toggle2\">Vin Diesel</button>"
        if (data[1].in_class == 0 && toggle2 == false)
          html += "<button id=\"btn2\">Vin Diesel</button>"
        html += "</div>";
        html += "<div class = \"box\">";
        if (data[2].in_class == 1 && toggle3 == false)
          html += "<button id=\"active3\">James Smith</button>"
        if (data[2].in_class == 1 && toggle3 == true)
          html += "<button id=\"toggle3\">James Smith</button>"
        if (data[2].in_class == 0 && toggle3 == false)
          html += "<button id=\"btn3\">James Smith</button>"
        html += "</div>";
        html += "<div class = \"box\">";
        if (data[3].in_class == 1 && toggle4 == false)
          html += "<button id=\"active4\">George Washington</button>"
        if (data[3].in_class == 1 && toggle4 == true)
          html += "<button id=\"toggle4\">George Washington</button>"
        if (data[3].in_class == 0 && toggle4 == false)
          html += "<button id=\"btn4\">George Washington</button>"
        html += "</div>";
        html += "</div>";


        laststate1 = data[0].in_class;
        laststate2 = data[1].in_class;
        laststate3 = data[2].in_class;
        laststate4 = data[3].in_class;
        toggle1 = false;
        toggle2 = false;
        toggle3 = false;
        toggle4 = false;
        console.log(html);
        document.getElementById("data").innerHTML = html;
      }
    }

  }, 1000);
});

</script>

</html>
