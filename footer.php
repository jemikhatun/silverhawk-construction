<?php

include "view_query_footer_section.php";
include "view_query_socket_section.php";
?>
<!--footer section start-->
<section class="footer-section">
    <div class="container">
        <img src="<?php echo  $footer_section_data['logo'];?>" alt="footer logo">
        <div class="social-icon">
            <a href="#"><i class="<?php echo  $footer_section_data['icon1'];?>"></i></a>  
            <a href="#"><i class="<?php echo  $footer_section_data['icon2'];?>"></i></a>              
            <a href="#"><i class="<?php echo  $footer_section_data['icon3'];?>"></i></a>
        </div>
    </div>
</section>
<!--footer section end-->

<!--socket section start-->
<section class="socket-section">
    <div class="container">
        <p>Copyright since <a href="#"><?php echo $socket_data ['link'];?></a><?php echo $socket_data['parragraph']?></p>
    </div>
</section>
<!--socket section end-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="slicknav/jquery.slicknav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(function(){
        $('#menu').slicknav();
    });
</script>
<script>$('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    items:1
})</script>
</body>
</html>