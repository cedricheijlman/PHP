<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  img {
width: 50px;
height: 50px;
border: 1px solid black;
  }
    
   </style>
</head>
<body>
  <?php
  $zwemclubs['De Spartelkuikens'] = 25;
  $zwemclubs["De waterbuffels"] = 32;
  $zwemclubs['Ponsmderin'] = 11;
  $zwemclubs['Bommetje'] = 23;

   foreach($zwemclubs as $x => $getal) {
     echo $x." ";
     
     for ($i = 1; $i <= $getal; $i++) {

         if ($i % 5 == 0) {
           echo "<img src='zwemmer.png'>";
         }
     }
       echo "<br>";
   };

   
?>
</body>
</html>