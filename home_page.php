<?php
include 'admin_sidebar.php';
include 'view_query_top_header.php';
include 'view_query_fontawesome.php';
include 'view_query_main_menu.php';
include 'view_query_main_logo.php';
include 'view_query_slider_section.php';
include 'view_query_services_page.php';
include 'view_query_about_section.php';
include 'view_query_gallery_bit.php';
include "view_query_contact_section.php";
include 'view_query_footer_section.php';
include "view_query_socket_section.php";
?>
    <div class="right-column col-md-10 bg-white">
    <div class="row">
<div class="top_header">
    <div class="row">
<div class="form-group  col-md-6">
    <form action="insert_query_top_header.php" method="POST">
    <H1>Top Header Information Insert</H1>   
    <label>Phone</label>
    <input  type="tel" class="form-control" placeholder="Enter number" name="phone">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter email " name="email">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
</div>
<div class=" space form-group col-md-6">
    <form action="update_query_top_header.php?id=<?php echo $data['id'];?>" method="POST">
    <H1>Top Header Information Update</H1>   
    <label>Phone</label>
    <input  type="tel" class="form-control" value="<?php echo $data['phone'];?>" name="phone">
    <label >Email</label>
    <input type="email" class="form-control"  value="<?php echo $data['email'];?>"  name="email">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="delete_query_top_header.php?id=<?php echo $data['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    </form>   
</div> 
</div>
<div class="row">
<div class=" form-group  col-md-6">
    <form action="insert_query_fontawesome.php" method="POST">
    <H1>Top Header Icon Insert</H1>   
    <label>icon1</label>
    <input  type="text" class="form-control"  name="icon1">
    <label >icon2</label>
    <input type="text" class="form-control"    name="icon2">
    <label >icon3</label>
    <input type="text" class="form-control"    name="icon3">
    
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>   
</div>
<div class=" space form-group col-md-6">
    <form action="update_query_fontawesome.php?id=<?php echo $showicon['id'];?>" method="POST">
    <H1>Top Header Icon Update</H1>   
    <label>icon1</label>
    <input  type="text" class="form-control" value="<?php echo $showicon['icon1'];?>" name="icon1">
    <label >icon2</label>
    <input type="text" class="form-control"  value="<?php echo $showicon['icon2'];?>"  name="icon2">
    <label >icon3</label>
    <input type="text" class="form-control"  value="<?php echo $showicon['icon3'];?>"  name="icon3">
    
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="delete_query_fontawesome.php?id=<?php echo $showicon['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    </form>   
</div>  
</div> 
</div>





