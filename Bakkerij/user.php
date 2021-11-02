<?php
include 'connect.php';



if (isset($_POST['submit']) && !empty($_POST['naam']) ) {
  $naam = $_POST['naam'];
  $soort = $_POST['soort'];
  $vorm = $_POST['vorm'];
  $gewicht = $_POST['gewicht'];


  $sql = "INSERT INTO broodjes (naam,soort,vorm,gewicht) VALUES (:naam,:soort,:vorm,:gewicht)";

  $stmt = $conn->prepare($sql);
  $stmt->execute(['naam' => $naam,'soort' => $soort,'vorm' => $vorm,'gewicht' => $gewicht]);
  header("Location: display.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <form method="post">
    <h2>Voeg nieuw broodje toe:</h2>
    <label for="naam">Naam broodje:</label>
    <input type="text" id="naam" name="naam">
    <label for="soort">Soort Meel:</label>
    <select name="soort" id="soort">
    <option value="Tarwe">Tarwe</option>
      <option value="Volkoren">Volkoren</option>
      <option value="Spelt">Spelt</option>
      <option value="Rogge">Rogge</option>
    </select>
    <label for="vorm">Vorm:</label>
    <select name="vorm" id="vorm">
      <option value="Rond">Rond</option>
      <option value="Vierkant">Vierkant</option>
      <option value="Bolvorm">Bolvorm</option>
      <option value="Rechthoekig">Rechthoekig</option>
    </select>
    <label for="gewicht">Gewicht:</label>
    <select name="gewicht" id="gewicht">
      <option value="10 Gram">10g</option>
      <option value="20 Gram">20g</option>
      <option value="30 Gram">30g</option>
      <option value="40 Gram">40g</option>
      <option value="50 Gram">50g</option>
      <option value="60 Gram">60g</option>
    </select>
    
    <input type="submit" name="submit">
  </form>
  </div>
</body>
</html>