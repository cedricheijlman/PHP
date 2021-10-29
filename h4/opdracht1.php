<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
     function fahrenheitBerekenen($celcius) {
        return ($celcius * 1.8) + 32;
     }

     function isDeelbaarDoorDrie($cijfer) {
         if ($cijfer % 3 == 0 ) {
           echo " true";
           return true;
         } else {
           echo " false";
           return false;
         }
     }

     function stringOmgekeerd($string) {
      return strrev($string);
     }

     echo fahrenheitBerekenen(100); 
     isDeelbaarDoorDrie(15);
     echo stringOmgekeerd("Hallo ");
  ?>
</body>
</html>