<?php

// echo "<img src='apen/".$_POST["apen"].".jpg'>"
foreach($_POST['apen'] as $aap) {
  echo "<img src='apen/".$aap.".jpg'>";
}
?>