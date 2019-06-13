<?php
  // This one is working 
  // The client is Phonegap app:  PHP API Client
  header('Access-Control-Allow-Origin: *');
        //mysqli_connect(host,username,password,dbname,port,socket);
  $link = mysqli_connect("localhost","10485","freeweb223", "10485");

  if(mysqli_connect_error()) {
    die("There was an error");
  }

  //$query = "SELECT * FROM users";
  $query = "SELECT * FROM mytable WHERE name = '".$_GET['name']."'";

  $rows = array();

  if($result = mysqli_query($link, $query)) {
      while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
      }
      print json_encode($rows);
  }

?>