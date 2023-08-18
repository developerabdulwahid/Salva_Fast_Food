<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title', 'Careers'); ?>
    <style>
        .career .thumbnail-classic-icon {
            color: #f08113;
        }

        .career .thumbnail-classic-caption h6 {
            /* word-wrap: break-word; */
            font-size: 1.6rem;
        }

        .section.banner .content-wrap button {
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            position: relative;
            border-radius: 5%;
            background-color: #ffa600;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: auto;
            text-align: center;
            font-size: 2rem;
            color: #fff;
        }

        #job-list li {
            color: #636363;
            font-size: 1.4rem;
        }

        #job-list li:before {
            content: "\2022";
            color: #ffa600;
            font-weight: 700;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        #submit {
            width: 10rem;
            height: 4rem;
            color: #fff;
            background: #ffa600;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-decoration: none;
        }

        .invalid-feedback {
            text-align: left !important;
            font-size: 1.25em !important;
        }
        /* .card-img-top {
            border-radius: 40%;
        } */
        
        .fav {
            display: inline-block;
            overflow: hidden;
            text-indent: 9999px;
            white-space: nowrap;
            cursor: pointer;
            width: 60px;
            font-size: 4em;
            &:before {
                content: '\2606';
                color: #000000;
                text-shadow: 0 0 1px #333;
                text-indent: -9999px;
                display: inline-block;
            }
            &:hover:before,
            &:focus:before {
                content: '\2605';
                color: #ffe94c;
            }
            &.off {
                &:before {
                content: '\2605';
                color: #eee71a;
                text-shadow: 0 0 1px #333;
                }
            }
        }
        /* .job-search {
            font-family: Raleway-SemiBold;
            font-size: 13px;
            color: rgba(240, 173, 78, 0.75);
            letter-spacing: 1px;
            line-height: 20px;
            border: 2px solid rgba(240, 173, 78, 0.75);
            border-radius: 40px;
            background: transparent;
            transition: all 0.3s ease 0s;
        } */
        .view-details {
            font-family: Raleway-SemiBold;
            font-size: 13px;
            /* color: rgba(240, 173, 78, 0.75); */
            letter-spacing: 1px;
            line-height: 20px;
            border: 2px solid rgba(240, 173, 78, 0.75);
            border-radius: 40px;
            /* background: transparent; */
            transition: all 0.3s ease 0s;
        }
    </style>
    <section class="section banner">
        <div class="bg fix layer" style="background-image: url(<?php echo e(asset('images/3.jpg')); ?>)"></div>
        <div class="banner-text">
            <h1>Careers</h1>
            <img src="<?php echo e(asset('images/title_separate_line.png')); ?>" alt="" />
            <p></p>
        </div>
        <div class="content-wrap">
            
            <!-- <button class="btn" id="apply-now" style="background-color:#f08113">Apply Now</button> -->
            <?php if(Session::has('success')): ?>
            <script>
                $(function(){
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
                    toastr.success('<?php echo e(Session::get('success')); ?> ' );
                })
            </script>
            <?php endif; ?>  

            <?php if(Session::has('error')): ?>
            <script>
                $(function(){
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
                    toastr.error('<?php echo e(Session::get('error')); ?> ' );
                })
            </script>
            <?php endif; ?>  
            
            <div class="container career">
              <h1 class="mt-3">Our Jobs</h1>

              <h4 class="mt-5">Keywords</h4>
              <input type="text" class="form-control" placeholder="e.g. Chef" name="search" id="search">
            </div>
            <button type="submit" class="btn btn-warning job-search mt-3" style="margin-left: 85.5%; border-radius: 20px;">Search</button>

            
            <div class="container">

                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            
                            <h1 class="card-title" style="color: #000"> <?php echo e($job->title); ?> </h1>
                            
                            <div class="col-md-12 row">

                                <div class="col-md-8">
                                    <h4 class="card-text" style="color: black; "><?php echo Str::words($job->description, 100, ' ...'); ?></h4>
                                </div>


                                <div class="col-md-4">
                                    <img src="<?php echo e(asset('jobs/').'/'.$job->file); ?>" class="card-img-top" width="150px" height="120px" alt="<?php echo e($job->title); ?>" />
                                </div>

                            </div>
                            

                            <div class="text-left mb-3 mt-3">
                                <a href="#" class="btn btn-warning view-details" style="font-size: 2rem">View Details</a>
                            </div>

                            <p class="btn btn-sm btn-primary mr-2"
                                style="position: absolute; top: 0; right: 0; font-size: 1.475rem;">
                                New
                            </p>

                            <p class="mb-3" style="position: absolute; top: 100; right: 0">
                                <input id="star2" class="star" type="checkbox" title="bookmark page" checked><br/><br/>
                            </p>

                            <p class="" style="position: absolute;right: 0;margin: -55px 85px 0px 0px;">
                                <span class="fav">Favorite this</span>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    
    
    
    <?php $__env->startSection('scripts'); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="<?php echo e(asset('js/jbvalidator.js')); ?>"></script>
    <script>
        $(document).ready(function () {
            $(".fav").on("click", function() {
                var $this = $(this);
                $this.toggleClass("off");
            });
        });
    </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/career.blade.php ENDPATH**/ ?>