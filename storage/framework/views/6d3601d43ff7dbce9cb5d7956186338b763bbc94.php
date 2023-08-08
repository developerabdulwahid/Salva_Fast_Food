<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <?php $__env->startSection('title', 'Salva Fast Food'); ?>
  <style>
      .overlay {
          position: fixed;
          top: 0;
          bottom: 0;
          backdrop-filter: blur(8px);
          left: 0;
          right: 0;
          background: rgba(0, 0, 0, 0.7);
          transition: opacity 500ms;
          opacity: 0;
          z-index: 9999;
          visibility:hidden;;
      }
      .overlay.active{
          opacity: 1;
          visibility:visible;;

      }
      .overlay:target {
          visibility: visible;
          opacity: 1;
      }
      #popup1 {
          font-family: poppins;
      }
      .overlay.active .popup{
          opacity:1!important;
      }
      #popup1 .popup {
          margin: 0px auto;
          padding: 50px 20px;
          background: hsl(0deg 0% 0% / 73%);
          border-radius: 0px;
          text-align: center;
          top: 50% !important;
          position: fixed !important;
          -moz-transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          right: 0px;
          left: 0;
          box-shadow: 0 1px 3px 0 rgb(0 0 0 / 5%);
          opacity: 0;
          background-color: #FFFFFF;
          font-weight: 300;
          width: 100%;
          max-width: 580px;
          transition: 0.4s ease-in-out;
          transition-delay: 0s;
          overflow: hidden;
      }
      #popup1 .popup h2 {
          margin-top: 0;
          color: #333;
      }
      #popup1 .popup .close {
          position: absolute;
          top: 0px;
          right: 0px;
          transition: all 200ms;
          font-size: 30px;
          font-weight: normal;
          text-decoration: none;
          text-align: center;
          background: #333;
          border-radius: 0;
          cursor: pointer;
          float: right;
          padding: 0;
          color: #fff;
          margin-top: 0;
          margin-right: 0;
          height: 40px;
          width: 40px;
          line-height: 45px;
      }
      #popup1 .popup .close:hover {
          color: #06d85f;
      }
      #popup1 .popup .content {
          max-height: 30%;
          overflow: auto;
      }
      #popup1 .newletter-title h2 {
          font-size: 24px;
          text-transform: uppercase;
          font-weight: 700;
          letter-spacing: 3px;
          margin: 0 0 15px;
      }
      #popup1 .box-content label {
          font-weight: 400;
          max-width: 560px;
          display: inline-block;
          margin-bottom: 5px;
          font-size: 14px;
          line-height: 26px;
          color:black;
      }
      .newletter-popup {
          background: #fff;
          top: 50% !important;
          position: fixed !important;
          padding: 0;
          text-align: center;
          -moz-transform: translateY(-50%);
          -webkit-transform: translateY(-50%);
          -o-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
      }
      #popup1 #frm_subscribe #subscribe_pemail {
          background: #ebebeb none repeat scroll 0% 0%;
          border: medium none;
          height: 40px;
          width: 65%;
          margin: 20px 0;
          padding-left: 15px;
      }
      #popup1 #frm_subscribe a {
          cursor: pointer;
          border: none;
          background: #333;
          padding: 3px 25px;
          text-transform: uppercase;
          font-size: 14px;
          color: #fff;
          font-weight: 600;
          line-height: 34px;
          display: inline-block;
          border-radius: 0;
          letter-spacing: 2px;
      }
      #popup1 .box-content .subscribe-bottom {
          margin-top: 20px;
      }
      #popup1 .box-content .subscribe-bottom #newsletter_popup_dont_show_again {
          display: inline-block;
          margin: 0;
          vertical-align: middle;
          margin-top: -1px;
      }
      #popup1 .box-content .subscribe-bottom label {
          margin: 0;
          font-weight: 400;
          max-width: 650px;
          display: inline-block;
          margin-bottom: 5px;
          font-size: 12px;
      }
      .carousel-image{
          height:100vh;

      }

      footer{
          height: auto; position:fixed!important;
          bottom:0!important;
      }
    #bannerCarousel .main-title .content .img-fluid {
      max-width: 80%;
    }

    #bannerCarousel .item {
      display: flex;
      flex-direction: column;
      align-self: center;
      justify-content: center;
  
    }

    #bannerCarousel .main-title {
      margin: 0 auto;
    }

    #bannerCarousel .caption {
      text-align: center;
      max-width: 80rem;
      padding: 0 2rem;
      text-shadow: .1rem .2rem .5rem #000;
      margin: 0 auto;
      font-size: 1.6rem;
      line-height: 2.8rem;
    }
    

    .section.banner .content-wrap {
      background-color: #000;
    }

    .rewards {
      padding: 5rem 2rem;
      text-align: center;
      position: relative;
    }
    
    .rewards .opacity {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      opacity: .15;
       /*background: url('<?php echo e(asset("images/4.jpg")); ?>') no-repeat center; */
      background-size: cover;
      object-fit: cover;
    }

    .rewards h2 {
      margin: 3rem auto 5rem;
      font-size: 7.5rem;
      font-weight: 700;
      text-transform: uppercase;
      z-index: 1;
    }

    .rewards .row .icon {
      font-size: 7.5rem;
      margin: 0 auto;
      color: #ffa600;
    }

    .rewards .row h3 {
      font-size: 3.2rem;
      margin: 2rem auto;
      z-index: 1;
    }

    .rewards .row p {
      font-size: 1.6rem;
      margin-bottom: 2rem;
      z-index: 1;
    }

    .stay-loop {
      text-align: center;
    }

    .stay-loop h2 {
      font-size: 3.8rem;
      margin-bottom: 2.5rem;
    }

    .stay-loop p {
      font-size: 1.6rem;
      margin-bottom: 2rem;
    }

    .stay-loop input, .stay-loop a {
      height: 4.5rem;
      font-size: 1.4rem;
      line-height: 3.5rem;
      width: 100%;
      color: #fff;
    }

    @media (max-width: 767px) {
      #bannerCarousel .main-title {
        padding: 0;
      }
      .rewards h2 {
        margin: 2rem auto 4rem;
        font-size: 5.2rem;
      }

      .rewards .row .icon {
        font-size: 5.2rem;
      }

      .rewards .row h3 {
        font-size: 2.8rem;
      }

      .rewards .row p {
        font-size: 1.4rem;
      }
    }


    .carousel-inner{
      width:100%;
      height:85% !important;
    }
    .carousel-image{
      transform: scale(1.0);
        object-fit: cover;
    }
    @media  only screen and (max-width: 768px){
        .carousel-caption img{
            width:230px;
        }
        .carousel-caption{
            top: 50%;
            transform: translateY(-50%);
            bottom: initial;
        }
    }
   
    .carousel-indicators{
      bottom:170px !important;
    }




