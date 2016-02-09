<?php
  session_start();
  $_SESSION["username"]="";
  $_SESSION["login_ornot"]="no";
  header("Location: http://www.discoverloans.com.au/Backend/sign-in.html");



?>