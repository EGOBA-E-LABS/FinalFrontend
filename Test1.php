<?php

  if (isset($_POST['btn_checkout'])) {
    echo "Menu".$_POST['menu']."<br>";
     echo "price".$_POST['price']."<br>";
      echo "note".$_POST['note']."<br>";
       echo "sub-total".$_POST['sub-total']."<br>";
        echo "delivery".$_POST['delivery']."<br>";
        echo "delivery".$_POST['coupon']."<br>";
  }

?>