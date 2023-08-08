<x-app-layout>
    @section('title', 'Franchise')
    <link rel="stylesheet" href="{{ asset('intl-input-tel/css/intlTelInput.css') }}">
    <style>
        .content-wrap.franchise h2 {
            font-family: 'Fira Sans', sans-serif;
            margin: 5rem auto 5rem;
        }

        .franchise .left-side {
            font-family: 'Fira Sans', sans-serif;
            text-align: left;
        }

        .franchise .left-side img {
            background-size: cover;
            object-fit: cover;
            width: 100%;
            margin-bottom: 2rem;
        }

        .franchise p,
        .franchise a {
            font-size: 1.4rem;
            color: #464646;
            margin-bottom: 1.8rem;
            font-family: 'Fira Sans', sans-serif;
            text-align: justify;
        }

        .franchise .left-side a {
            color: #ffa705;
        }

        .franchise .left-side h2 {
            font-size: 2.2rem;
            font-weight: 400;
            text-transform: none;
            font-style: normal;
            letter-spacing: 1;
            text-decoration: none;
            line-height: 3.2rem;
            margin: 2.8rem auto 1.4rem;
            font-family: 'Fira Sans', sans-serif;
        }

        .franchise form select {
            border: 1px solid rgba(209, 209, 209, .7);
        }

        .franchise form .radio-boxes,
        .franchise form label {
            color: #464646;
            font-size: 1.4rem;
            margin-bottom: 2rem;
        }

        .iti__flag-box,
        .iti__country-name {
            color: #000 !important;
        }

        .iti {
            width: 100% !important;
        }

        .invalid-feedback {
            text-align: left !important;
            font-size: 1.25em !important;
        }
        .bg.fix.layer{
            background-image: url({{ asset('images/4.jpg')  }});
        }
        @media only screen and (max-width:768px){
            .bg.fix.layer{
                background: url({{ asset('images/4.jpg')  }}) fixed no-repeat center;
            }
        }

    </style>
    <section class="section banner">
        <div class="bg fix layer" style=""></div>
        </div>
        <div class="banner-text">
            <h1>Franchise</h1>
            <img src="{{ asset('images/title_separate_line.png') }}" alt="">
            <p></p>
        </div>
        <div class="content-wrap franchise">
            <div class="content-text" style="padding: 5rem; background-color: #000;">
                <p
                    style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: center; line-height: 3.2rem; color: #fff;">
                    If you share our vision as well as our passion, we"ll support your ambition and business objectives.
                    With
                    a
                    programme tailor-made to answer your every need. From store location, design and fitting to staff
                    training and
                    sales plans. We"ll be with you .. to get started please complete the form below</p>
            </div>
            {{-- <i class="icon material-icons">paid</i> --}}
            <div class="container">
                <h2 style="color:#f08113">How to become Salva Fast Food franchise...</h2>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 px-lg-5 px-md-3">
                        <div class="left-side">
                            <img src="{{ asset('images/3.jpg') }}" alt="" class="img-fluid">
                            <p class="" >Read about our franchise opportunities <br><a
                                    href="{{ asset('images/broucher.pdf') }}"  target="_blank"
                                    style="color:#f08113">download Salva Fast
                                    Food brochure &gt;&gt;&gt;</a></p>
                            <h2 style="white-space:pre-wrap; color:#f08113!important;">Contact us</h2>
                            <p class="" style="white-space:pre-wrap;color: #f08113;!important;">T: <strong style="color: #464646;!important;">+44 7438 894521</strong><br>E: <a style="color:#464646;font-weight:bold"
                                    href="mailto:support@salvafastfood.com"
                                    target="_blank">support@salvafastfood.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 px-lg-5 px-md-3">
                        <p style="padding: 0 1.5rem"><b>Thank you for enquiring.</b> Our Salva Fast Food franchise is
                            priced from
                            £15,000 per franchise pack, and our salva shop franchises require an investment from
                            £50,000. Click on
                            the link to the left and find out more.</p>
                        <p style="padding: 0 1.5rem"><b>To register your interest</b> and to receive an invitation to
                            meet with our
                            directors, please fill in the below form and we'll be in touch shortly...</p>

                        <form action="{{ route('franchise') }}" method="post" id="franchiseForm"
                            class="needs-validation" novalidate>
                            @csrf

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="First Name *"
                                                name="first_name" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="Last Name *"
                                                name="last_name" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="email" class="input-field" placeholder="Email Address *"
                                                id="email" name="email" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            {{-- <input type="text" class="input-field" placeholder="Phone *" name="phone" required=""> --}}
                                            <input type="tel" class="input-field" id="phone" name="phone" required>
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="Country of Residence *"
                                                name="country" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field"
                                                placeholder="Where did you hear about us?" name="hear_about_us">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="Address *"
                                                name="address" required>
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="City *" name="city"
                                                required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="Postcode *"
                                                name="postcode" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <input type="text" class="input-field" placeholder="Nationality *"
                                                name="nationality" required="">
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left">
                                        <label for="">Have you ever run a franchise before? *</label>
                                        <div class="radio-boxes">
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="ever_run_options"
                                                id="ever-run-option1" value="Yes" required />
                                            <label class="form-check-label" for="ever-run-option1"
                                                style="margin-left: 6px; margin-right: 6px;">Yes</label>
                                            {{-- </div> --}}
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="ever_run_options"
                                                id="ever-run-option2" value="No" required />
                                            <label class="form-check-label" for="ever-run-option2"
                                                style="margin-left: 6px; margin-right: 6px;">No
                                            </label>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left">
                                        <label for="">Have you had previous food experience? *</label>
                                        <div class="radio-boxes">
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="food_experience"
                                                id="food-experience1" value="Yes" required />
                                            <label class="form-check-label" for="food-experience1"
                                                style="margin-left: 6px; margin-right: 6px;">Yes</label>
                                            {{-- </div> --}}
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="food_experience"
                                                id="food-experience2" value="No" required />
                                            <label class="form-check-label" for="food-experience2"
                                                style="margin-left: 6px; margin-right: 6px;">No
                                            </label>
                                            {{-- </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: left">
                                        <label for="">How quickly can you start? *</label>
                                        <div class="radio-boxes">
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="start_options"
                                                id="start-option1" value="3 MONTHS" required />
                                            <label class="form-check-label" for="start-option1"
                                                style="margin-left: 6px; margin-right: 6px;">3 MONTHS</label>
                                            {{-- </div> --}}
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="start_options"
                                                id="start-option2" value="6 MONTHS" required />
                                            <label class="form-check-label" for="start-option2"
                                                style="margin-left: 6px; margin-right: 6px;">6 MONTHS</label>
                                            {{-- </div> --}}
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="start_options"
                                                id="start-option3" value="9 MONTHS" required />
                                            <label class="form-check-label" for="start-option3"
                                                style="margin-left: 6px; margin-right: 6px;">9 MONTHS</label>
                                            {{-- </div> --}}
                                            {{-- <div class="form-check form-check-inline"> --}}
                                            <input class="form-check-input" type="radio" name="start_options"
                                                id="start-option4" value="12 MONTHS" required />
                                            <label class="form-check-label" for="start-option4"
                                                style="margin-left: 6px; margin-right: 6px;">12 MONTHS</label>
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <select name="level_of_investment" id="level_of_investment"
                                                class="input-field">
                                                <option value="">Level Of Investment</option>
                                                <option value="£50,000 - £70,000">£50,000 - £70,000</option>
                                                <option value="£70,000 - £100,000">£70,000 - £100,000</option>
                                                <option value="£100,000 - £150,000">£100,000 - £150,000</option>
                                                <option value="£500,000+">£150,000+</option>
                                            </select>
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-field-wrap">
                                            <select class="input-field" name="type_of_development_interest"
                                                id="type_of_development_interest">
                                                <option value="">What type of development is of interest?</option>
                                                <option
                                                    value="Country Master Franchise (ability to sub-franchise to others)">
                                                    Country
                                                    Master
                                                    Franchise (ability to sub-franchise to others) </option>
                                                <option value="Regional Development (developing a region)">Regional
                                                    Development
                                                    (developing
                                                    a region)</option>
                                                <option value="Multi Site Development (min 3 store clusters)">Multi Site
                                                    Development (min
                                                    3
                                                    store clusters)</option>
                                            </select>
                                            <div class="focus"></div>
                                        </div>
                                        <div class="empty-sm-20 empty-xs-20"></div>
                                    </div>
                                </div>
                                <div class="input-field-wrap">
                                    <textarea placeholder="Why do you want to work with Salva Fast Food? *"
                                        class="input-field" id="content" name="content" required=""></textarea>
                                    <div class="focus"></div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="phone_with_cc" id="phone_with_cc">
                            <div class="empty-sm-60 empty-xs-60"></div>
                            
                            <div class="g-recaptcha" data-sitekey="{{ config('app.google_recaptcha_site_key') }}"></div>
                            <div class="invalid-feedback d-none d-block" id="captcha-error">Please verify you are not a
                                robot.</div>
                            <div class="text-center" style="color:#ff671f">
                                <div class="page-button">
                                    <input type="submit" id="submit">
                                    <span class="txt" style="color:#f08113" >Submit</span><i></i>
                                </div>
                            </div>
                        </form>
                        <div>
                            @if (Session::has('success'))

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
                                        toastr.success('{{ Session::get('success') }} ' );
                                    })
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('scripts')
        <script src="https://www.google.com/recaptcha/api.js"  async defer></script>

        {{-- @if (Session::has('message'))
  <script type="text/javascript">
    toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
  </script>
  @endif --}}
        <script src="{{ asset('intl-input-tel/js/intlTelInput.js') }}"></script>
        <script src="{{ asset('js/jbvalidator.js') }}"></script>
        <script src="{{ asset('js/custome/custom_validator.js') }}"></script>
        <script>
            const input = document.querySelector("#phone");
            let iti = intlTelInput(input, {
                // any initialisation options go here
                separateDialCode: true,
                utilsScript: "{{ asset('intl-input-tel/js/utils.js') }}",
                initialCountry: "auto",
                geoIpLookup: function(success, failure) {
                    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "us";
                        success(countryCode);

                    });
                },
            });
            $('#phone').blur(function(e) {
                var number = iti.getNumber();
                $('#phone_with_cc').val(number);
            });
        </script>
    @endsection
</x-app-layout>
