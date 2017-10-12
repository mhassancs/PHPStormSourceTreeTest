<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
	<form method="post" action="">
    <input type="text" name="something" value="" />
    <input type="submit" name="submit" />
  </form>

<?php
if(isset($_POST['submit'])) {
  echo 'You entered: ', htmlspecialchars($_POST['something']);
}
?>
 <?php 
 $name = 'Mohammed peiyu drew
 ';
 echo '<p>Hello, ', $name, '</p>'; 
 ?> 
 </body>
</html>
