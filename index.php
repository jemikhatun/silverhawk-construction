
  <?php
    require "header.php";
    include "view_query_slider_section.php";
    include "view_query_about_section.php";
    include "view_query_services_page.php";
    include "view_query_contact_section.php";
    include "view_query_gallery_bit.php";
   
  ?>
    <!--slider-section start-->
    <section class="slider-section">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="<?php echo $slider_image_show['slider_image1'];?>" alt="slider1">
        <div class="slider-contant">
            <div class="silder-left-column">

            </div>
            <div class="slider-right-column">
                <div class="contant">
                    <h4><?php echo $caption_show['caption_heading'];?></h4>
                    <h1><?php echo $caption_show['small_heading'];?></h1>
                    <p><?php echo $caption_show['caption_parragraph'];?></p>
                    <a class="contact-us" href="#"><?php echo $caption_show['button1'];?></a>
                    <a href="#"><?php echo $caption_show['button2'];?></a>
                </div>
            </div>
        </div>
            </div>
            <div class="item">
                <img src="<?php echo $slider_image_show['slider_image2'];?>" alt="img" >
        <div class="slider-contant">
            <div class="silder-left-column">

            </div>
            <div class="slider-right-column">
                <div class="contant">
                    <h4><?php echo $caption_show['caption_heading'];?></h4>
                    <h1><?php echo $caption_show['small_heading'];?></h1>
                    <p><?php echo $caption_show['caption_parragraph'];?></p>
                    <a class="contact-us" href="#"><?php echo $caption_show['button1'];?></a>
                    <a href="#"><?php echo $caption_show['button2'];?></a>
                </div>
            </div>
        </div>
            </div>    
        </div>
    </section>
    <!--slider-section end-->

    <!--service-section start-->
    <section class="service-section">
        <div class="container">
            <h2><?php echo $datashow['heading'];?></h2>
            <div class="main-column">
                <div class="flex-column">
                    <img src="<?php echo $datashow['logo1'];?>" alt="logo1">
                    <p><?php echo $datashow['parragraph1'];?></p>
                </div>
                <div class="flex-column">
                    <img src="<?php echo $datashow['logo2'];?>" alt="logo2">
                    <p><?php echo $datashow['parragraph2'];?></p>
                </div>
                <div class="flex-column">
                    <img src="<?php echo $datashow['logo3'];?>" alt="logo3">
                    <p><?php echo $datashow['parragraph3'];?></p>
                </div>
            </div>
        </div>
    </section>
    <!--service-section end-->

    <!--about service start-->
<section class="about-section">
    <div class="container">
        <div class="main-column">
            <div class="left-side-column">
                <img src="<?php echo $about_section_data['image'];?>" alt="image">
            </div>
            <div class="right-side-column">
                <h3><?php echo $about_section_data['heading'];?></h3>
                <p><?php echo $about_section_data['parragraph'];?></p>
    
                <p><?php echo $about_section_data['parragraph'];?></p>
            </div>
        </div>
    </div>
</section>
<!--about service end-->

<!--gallery section start -->
<section class="gallery-section">
    <div class="container">
        <h2><?php echo $gallery_show['gallery_heading'];?></h2>
        <div class="main-column">
            <?php while($show=mysqli_fetch_assoc( $result2)){?>
                
               <div class="flex-column">
                <img src="<?php echo $show['image'];?>" alt="image">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
                </div>

                <?php   }?>
                    
            
        <!--   <div class="flex-column">
                <img src="<?php echo $show['image2'];?>" alt="image2">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
            </div>  
            <div class="flex-column">
                <img src="<?php echo $show['image3'];?>" alt="image3">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
            </div>
            <div class="flex-column">
                <img src="<?php echo $show['image4'];?>" alt="image4">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
            </div>
            <div class="flex-column">
                <img src="<?php echo $show['image5'];?>" alt="image5">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
            </div>
            <div class="flex-column">
                <img src="<?php echo $show['image6'];?>" alt="image6">
                <div class="flex-column-caption">
                    <img src="images/plus-icon.png" alt="plus-icon">
                    <h3><?php echo $show['hover_heading'];?></h3>
                    <p><?php echo $show['hover_parragraph'];?></p>
                </div>
            </div>-->
        </div>
        <div class="button">
            <a href="#"><?php echo $gallery_show['gallery_button'];?></a>
        </div>
    </div>
</section>
<!--gallery section end -->

<!--contant section start -->
<section class="contant-section">
    <div class="container">
        <p><?php echo $alldata['parragraph'];?>: <a href="tel:<?php echo $alldata['number_url'];?>"><?php echo $alldata['number_url'];?></a></p>
    </div>
</section>
<!--contant section end -->
<?php
  require "footer.php";
?>
