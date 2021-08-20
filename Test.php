<?php
  if (isset($_POST['btn_add_to_cart'])) {
    if(!empty($_POST['menu'])) {
    echo "Chosen Items : <br>"; 
        foreach(($_POST['menu']) as $value){
            echo "".$value.'<br/>';
        }

    }

  }
?>