<div class="form-group col-md-6">
    <form action="insert_query_main_menu.php" method="POST">
    <H1>Main Menu Information Add</H1>   
    <label>Menu Name</label>
    <input  type="text" class="form-control" placeholder="Enter Menu Name" name="menu_name">
    <label >Menu Url</label>
    <input type="text" class="form-control" placeholder="Enter Menu Url" name="menu_url">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
    <div class=" space form-group col-md-6">
    <form action="update_query_main_menu.php?id=<?php echo $menu_item ['id'];?>" method="POST">
    <H1>Main Menu Information Update</H1>   
    <label>Menu Name</label>
    <input type="text" class="form-control" value="<?php echo $menu_item['menu_name'];?>" name="menu_name">
    <label >Menu Url</label>
    <input type="text" class="form-control" value="<?php echo $menu_item['menu_url'];?>" name="menu_url">
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="delete_query_main_menu.php?id=<?php echo $menu_item ['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
    </form>   
    </div>
    <div class=" form-group col-md-6">
    <form action="insert_query_main_logo.php" method="POST" enctype="multipart/form-data">
    <H1>Main Menu logo</H1>   
    <label>logo</label>
    <input  type="file" class="form-control" placeholder="upload logo" name="logo">
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class=" space form-group col-md-6">
    <form action="update_query_main_logo.php?id=<?php echo $menulogo['id'];?>" method="POST" enctype="multipart/form-data">
    <H1>Main Menu logo</H1>   
    <label>logo</label>
    <input  type="file" class="form-control" value="<?php echo $menulogo['logo'];?>" name="logo">
    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_main_logo.php?id=<?php echo $menu_item ['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
</form>
</div>





<div class="form-group col-md-12">
    <form action="insert_query_slider_section.php" method="POST" enctype="multipart/form-data">
    <H1>slider section image</H1>   
    <label>slider image 1</label>
    <input  type="file" class="form-control" placeholder="upload image" name="slider_image1">
    <label>slider image 2</label>
    <input  type="file" class="form-control" placeholder="upload image" name="slider_image2">
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
   <div class="  form-group col-md-6">
    <form action="insert_query_slider_caption.php" method="POST">
    <H1>slider section caption insert</H1>   
    <label>caption heading</label>
    <input  type="text" class="form-control" placeholder="Enter caption heading" name="caption_heading">
    <label> caption small heading</label>
    <input  type="text" class="form-control" placeholder="Enter small heading" name="small_heading">
    
    <label>caption parragraph</label>
    <input type="text" class="form-control" placeholder="please text here" name="caption_parragraph">
  
    <label>button1</label>
    <input  type="text" class="form-control" placeholder="Enter text" name="button1">
  
    <label>button2</label>
    <input  type="text" class="form-control" placeholder="Enter text" name="button2">
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
    <div class=" space form-group col-md-6">
    <form action="update_query_slider_caption.php?id=<?php echo $caption_show['id'];?>" method="POST">
    <H1>slider section caption update</H1>   
    <label> caption heading</label>
    <input  type="text" class="form-control" value="<?php echo $caption_show['caption_heading'];?>" name="caption_heading">
    <label> caption small heading</label>
    <input  type="text" class="form-control" value="<?php echo $caption_show['small_heading'];?>" name="small_heading">
    
    <label>caption parragraph</label>
    <input type="text" class="form-control" value="<?php echo $caption_show['caption_parragraph'];?>" name="caption_parragraph">
  
    <label>button1</label>
    <input  type="text" class="form-control" value="<?php echo $caption_show['button1'];?>" name="button1">
  
    <label>button2</label>
    <input  type="text" class="form-control" value="<?php echo $caption_show['button2'];?>" name="button2">
  
    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_slider_caption.php?id=<?php echo $caption_show ['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    </form>   
    </div>




    <div class="form-group col-md-6">
    <form action="insert_query_services_page.php" method="POST" enctype="multipart/form-data">
    <H1>Services Page Information Add</H1>   
     <label >heading</label>
    <input type="text" class="form-control" placeholder="Enter heading " name="heading">
    
    <label>logo1</label>
    <input  type="file" class="form-control" placeholder="upload image" name="logo1">
    <label >parragraph1</label>
    <input type="text" class="form-control" placeholder="Enter parragraph" name="parragraph1">

    <label>logo2</label>
    <input  type="file" class="form-control" placeholder="upload image" name="logo2">
    <label >parragraph2</label>
    <input type="text" class="form-control" placeholder="Enter parragraph" name="parragraph2">

    <label>logo3</label>
    <input  type="file" class="form-control" placeholder="upload image" name="logo3">
    <label >parragraph3</label>
    <input type="text" class="form-control" placeholder="Enter parragraph" name="parragraph3">

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
</div>
<div class="space form-group col-md-6">
    <form action="update_query_services_page.php?id=<?php echo $datashow['id'];?>" method="POST" enctype="multipart/form-data">
    <H1>Services Page Information update and delete</H1>   
     <label >heading</label>
    <input type="text" class="form-control" value="<?php echo $datashow['heading'];?>" name="heading">
    
    <label>logo1</label>
    <input  type="file" class="form-control" value="<?php echo $datashow['logo1'];?>" name="logo1">
    <label >parragraph1</label>
    <input type="text" class="form-control" value="<?php echo $datashow['parragraph1'];?>" name="parragraph1">

    <label>logo2</label>
    <input  type="file" class="form-control" value="<?php echo $datashow['logo2'];?>" name="logo2">
    <label >parragraph2</label>
    <input type="text" class="form-control" value="<?php echo $datashow['parragraph2'];?>" name="parragraph2">

    <label>logo3</label>
    <input  type="file" class="form-control" value="<?php echo $datashow['logo3'];?>" name="logo3">
    <label >parragraph3</label>
    <input type="text" class="form-control" value="<?php echo $datashow['parragraph3'];?>" name="parragraph3">

    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_services_page.php?id=<?php echo $show['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
   
    </form>   
</div>





<div class="form-group col-md-6">
    <form action="insert_query_about_section.php" method="POST" enctype="multipart/form-data">
    <H1>About Section Information Add</H1>   
    <label>image</label>
    <input  type="file" class="form-control" placeholder="upload image" name="image">
    <label >heading</label>
    <input type="text" class="form-control" placeholder="Enter heading " name="heading">
    <label >parragraph</label>
    <input type="text" class="form-control" placeholder="Enter parragraph" name="parragraph">

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
</div>
<div class=" space form-group col-md-6">
    <form action="update_query_about_section.php?id=<?php echo $about_section_data['id'];?>" method="POST" enctype="multipart/form-data">
    <H1>About Section Information update and delete</H1>   
    <label>image</label>
    <input  type="file" class="form-control" value="<?php echo $about_section_data['image'];?>" name="image">
    <label >heading</label>
    <input type="text" class="form-control" value="<?php echo $about_section_data['heading'];?>" name="heading">
    <label >parragraph</label>
    <input type="text" class="form-control" value="<?php echo $about_section_data['parragraph'];?>" name="parragraph">

    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_about_section.php?id=<?php echo $about_section_data['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
   
    </form>   
</div>




<div class="form-group col-md-6">
    <form action="insert_query_gallery_bit.php" method="POST" enctype="multipart/form-data">
    <H1>Gallery Information Add</H1>   
    <label >image</label>
    <input type="file" class="form-control" placeholder="upload image" name="image">
    <label >hover heading</label>
    <input type="text" class="form-control" placeholder="Enter hover heading" name="hover_heading">
    <label>hover parragraph</label>
    <input  type="text" class="form-control" placeholder="Enter hover parragraph" name="hover_parragraph">
  <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
    <div class=" space form-group col-md-6">
    <form action="update_query_gallery_bit.php?id=<?php echo $show['id'];?>" method="POST" enctype="multipart/form-data">
    <H1>Gallery Information Add</H1>   
    <label >image</label>
    <input type="file" class="form-control" value="<?php echo $show['image'];?>" name="image">
    <label >hover heading</label>
    <input type="text" class="form-control" value="<?php echo $show['hover_heading'];?>" name="hover_heading">
    <label>hover parragraph</label>
    <input  type="text" class="form-control" value="<?php echo $show['hover_parragraph'];?>" name="hover_parragraph">
  <button type="submit" class="btn btn-primary">update</button>
  <a href="delete_query_gallery_bit.php?id=<?php echo $show['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
    </form>   
    </div>

   <div class=" form-group col-md-6">
    <form action="insert_query_gallery_section_some.php" method="POST">
    <label> gallery heading</label>
    <input  type="text" class="form-control" placeholder="Enter heading" name="gallery_heading">
    <label > gallery button</label>
    <input type="text" class="form-control" placeholder="Enter button name" name="gallery_button">
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>
<div class="space form-group col-md-6">
    <form action="update_query_gallery_section_some.php?id=<?php echo $gallery_show['id'];?>" method="POST">
    <label> gallery heading</label>
    <input  type="text" class="form-control" placeholder="<?php echo $gallery_show['gallery_heading'];?>" name="gallery_heading">
    <label > gallery button</label>
    <input type="text" class="form-control" placeholder="<?php echo $gallery_show['gallery_button'];?>" name="gallery_button">
    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_gallery_section_some.php?id=<?php echo $show['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
   
</form> 
</div>



<div class="form-group col-md-6">
    <form action="insert_query_contact_section.php" method="POST">
    <H1>Contact Section Information Add</H1>   
    <label>parragraph</label>
    <input  type="text" class="form-control" placeholder="Enter parragraph" name="parragraph">
    <label >Number Url</label>
    <input type="tel" class="form-control" placeholder="Enter number Url" name="number_url">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
    <div class="space form-group col-md-6">
    <form action="update_query_contact_section.php?id=<?php echo $alldata['id'];?>" method="POST">
    <H1>Contact Section Information update and delete</H1>   
    <label>parragraph</label>
    <input  type="text" class="form-control" value="<?php echo $alldata['parragraph'];?>" name="parragraph">
    <label >Number Url</label>
    <input type="tel" class="form-control" value="<?php echo $alldata['number_url'];?>" name="number_url">
    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_contact_section.php?id=<?php echo $alldata['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    
    </form>   
    </div>



    <div class="form-group col-md-6">
    <form action="insert_query_footer_section.php" method="POST" enctype="multipart/form-data">
    <H1>Footer Section Information Add</H1>   
    <label>logo</label>
    <input  type="file" class="form-control" placeholder="upload logo" name="logo">
    <label >Icon1</label>
    <input type="text" class="form-control"  name="icon1">
    <label >Icon2</label>
    <input type="text" class="form-control"  name="icon2">
    <label >Icon3</label>
    <input type="text" class="form-control"  name="icon3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>   
    </div>
    <div class=" space form-group col-md-6">
    <form action="update_query_footer_section.php?id=<?php echo  $footer_section_data['id'];?>" method="POST" enctype="multipart/form-data">
    <H1>footer section information update and delete</H1>   
    <label>logo</label>
    <input  type="file" class="form-control" value="<?php echo $footer_section_data['logo'];?>" name="logo">
    <label >Icon1</label>
    <input type="text" class="form-control" value="<?php echo $footer_section_data['icon1'];?>" name="icon1">
    <label >Icon2</label>
    <input type="text" class="form-control" value="<?php echo $footer_section_data['icon2'];?>" name="icon2">
    <label >Icon3</label>
    <input type="text" class="form-control" value="<?php echo $footer_section_data['icon3'];?>" name="icon3">
    <button type="submit" class="btn btn-primary">update</button>
    <a href="delete_query_footer_section.php?id=<?php echo $$footer_section_data['id'];?>" class=" btn btn-danger " type="submit"><i class="fa-sharp fa-solid fa-trash"></i>Delete</a>
    </form>   
    </div>
 


    <div class="form-group col-md-6">
    <form action="insert_query_socket_section.php" method="POST">
    <H1>Socket Section Information Add</H1>   
    <label>parragraph</label>
    <input  type="text" class="form-control" placeholder="Enter text" name="parragraph">
    <label>link</label>
    <input  type="text" class="form-control" placeholder="Enter text" name="link">
    <button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
<div class="space form-group col-md-6">
    <form action="update_query_socket_section.php?id=<?php echo $socket_data['id'];?>" method="POST">
    <H1>Socket Section Information update</H1>   
    <label>parragraph</label>
    <input  type="text" class="form-control" value="<?php echo $socket_data['parragraph'];?>" name="parragraph">
    <label>link</label>
    <input  type="text" class="form-control" value="<?php echo $socket_data['link'];?>" name="link">
    <button type="submit" class="btn btn-primary">update</button>
</form>
</div>

</div>
    </div>
    </div>
    </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
</body>
</html>