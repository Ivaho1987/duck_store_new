<?php
if(isset($_POST['selected']) )
{
  $selected = $_POST['selected'];
var_dump($selected);
}

switch ($selected) { 		
    case 'Add':
   		include_once '_add.php';
        break;
    case 'Delete':
   		include_once '_delete.php';
        break;
    case 'Edit':
   		include_once '_edit.php';
        break;
    default:
        echo "<h1>Oooops. 404</h1>";
        break;
}


?>