
<?php
include 'connect.php';

$id = $_GET['updateid'];
$sql="SELECT * FROM broodjes WHERE broodnr=$id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch();
$naam = $row['naam'];
$soort = $row['soort'];
$vorm = $row['vorm'];
$gewicht = $row['gewicht'];



if (isset($_POST['submit']) && !empty($_POST['naam']) ) {
  $naam = $_POST['naam'];
  $soort = $_POST['soort'];
  $vorm = $_POST['vorm'];
  $gewicht = $_POST['gewicht'];

   
  $sql = "update broodjes set naam='$naam',soort='$soort',vorm='$vorm',gewicht='$gewicht' where broodnr='$id'";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
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
    <h2>Update broodje:</h2>
    <label for="naam">Naam broodje:</label>
    <input value=<?php echo $naam; ?> type="text" id="naam" name="naam">
    <label for="soort">Soort Meel:</label>
    <select name="soort" id="soort">
    <option <?php if ($soort == 'Tarwe') echo 'selected="selected"'; ?> value="Tarwe">Tarwe</option>
      <option <?php if ($soort == 'Volkoren') echo 'selected="selected"'; ?> value="Volkoren">Volkoren</option>
      <option <?php if ($soort == 'Spelt') echo 'selected="selected"'; ?> value="Spelt">Spelt</option>
      <option <?php if ($soort == 'Rogge') echo 'selected="selected"'; ?> value="Rogge">Rogge</option>
    </select>
    <label for="vorm">Vorm:</label>
    <select name="vorm" id="vorm">
      <option <?php if ($vorm == 'Rond') echo 'selected="selected"'; ?> value="Rond">Rond</option>
      <option <?php if ($vorm == 'Vierkant') echo 'selected="selected"'; ?> value="Vierkant">Vierkant</option>
      <option <?php if ($vorm == 'Bolvorm') echo 'selected="selected"'; ?> value="Bolvorm">Bolvorm</option>
      <option <?php if ($vorm == 'Rechthoekig') echo 'selected="selected"'; ?> value="Rechthoekig">Rechthoekig</option>
    </select>
    <label for="gewicht">Gewicht:</label>
    <select name="gewicht" id="gewicht">
      <option <?php if ($gewicht == '10 Gram') echo 'selected="selected"'; ?> value="10 Gram">10g</option>
      <option <?php if ($gewicht == '20 Gram') echo 'selected="selected"'; ?> value="20 Gram">20g</option>
      <option <?php if ($gewicht == '30 Gram') echo 'selected="selected"'; ?> value="30 Gram">30g</option>
      <option <?php if ($gewicht == '40 Gram') echo 'selected="selected"'; ?> value="40 Gram">40g</option>
      <option <?php if ($gewicht == '50 Gram') echo 'selected="selected"'; ?> value="50 Gram">50g</option>
      <option <?php if ($gewicht == '60 Gram') echo 'selected="selected"'; ?> value="60 Gram">60g</option>
    </select>
    
    <input type="submit" name="submit">
  </form>
  </div>
</body>
</html>


