<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
  <?php $__env->startSection('title', 'Order Online'); ?>
  <style>
  body{
    overflow : hidden !important
    
    }
    .app {
      position: relative;
    }

    .app .item {
      opacity: .3;
    }

    .app .app-content {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      transform: translate(-50%, -50%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0 2rem;

    }

    .app .app-content h1 {
      font-family: "Fira Sans", sans-serif;
      font-size: 8rem;
      color: #ffa600;
      font-weight: 700;
      line-height: 12rem;
      margin: 0 0 1.5rem;
      text-align: center;
    }

    .app .app-content p {
      text-align: center;
      font-weight: 400;
      font-size: 1.6rem;
      line-height: 2rem;
      margin: 0 0 4.5rem;
    }
    
    .app .app-content .actions img {
        width: 100%;
        position: relative;
        border-radius: 5px;
      }

    @media (max-width: 768px)  {
      .app .app-content h1 {
        font-size: 4.5rem;
        line-height: 8rem;
      }

      .app .app-content p {
        font-size: 1.4rem;
        line-height: 2rem;
      }
    }
    @media (max-width: 768px)  {
      .app .app-content h1 {
        font-size: 4.5rem;
        line-height: 8rem;
      }

      .app .app-content p {
        font-size: 1.4rem;
        line-height: 2rem;
      }
    }
    
    @media (max-width: 576px)  {
      .app .app-content .actions {
        align-items: center;
        flex-direction: column;
      }
    }


  </style>
  <section class="app">
    <div class="item"
      style="background:url(<?php echo e(asset('images/7.jpg')); ?>) center no-repeat; background-size: cover; height: 100vh;">
    </div>
    <div class="app-content">
      <img style="max-width:100px;" src="<?php echo e(asset('images/app-icon.png')); ?>" alt="">
      <h1 style="color: #f08113">Download the app</h1>
      <p>Order anything and track it in real time with the Salva app.</p>
      <div class="actions d-flex gap-5">
        <?php
          $appUrl_andr_Status = @$landing_values['app_url_android_status'];
      $app_andr_url = ($appUrl_andr_Status?$landing_values['app_url_android']:"/" );

          $appUrl_ios_Status = @$landing_values['app_url_ios_status'];
      $app_ios_url = ($appUrl_andr_Status?$landing_values['app_url_ios']:"/" );

        ?>
        <a href="<?php echo e($app_ios_url); ?>"><img src="<?php echo e(asset('images/app-store-btn.png')); ?>" alt=""></a>
        
          <a
          href="<?php echo e($app_andr_url); ?>"><img
            src="<?php echo e(asset('images/google-play-btn.png')); ?>" alt=""></a>
        
      </div>
    </div>
  </section>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/u318926794/domains/salvafastfood.co.uk/public_html/resources/views/onlineorder.blade.php ENDPATH**/ ?>