<?php
 include 'view_query_top_header.php';
 include 'view_query_fontawesome.php';
 include 'view_query_main_menu.php';
 include 'view_query_main_logo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SilverHawk</title>
    <link rel="stylesheet" href="slicknav/slicknav.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <!--top bar start-->
    <section class="top-bar">
        <div class="container">
            <div class="main-top-bar">
                <div class="left-side">
                    <a class="phone" href="tel:<?php echo $data['phone'];?>"><?php echo $data['phone'];?></a>
                    <a class="mail" href="mailto:<?php echo $data['email'];?>"><?php echo $data['email'];?></a>
                </div>
                <div class="right-side">
                    <ul>
                        <a href="#"><i class="<?php echo $showicon['icon1'];?>"></i></a>  
                        <a href="#"><i class="<?php echo $showicon['icon2'];?>"></i></a>              
                        <a href="#"><i class="<?php echo $showicon['icon3'];?>"></i></a>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="dashboard-icon">
        <a href="home_page.php"><i class="fa-solid fa-gauge"></i>dashboard</a>
        </div>
        
    </section>
    <!--top bar end-->

    <!-- main-menu-section start-->
    <section>
        <div class="main-menu-section">
            <div class="container">
                <div class="main-column">
                    <div class="left-side-column">
                        <a href="#"><img src="<?php echo $menulogo['logo'];?>" alt="logo"></a>
                    </div>
                    <div class="right-side-column">
                        <ul id="menu">

                           <?php while($menu_item = mysqli_fetch_assoc( $menu_result)){?>
                            <li><a  href="<?php echo $menu_item ['menu_url']; ?>"><?php
                                 echo $menu_item ['menu_name'];?></a></li>
                           
                             <?php   }?>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main-menu-section end-->
    