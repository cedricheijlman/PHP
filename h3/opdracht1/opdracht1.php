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
  // for ($i = 1; $i < 10; $i++) {
  //   echo "<img src='apen/aap".$i.".jpg'>";
  // }

  $bomen = array("img_0050.jpg", "lillypilly1.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");
   foreach($bomen as $boom) {
     echo "<img src='bomen/".$boom."'>";
   }

  ?>
  
</body>
</html>