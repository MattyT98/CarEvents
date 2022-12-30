<?php
    //$Path = "http://localhost/test/CarEvents/";
    $Path ="";

    switch($_SERVER['SERVER_NAME']){
        case '192.168.0.137' : //development view from other device
            $Path ="http://192.168.0.137/test/CarEvents";
          break;
        case 'localhost': //development
            $Path ="http://localhost/test/CarEvents";
          break;
        case 'https://www.CarEvents.com': //production
            $Path = "https://www.CarEvents.com/";
          break;
      }
?>
