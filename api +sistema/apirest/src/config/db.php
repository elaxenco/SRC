<?php
  class db  
  {
      public static function  con(){
      $mysqli = new mysqli('localhost', 'root', '', 'src'); 

      /* cambiar el conjunto de caracteres a utf8 */
      if (!$mysqli->set_charset("utf8")) {
          $mysqli->error;
          exit();
      } else {
            $mysqli->character_set_name();
      }


          return $mysqli;
      }


  }