.carousel-caption.h1{
  font-size: 700;
}







@media  only screen and (max-width: 768px) {
  /* For general iPad layouts */

.social-icon {
    width: 100% !important;

}
.carousel-inner {
  
    height: 100% !important;
}
.carousel-indicators {
    bottom: 50px !important;
}

}

@media  only screen and (max-width:375px) {
  /* For general iPad layouts */

.copyright{
  padding-left:0px !important
}
.carousel-indicators {
    bottom: 250px !important;
}
.slide-logo{
  max-width: 350px !important;
}
}

@media  only screen and (max-width:360px)
{

.copyright{
  padding-left:0px !important
}

.carousel-indicators {
    bottom: 325px !important;
}
.slide-logo{
  max-width: 350px !important;
}

}

@media  only screen and (max-width:414px){

.copyright{
  padding-left:0px !important
}

.slide-logo{
  max-width: 350px !important;
}
}
@media  only screen and (min-width:1500px) {
    .carousel-inner {
        height: 100% !important;
    }


    @media  only screen and (min-width: 1200px) {
        .carousel-inner {
            height: 100% !important;
        }


    }
    @media  only screen and (min-width: 2000px) {
        .carousel-inner {
            height: 100% !important;
        }


    }



    .slide-logo {
        max-width: 550px;
        top: 0;
        -webkit-filter: drop-shadow(12px 12px 25px rgba(0, 0, 0, 0.5));
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        padding: 3rem;
    }

    /* Newsletter area */
    .subscription {
        background: #fff0e6;
        padding-bottom: 0px;
        padding-top: 5px;
        border-radius: 1.25rem;
    }

    .news-heading-underline {
        background: #ef7822;
        width: 150px;
        height: 3px;
        border-radius: 2rem;
        margin-bottom: 2rem;
    }

    .search {
        position: relative;
        box-shadow: none;
    }

    .search input {
        height: 60px;
        text-indent: 25px;
        border: none;
    }

    .search input:focus {
        box-shadow: none;
        border: 2px solid #ef7822;
    }

    .search .fa-search {
        position: absolute;
        top: 20px;
        left: 16px;
    }

    .search button {
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 50px;
        background: #ef7822;
        border-radius: 50%;
    }

    .subscribe-btn {
        border-color: #ef7833;
    }

    .subscribe-btn:hover {
        color: #fff;
        background-color: #ef7833;
        border-color: #ef7822;
    }

    .subscribe-btn:hover,
    .subscribe-btn:focus {
        outline: none;
        box-shadow: none !important;
    }

    .newsletter--input {
        border-radius: 30px;
    }

    figcaption {
        color: #ef7822;
    }

}
      .carousel-caption {
          top: 50%;
          transform: translateY(-50%);
          bottom: initial;
      }
    .carousel-caption img {
        max-width: 60%;
    }

  </style>
  
   <section id="bannerCarousel"style="">
   
        <div class="item" >
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade"   data-bs-ride="carousel">



                <div class="carousel-inner">

                    <div class="carousel-item ">
                        <img src="<?php echo e(asset('images/home-1.png' )); ?>" id="sliderimg" class="carousel-image d-block w-100" alt="Bites & Smile">
                        <div class="carousel-caption">
                            <img src="<?php echo e(asset('images/slogan.png' )); ?>"/>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/image_2.png' )); ?>" id="sliderimg" class="carousel-image d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <img src="<?php echo e(asset('images/slogan.png' )); ?>"/>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/image_3.png' )); ?>" id="sliderimg" class="carousel-image d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <img src="<?php echo e(asset('images/slogan.png' )); ?>"/>

                        </div>
                    </div>


                    <div class="carousel-item active">
                        <img src="<?php echo e(asset('images/image_6.png' )); ?>" id="sliderimg" class="carousel-image d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <img src="<?php echo e(asset('images/slogan.png' )); ?>"/>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/image_7.png' )); ?>" id="sliderimg" class="carousel-image d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <img src="<?php echo e(asset('images/slogan.png' )); ?>"/>

                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>

    </section>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <div id="popup1" class="overlay">
            <div class="popup"> <a class="close" href="#">×</a>
                <div id="dialog" class="window">

                    <div class="box">
                        <div class="newletter-title">
                            <h2>Sign Up For Newsletter

                            </h2>
                        </div>
                        <div class="box-content newleter-content">
                            <label>Receive Latest Updates, Offers and Many Other News Every Month
                            </label>
                            <div id="frm_subscribe">
                                <form name="subscribe" id="newsLetterForm">
                                    <?php echo csrf_field(); ?>
                                    <div>
                                        <!-- <span class="required">*</span><span>Email</span>-->
                                        <input type="text" value="" name="email" id="subscribe_pemail">
                                        <div id="notification"></div>
                                        <a class="button" onclick="submitNews()"><span>Submit</span></a> </div>
                                </form>

                            </div>
                            <!-- /#frm_subscribe -->
                        </div>
                        <!-- /.box-content -->
                    </div>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        jQuery(function (){
            jQuery("#newsLetterForm").submit(function (e) {
                e.preventDefault();
                // Get input field values
                var user_email = $('input[name=email]').val();

                // Simple validation at client's end
                // We simply change border color to red if empty field using .css()
                var proceed = true;

                if (user_email === "") {
                    proceed = false;
                }

                if (proceed) {
                    submitNews();
                }
            });
        })

        function submitNews(){

            var data = $("#newsLetterForm").serialize();
            $.ajax({
                url: "https://admin.salvafastfood.com/newsletter/subscribeApi",
                type: 'GET',
                dataType: 'json', // added data type
                data:data,
                success: function(res) {
                    if(res.sucess){
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "100",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "show",
                            "hideMethod": "hide"
                        };
                        toastr.success('Subscription Sucessful');

                    }
                    else{
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "preventDuplicates": true,
                            "onclick": null,
                            "showDuration": "100",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "show",
                            "hideMethod": "hide"
                        };
                        toastr.error(res.msg);

                    }

                }
            });
        }
    </script>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /media/abdulwahid/DATA/Study-Material/Salva_Fast_Food/resources/views/home.blade.php ENDPATH**/ ?>