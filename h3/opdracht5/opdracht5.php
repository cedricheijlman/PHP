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
$leeftijd = 12;
$bedrag = 10;

if ($leeftijd > 65) {
  $bedrag = $bedrag * 0.5;
} else if ($leeftijd < 3) {
  $bedrag = 0;
} else if ($leeftijd <= 12) {
  $bedrag = $bedrag * 0.5;
} else {
  $bedrag = 10;
}

echo $bedrag;
?>
</body>
</html>