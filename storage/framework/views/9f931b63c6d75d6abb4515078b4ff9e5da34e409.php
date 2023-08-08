<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title', 'Menus'); ?>
    <style>
        .gallery.menu {
            /* display: flex; */
            /* gap: .5rem; */
        }

        .menus .menu .item {
            border-radius: 0;
            position: relative;
            overflow: hidden;
            padding: 0;
            border: .3rem solid transparent;
        }

        .menus .menu a img {
            max-height: 55rem;
            min-height: 35rem;
            width: 100%;
            transition-duration: .5s;
            opacity: 1 !important;
        }

        .menus .menu a img:hover {
            opacity: 1;
        }

        /* 
    @media (max-width: 768px) {
      .menus .menu .item {
        width: 99%;
      }
    } */

    </style>
    <section class="section banner">
        <div class="bg fix layer" style="background-image: url(<?php echo e(asset('images/2.jpg')); ?>)"></div>
        </div>
        <div class="banner-text">
            <h1>Allergy Information</h1>
            <img src="<?php echo e(asset('images/title_separate_line.png')); ?>" alt="">
            <p></p>
        </div>
        <div class="content-wrap">
            <div class="content-text" style="margin: 5rem;">
                <p style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: left; line-height: 3.2rem;">At
                    Salva Fast Food, we pride ourselves in our fresh ingredients across all our branches in the UK.
                    Please see our allergy information below:
                    <br>
                    At Salva Fast Food, we pride ourselves in our fresh ingredients across all our branches in the
                    UK.<br>
                    Please see our allergy information below:<br>
                    ALLERGIES: Some items contain nuts, gluten and other allergens. Due to cooking environment there is
                    a risk that these traces may be found in any other dish or food that we serve.
                    <br><br>
                    Food Allergies & Intolerances:
                    <br><br>
                    Each ingredient is listed separately, with the allergens it contains. If you have any allergies you
                    should consider each ingredient in the dish you wish to order. Please inform us if you have a food
                    allergy prior to ordering.
                </p>
                <div class="mt-5 mx-auto text-center"><img src="<?php echo e(asset('images/allergen.png')); ?>" class="img-fluid"
                        style="max-width: 85rem; width: 100%;"></div>
            </div>
        </div>
    </section>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /home/u318926794/domains/salvafastfood.co.uk/public_html/resources/views/allergen.blade.php ENDPATH**/ ?>