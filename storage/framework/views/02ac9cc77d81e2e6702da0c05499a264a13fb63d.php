<style>
@media  only screen and (max-width: 992px){
header nav .nav-menu {
    
    background-color: rgba(0, 0, 0, 1)!important;
}
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<nav>
   
    <a href="/" class="nav-logo"><img src="<?php echo e(asset('images/logo.png')); ?>" alt=""></a>
    
    <ul class="nav-menu">


      <li class="nav-item">
        <a href="<?php echo e(route('menu')); ?>" class="<?php echo e(request()->is('menu') ? 'active' : ''); ?> nav-link">Menu</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('franchise')); ?>" class="<?php echo e(request()->is('franchise') ? 'active' : ''); ?> nav-link">Franchise</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('career')); ?>" class="<?php echo e(request()->is('career') ? 'active' : ''); ?> nav-link">Career</a>
      </li>
      <li class="nav-item d-none">
        <?php
          $landing_page_links = DB::table('business_settings')->where(['key'=>'landing_page_links'])->first();

         $values =$landing_page_links = (isset($landing_page_links->value)?json_decode($landing_page_links->value, true):null);
         $appUrl_Status = @$values['web_app_url_status'];
         $app_url = ($appUrl_Status?$values['web_app_url']:"/" );
        ?>
        
      </li>
      <li class="nav-item">
        <a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->is('contact') ? 'active' : ''); ?> nav-link">Contact Us</a>
      </li>
      <li class="nav-item"color="black;" >
        <a href="https://salvaeats.com/" class="nav-link btn btn-success order_now">Order Online</a>
      </li>
      <li>

    </ul>
    
    <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
    
   
  </nav>


  <style>
    @import  url("https://fonts.googleapis.com/css?family=Poppins");
    @import  url("https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      ::-webkit-scrollbar {
           width: 5px;
         }
    ::-webkit-scrollbar-thumb {
      background: #f08113;
      border-radius: 2px;
    }
    ::-webkit-scrollbar-track {
      background: #F2F3F5;
    }
    .bg.fix {
    
    }

</style>





<?php /**PATH /home/u318926794/domains/salvafastfood.co.uk/public_html/resources/views/layouts/header.blade.php ENDPATH**/ ?>