<?php
  $server="localhost";
  $uu="root";
  $pp="";
  $db="dairyfarma";

  $con = mysqli_connect($server,$uu,$pp,$db);
  if(mysqli_connect_errno()){
    echo"<script>alert('conncetion to server/databse error');</script>";
    header('Location: index.html');
    exit();
  }
