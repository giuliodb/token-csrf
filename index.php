<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang='it'> 
<head>
<meta charset='utf-8' />
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
<meta name="_csrf" content="<?=$token?>"/>
</head>
<body>

<h2 style='text-align:center'>PRIMA PAGINA (token <?=$token?>)</p>
<br>

 <form action="action1.php" >
  <input type="hidden" id="param1" name="param1" value="pippo">
  <input type="hidden" id="param2" name="param2" value="pluto">
  <input type="submit" value="invia primo form">
</form> 
<br><br>
<form action="action2.php" >
  <input type="hidden" id="param1" name="param1" value="goldrake">
  <input type="hidden" id="param2" name="param2" value="mazinga">
  <input type="submit" value="invia secondo form">
</form> 

<script src="https://code.jquery.com/jquery-3.7.1.min.js"  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type='text/javascript' src='global.js'></script>
</body>

</html>