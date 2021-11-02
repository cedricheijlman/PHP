<?php
include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="display.css">
  
  <title>Display</title>
</head>
<body>
  <div class="container">
    <h1>Bakkerij Paneel</h1>
    <button><a href="user.php"> Voeg broodje toe</a></button>
    
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Brood Naam</th>
      <th scope="col">Meel</th>
      <th scope="col">Vorm</th>
      <th scope="col">Gewicht</th>
      <th scope="col">Meer</th>
    </tr>
  </thead>
  <tbody>

  <?php
   $query = "SELECT * FROM broodjes";
   $stmt = $conn->prepare($query) or die ("Error1");
   $stmt->execute() or die("Error2");
   
   
   while ($row = $stmt->fetch()) {
    $broodnr = $row['broodnr'];
    echo '<tr>';
    echo "<td>".$row['naam']."</td>";
    echo "<td>".$row['soort']."</td>";
    echo "<td>".$row['vorm']."</td>";
    echo "<td>".$row['gewicht']."</td>";
    echo "<td><button><a href='update.php?updateid=".$broodnr."'>Bewerk</a></button>";
    echo "<button><a href='delete.php?deleteid=".$broodnr."'>Verwijder</a></button>";
    echo '</tr>';
   }


  ?>
   
  </tbody>
</table>


  </div>
</body>
</html>