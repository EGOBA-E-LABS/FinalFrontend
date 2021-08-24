<?php
include('header.php')
?>

     <i class=" fas fa-heart text-colored" id="nopwal"></i>
     <i class="far fa-heart" id="pwal"></i>






    <script>
    $("#likebutton").click(function() {
   
        //
        // if you want to toogle the icon right in time
        //
        $(this).find("i").toggleClass("fas far");
        // $(this).find("i").toggleClass("text-colored far");
    });
    </script>


    <?php
include("footer.php")
?>