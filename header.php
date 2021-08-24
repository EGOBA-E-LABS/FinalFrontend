<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="assets/img/logo-icon.png" rel="icon">

    <!-- Offline Bootstrap CSS from cs folder -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Custom CSS file-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script>
      $(window).scroll(function() {
        if ($(this).scrollTop()>80){
            $('#fixedtitle').show();
            $('.fixed-checkout').show();
      }
      else{
          $('#fixedtitle').hide();
          $('.fixed-checkout').hide();
      }

      });

      $(document).ready(function(){
        $("form").submit(function(){
          $(".oconfirm").show();
          $("body").scrollTop(0);
          $("body").css("overflow","hidden");
        });
      });

      $(document).ready(function(){
        $("#search-click").click(function(){
          $(".welcomepage").hide();
          $(".search-box").show();
        });
      });

      $(document).ready(function(){
        $("#searchbar-click").focus(function(){
          $(".welcomepage").hide();
          $(".search-box").show();
        });
      });

      $(document).ready(function(){
        $("#backtowelcome").focus(function(){
          $(".welcomepage").show();
          $(".search-box").hide();
        });
      });

    </script>

    <title>Happy Meals</title>

  </head>
  <body>



