<?php
  if(isset($_POST['name'])){
      //I think we have received Ajax request
      if($_POST['value'] == "false") //Just to ensure the value to be changed should be false
      //Now let us change session variable
      $_SESSION['variable'] = "false";
      echo $_SESSION['variable']; 
}
?>
