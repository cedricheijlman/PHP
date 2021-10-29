<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .rood {
      border: 5px solid red;
    }

    .groen {
      border: 5px solid green;
    }
  </style>
</head>
<body>
  <?php
  for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
      $class = " class='rood'";
    } else {
      $class = " class='groen'";
    }

    echo "<img".$class." src='apen/aap".$i.".jpg'>";
  }
?>

</body>
</html>