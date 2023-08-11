<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('title', 'Contact Us'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('intl-input-tel/css/intlTelInput.css')); ?>">
    <style>
        .content-wrap {
            padding: 8rem 2rem 5rem !important;
        }

        .contact-us h3,
        .content-wrap .side-content h3 {
            margin-bottom: 2.4rem;
            line-height: 1.3;
            font-size: 2.4rem;
            color: #ffa600;
            text-align: left;
        }

        .content-wrap .side-content p {
            font-size: 1.4rem;
            color: #fff;
        }

        .content-wrap .side-content a {
            text-decoration: none;
            line-height: inherit;
            color: #e49400;
        }

        .content-wrap .side-content a:hover {
            text-decoration: underline;
        }

        .contact-us input,
        .contact-us textarea {
            color: #fff;
        }

        .contact-us p,
        .contact-us label {
            font-size: 1.4rem;
            color: #e5e6e7;
            text-align: left;
        }

        @media(max-width: 767px) {
            .content-wrap .side-content {
                margin-top: 5rem;
            }
        }

        .iti__flag-box,
        .iti__country-name {
            color: #000 !important;
        }

        .iti {
            width: 100% !important;
        }

        select.input-field {
            border: 1px solid rgba(209, 209, 209, .7) !important;
        }

        .filename {
            height: 40px;
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1.5em;
            width: 150px;
            white-space: nowrap;
            overflow: hidden;
            background: #fff;
            color: #000;
            flex: 1;
            -webkit-border-top-left-radius: 3px;
            -webkit-border-bottom-left-radius: 3px;
            -moz-border-radius-topleft: 3px;
            -moz-border-radius-bottomleft: 3px;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        label[for="file-upload-1"],
        label[for="file-upload-2"],
        label[for="file-upload-3"] {
            padding: 0.5em 2.5rem;
            display: inline-block;
            background: #ffa600;
            cursor: pointer;
            -webkit-border-top-right-radius: 3px;
            -webkit-border-bottom-right-radius: 3px;
            -moz-border-radius-topright: 3px;
            -moz-border-radius-bottomright: 3px;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            display: inline-flex;
            align-items: center;
            height: 40px;
            margin-bottom: 0;
        }
        .images {
            position: absolute;
            left: -9999px;
        }
        .invalid-feedback {
          text-align: left !important;
          font-size: 1.25em !important;
        }

    </style>
    
    <section class="section banner">
        <div class="bg"
            style="background: url(<?php echo e(asset('images/1.jpg')); ?>) center no-repeat; background-size: cover;"></div>
        <div class="banner-text">
            <h1>Contact Us</h1>
            <img src="<?php echo e(asset('images/title_separate_line.png')); ?>" alt="">

        </div>
        <div class="content-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-8 col-sm-12 px-lg-5 px-md-3 text-center contact-us">
                        <h3 style="color:#f08113">Please complete the form below and one of the SFF Team will come back to you</h3>

                        <form action="<?php echo e(route('contact')); ?>" enctype="multipart/form-data" method="post" id="contactForm" class="needs-validation"
                            novalidate>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field" placeholder="First Name *"
                                            name="first_name" required="">
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="text" class="input-field" placeholder="Last Name *"
                                            name="last_name" required="">
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="email" class="input-field" placeholder="Email *" name="email"
                                            required="">
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="input-field-wrap">
                                        <input type="tel" class="input-field" id="phone" name="phone" required>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-xs-12" style="text-align: left; margin: 2rem auto;">
                                    <label for="">What would you like to contact us about today?</label>
                                    <div class="radio-boxes">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="select_enquiry"
                                                id="inlineRadio1" value="compliment" />
                                            <label class="form-check-label" for="inlineRadio1">Compliment</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="select_enquiry"
                                                id="inlineRadio2" value="complaint" />
                                            <label class="form-check-label" for="inlineRadio2">Complaint
                                            </label>
                                        </div>
                                        
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="select_enquiry"
                                                id="inlineRadio4" value="General Enquiry" checked />
                                            <label class="form-check-label" for="inlineRadio4">General Enquiry
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12 common-display compliment complaint d-none">
                                    <div class="input-field-wrap">
                                        <select name="restaurant"
                                            class="input-field common-required compliment-required complaint-required">
                                            <option value="">Select Rasturant Name *</option>
                                            <option value="Burnley">Burnley</option>
                                        </select>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-xs-12 common-display compliment complaint d-none">
                                    <div class="input-field-wrap">
                                        <select name="dine_take_delivery"
                                            class="input-field common-required compliment-required complaint-required">
                                            <option value="">Select Dine-In / Takeaway / Delivery *</option>
                                            <option value="Dine-in">Dine-in</option>
                                            <option value="Takeaway">Takeaway</option>
                                            <option value="Delivery">Delivery</option>
                                        </select>
                                        <div class="focus"></div>
                                    </div>
                                    <div class="empty-sm-20 empty-xs-20"></div>
                                </div>
                                <div class="col-xs-12 common-display complaint d-none mb-3" style="text-align: left;">
                                    <label for="">Would you like to upload any images?</label>
                                    <div class="radio-boxes p-2">
                                        
                                            <input class="form-check-input common-required complaint-required"
                                                type="radio" name="upload_image" id="inlineRadio1" value="yes" />
                                            <label class="form-check-label" for="inlineRadio1" style="margin-left: 6px; margin-right: 6px;">Yes</label>
                                        
                                        
                                            <input class="form-check-input common-required complaint-required"
                                                type="radio" name="upload_image" id="inlineRadio2" value="no" />
                                            <label class="form-check-label" for="inlineRadio2" style="margin-left: 6px; margin-right: 6px;">No
                                            </label>
                                        
                                    </div>
                                </div>
                                <div class="col-xs-12 d-none mb-3 common-display" id="cvUploadDiv" style="text-align: left;">
                                    <label for="">Please upload up to 3 images in JPG or PNG format. All images must be
                                        less than 2mb</label>
                                    <div class="f-upload-container d-flex mb-2">
                                        <span id="filename_1" class="filename">Select your file</span>
                                        <label for="file-upload-1">Browse<input type="file" class="images"
                                                data-label="filename_1" id="file-upload-1" name="image1"
                                                accept=".jpg,.jpeg,.png" /></label>
                                    </div>
                                    <div class="f-upload-container d-flex mb-2">
                                        <span id="filename_2" class="filename">Select your file</span>
                                        <label for="file-upload-2">Browse<input type="file" class="images"
                                                data-label="filename_2" id="file-upload-2" name="image2"
                                                accept=".jpg,.jpeg,.png" /></label>
                                    </div>
                                    <div class="f-upload-container d-flex mb-2">
                                        <span id="filename_3" class="filename">Select your file</span>
                                        <label for="file-upload-3">Browse<input type="file" class="images"
                                                data-label="filename_3" id="file-upload-3" name="image3"
                                                accept=".jpg,.jpeg,.png" /></label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-field-wrap">
                                        <textarea placeholder="Message *" class="input-field" name="content"
                                            required=""></textarea>
                                        <div class="focus"></div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-check" style="text-align: left; margin: 0 auto 2rem;">
                                        <input class="form-check-input" type="checkbox" value="" id="privacyChecked" required>
                                        <label class="form-check-label" for="privacyChecked">
                                            By checking this box you confirm that you have read and agree to our <a
                                                href="<?php echo e(route('privacy')); ?>"
                                                class="text-decoration-underline">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="empty-sm-60 empty-xs-60"></div>
                            <div class="g-recaptcha" data-sitekey="<?php echo e((config('app.google_recaptcha_site_key'))); ?>"></div>
                            <div class="invalid-feedback d-none d-block" id="captcha-error">Please verify you are not a robot.</div>
                            <div class="text-center">
                                <div class="page-button style="color:#f08113"">
                                    <input type="submit">
                                    <span class="txt " style="color:#f08113">send a message</span><i></i>
                                </div>
                            </div>
                            <input type="hidden" name="phone_with_cc" id="phone_with_cc">
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
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 px-lg-5 px-md-3 side-content">
                        <h3 style="color:#f08113">Head Offce</h3>
                        <p>Salva Fast Food Ltd, a company registered in England with company number 12098245 whose
                            registered office is at 1-3 st james street, Burnley, Lancashire, BB11 1QL</p>
                        <p>Please note: Our Guest Service team will respond to enquiries and complaints Monday- Friday
                            9am-5pm and
                            are closed on public holidays.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->startSection('scripts'); ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        
        <script src="<?php echo e(asset('intl-input-tel/js/intlTelInput.js')); ?>"></script>
        <script src="<?php echo e(asset('js/jbvalidator.js')); ?>"></script>
        <script src="<?php echo e(asset('js/custome/custom_validator.js')); ?>"></script>
        <script>
          const input = document.querySelector("#phone");
          let iti = intlTelInput(input, {
            // any initialisation options go here
            separateDialCode: true,
            utilsScript: "<?php echo e(asset('intl-input-tel/js/utils.js')); ?>",
            initialCountry: "auto",
            geoIpLookup: function (success, failure) {
              $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                success(countryCode);

              });
            },
          });
          $('#phone').blur(function (e) {
            var number = iti.getNumber();
            $('#phone_with_cc').val(number);
          });
          $("input[name='select_enquiry']").change(function() {
            $('.common-display').addClass('d-none');
            $('.' + $(this).val()).removeClass('d-none');
            $('.common-required').removeAttr('required');
            $('.' + $(this).val() + '-required').attr('required', 'required');
            $("input[name='upload_image']").prop('checked', false);
          });
          $("input[name='upload_image']").change(function() {
            if ($(this).val() == 'yes') {
              $('#cvUploadDiv').removeClass('d-none');
              // $('#file-upload').attr('required', 'required');
            } else {
              $('#cvUploadDiv').addClass('d-none');
              // $('#file-upload').removeAttr('required');
            }
          });
          $("#file-upload-1").bind('change', function() {
              var size = ((this.files[0].size / 1024) / 1024).toFixed(4);
              var file = this.files[0];
              if (size > 2) {
                  let span = $(this).data('label');
                  $('#filename_1').html(
                      `<span style="color:#ff671f">Your file is too large. The maximum file size is 2mb. Please retry a smaller file.</span>`
                      );
                  $('#file-upload-1').val('');
              } else {}
          });
          $("#file-upload-2").bind('change', function() {
              var size = ((this.files[0].size / 1024) / 1024).toFixed(4);
              var file = this.files[0];
              if (size > 2) {
                  let span = $(this).data('label');
                  $('#filename_2').html(
                      `<span style="color:#ff671f">Your file is too large. The maximum file size is 2mb. Please retry a smaller file.</span>`
                      );
                  $('#file-upload-2').val('');
              } else {}
          });
          $("#file-upload-3").bind('change', function() {
              var size = ((this.files[0].size / 1024) / 1024).toFixed(4);
              var file = this.files[0];
              if (size > 2) {
                  let span = $(this).data('label');
                  $('#filename_3').html(
                      `<span style="color:#ff671f">Your file is too large. The maximum file size is 2mb. Please retry a smaller file.</span>`
                      );
                  $('#file-upload-3').val('');
              } else {}
          });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /media/abdulwahid/DATA/Study-Material/Salva_Fast_Food/resources/views/contact.blade.php ENDPATH**/ ?>