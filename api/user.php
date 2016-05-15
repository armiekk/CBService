<?php

  require 'database.php';

  if (isset($_GET['function'])) {
    $func = $_GET['function'];
    switch ($func) {
      case 'register':
          $credentials = (object) array('username' => $_GET['username'], 'password' => $_GET['password'],
                                        'fullname' => $_GET['fullname'],'email' => $_GET['email'],
                                        'tel' => $_GET['tel']);
          echo register($credentials);
        break;
      case 'isLogin':
        # code...
        break;
    }
  }

  function register($credentials){
    $queryResult = mysql_query('SELECT username FROM customer WHERE username = "'.$credentials->username.'"');
    $record = mysql_fetch_object($queryResult);
    if ($record->username != null) {
      return "มีชื่อผู้ใช้งานอยู่ในระบบแล้ว ";
    }else {
      $query = 'INSERT INTO customer'.
                '(username, password, fullname, email, tel)'.
                'VALUES("'.$credentials->username.'","'.$credentials->password.'","'.
                $credentials->fullname.'","'.$credentials->email.'","'.$credentials->tel.'")';
      $insertResult = mysql_query($query);
      if (!$insertResult) {
        die("Could not enter data: "+mysql_error());
      }
      return "ลงทะเบียนเสร็จสิ้น";
    }
  }

  function login(){

  }

  function logout(){

  }

  function checkLogin(){

  }
?>
