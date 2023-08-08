<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="google-site-verification" content="_zi2g0Vz4-IYfNhVAlbTE8iaaph4S4PNkDd-nzUuBjY" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <title>@yield('title')</title>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/1bd4fe4b5577084e49b4ab237/4a28e5ca999c93931265d24dc.js");</script>
    <style>
        .hamburger {
            right: 5%;
            position: fixed;
        }
        
            @media only screen and (max-width:460px)
{
    logo-img{
      
    width: -webkit-fill-available;
    
} 
.btn scroll-top{
  color: #f08113;
}
            
        }
    </style>
    @include('layouts.style')
</head>

<body class="d-flex flex-column h-100">
    <!-- Page Heading -->
    <header>
        @include('layouts.header')
    </header>

    <!-- Page Content -->
    <main class="flex-shrink-0">
    
        {{ $slot }}
    </main>
    <!-- Page Footing -->
    <footer class="footer my-auto">
        @include('layouts.footer')
    </footer>
    <div class="cookie-modal" id="cookieModal">
    </div>
    <a class="btn scroll-top" data-scroll="up" type="button">
        <i class="fa fa-chevron-up"></i>
    </a>
    @include('layouts.script')
    @yield('scripts')

<Style>
    /*.custom-bar {*/
    /*    background-color: #e67817;*/
    /*    padding: 12px 12px 12px 26px;*/
    /*    position: fixed;*/
    /*    display: block;*/
    /*    bottom: 0;*/
    /*    left: 0;*/
    /*    right: 0;*/
    /*    margin: 0;*/
    /*    border-radius: 0;*/
    /*    z-index: 100;*/
    /*    border: 0;*/
    /*    -webkit-box-shadow: 0 5px 15px 5px rgb(0 0 0 / 60%);*/
    /*    -moz-box-shadow: 0 5px 15px 5px rgba(0,0,0,.6);*/
    /*    box-shadow: 0 5px 15px 5px rgb(0 0 0 / 60%);*/
    /*}*/
 .custom-bar {
    width: 30%;
    background-color: #fff;
    color:#000;
    padding: 12px 12px 12px 12px;
    position: fixed;
    display: block;
    bottom: 20px;
    left: 20px;
    right: 0;
    margin: 0;
    border-radius: 0;
    z-index: 100;
    border: 0;
    -webkit-box-shadow: 0 5px 15px 5px rgb(0 0 0 / 60%);
    -moz-box-shadow: 0 5px 15px 5px rgba(0,0,0,.6);
    box-shadow: 0 5px 15px 5px rgb(0 0 0 / 60%);
}
    
    .custom-bar p {
     
         display: block;
         margin: 0;
         font-size: 12px;
        font-size: 1.4rem;
        margin-bottom: 0;
        color: #636363;
        text-align: justify;
     }
     .custom-bar p a {
          color:#e67817 !important;
          text-style:underline;
          text-decoration: underline;
      }.custom-bar button.close-button {
           top: 23%;
       }button.close-button {
            outline: none;
            position: absolute;
            right: 2rem;
            top: 50%;
            margin-top: -0.9rem;
        }
        .custom-bar h2{
            font-family: Poppins, sans-serif;
            font-size: 2.2rem;
            color: #29929;
            text-align: justify;
            color:#292929;
        }

    @media (max-width: 390px) {
        .custom-bar{
        width:90%;
        bottom: 90px !important;
        }
        /*header nav .nav-menu{*/
        /*    opacity:0.9;*/
        /*    height:30vh;*/
            
        /*}*/
    }
      @media (min-width:600px) {
        .custom-bar{
        width:30%;
        bottom: 20px !important;
        }
    }
        
    
    .custom-bar .btn{
        background-color:#e67817;
        color:#fff;
        float:right;
        margin-right:10px;
        font-family: Poppins, sans-serif;
        font-size: 12px;
    }
</Style>
    <div class="custom-bar callout" data-closable=""style="display: none;">
        <!--<p>Salva Fast Food use cookies and other tracking technologies for performance, analytics, and marketing purposes. By using this website, you accept this use. Learn more about these technologies in the <a href="/privacy" target="_blank">Privacy Policy</a></p>-->
        <h2>
            Your data. Your Choice.
        </h2>
        <p>
            We and our partners use technologies, such as cookies, to personalise advertising and content based on your browsing habits, and to measure and analyse use so that we can improve our website and services. Learn more about this in our <a href="/cookie" target="_blank">Cookie Policy</a> and about the related use of your personal data in our <a href="/privacy" target="_blank">Privacy Statement</a> . Click “Accept Cookies” to agree to the use of these technologies and your personal data, or "Cookie Settings" to tailor your preferences.
        </p>
    <!--    <button style="border: 0;-->
    <!--background: 0;-->
    <!--font-size: 23px;-->
    <!--color: white;" class="close-button" aria-label="Dismiss alert" type="button" data-close="" onclick="localStorage.setItem('cookie',true);this.parentNode.style.display = 'none'">-->
    <!--        <span aria-hidden="true">×</span>-->
    <!--    </button>-->
    
    <button class="btn" onclick="localStorage.setItem('cookie',true);this.parentNode.style.display = 'none'">Accept Cookies</button>
    <button class="btn " onclick="localStorage.setItem('cookie',true);this.parentNode.style.display = 'none'">Reject All</button>
    </div>
</body>

</html>
