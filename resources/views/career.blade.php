<x-app-layout>
    @section('title', 'Careers')
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
        .card-img-top {
            border-radius: 40%;
        }
    </style>
    <section class="section banner">
        <div class="bg fix layer" style="background-image: url({{ asset('images/3.jpg') }})"></div>
        <div class="banner-text">
            <h1>Careers</h1>
            <img src="{{ asset('images/title_separate_line.png') }}" alt="" />
            <p></p>
        </div>
        <div class="content-wrap">
            {{-- <i class="icon material-icons">thumb_up</i> --}}
            <!-- <button class="btn" id="apply-now" style="background-color:#f08113">Apply Now</button> -->
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
            @endif {{--
            <div class="content-text" style="padding: 5rem; background-color: #000;">
                <p style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: center; line-height: 3.2rem; color: #fff;">
                    At Salva Fast Food, we’re proud to employ great people who are passionate about their jobs. But they’re all different. Some want to improve their prospects. Others want a job that fits round their family life. And some
                    just want to earn a bit of extra cash working with good, friendly people at a place where they can grow.&nbsp;Everyone who works here wants and needs different things.&nbsp;And no matter who you are, what you need and
                    where you’re going, Salva Fast Food can be a part of it.
                </p>
            </div>
            --}}
            <div class="container career">
                <div class="row row-50 justify-content-sm-center">
                    <div class="col-sm-12">
                        <div class="jobs row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-6">
                            
                            @foreach ($jobs as $job)
                                <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                    <div class="unit-left">
                                        {{-- <a href="#" class="thumbnail-classic-icon" id="" data-job-title="">
                                            <i class="material-icons">volunteer_activism</i>
                                        </a> --}}
                                        {{-- <img src="src="{{ asset('jobs/').'/'.$job->file }}" class="card-img-top"  alt="{{ $job->title }}"> --}}
                                        <img src="{{asset('jobs/').'/'.$job->file}}" class="card-img-top" height="120" alt="{{ $job->title }}">
                                    </div>
                                    <div class="thumbnail-classic-caption unit-body text-center">
                                        <h6 class="thumbnail-classic-title"> {{ $job->title }} </h6>
                                        
                                        <span>
                                            <button class="btn mb-2 job_detail" data-detailId="{{ $job->id }}" id="store-manager" data-job-title="Store Manager" style="background-color: #f08113;">See More</button>
                                        </span>

                                        <span>
                                            <button class="btn apply_user" data-jobId="{{ $job->id }}" data-jobCategory="{{ $job->category }}" id="apply-now-{{ $job->id }}" style="background-color: #f08113;">Apply</button>
                                        </span>
                                        <hr class="divider divider-default divider-sm" />
                                    </div>
                                </div>
                            @endforeach

                            <!--   <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                <div class="unit-left">
                                     
                                    <a href="#" class="thumbnail-classic-icon" id="driver"
                                        data-job-title="Shift Supervisor">
                                        <i class="fas fa-car"></i>
                                    </a>
                                </div>
                                <div class="thumbnail-classic-caption unit-body text-center">
                                    <h6 class="thumbnail-classic-title">Delivery Driver</h6>
                                    <hr class="divider divider-default divider-sm" />
                                </div>
                            </div> -->
                            <!--   <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                <div class="unit-left">
                                    <a href="#" class="thumbnail-classic-icon" id="kitchen-supervisor"
                                        data-job-title="Kitchen Supervisor">
                                        {{-- <a href="#" class="thumbnail-classic-icon" data-toggle="modal" data-target="#jobModal"
                    data-job-title="Shift Supervisor"> --}}
                                        <i class="material-icons">restaurant</i>
                                    </a>
                                </div>
                                <div class="thumbnail-classic-caption unit-body text-center">
                                    <h6 class="thumbnail-classic-title">
                                        Kitchen supervisor
                                    </h6>
                                    <hr class="divider divider-default divider-sm" />
                                </div>
                            </div> -->
                            <!--    <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                <div class="unit-left">
                                    <a href="#" class="thumbnail-classic-icon" id="front-house"
                                        data-job-title="Front of House (Service)">
                                        {{-- <a href="#" class="thumbnail-classic-icon" data-toggle="modal" data-target="#jobModal"
                    data-job-title="Front of House (Service)"> --}}
                                        <i class="material-icons">face</i>
                                    </a>
                                </div>
                                <div class="thumbnail-classic-caption unit-body text-center">
                                    <h6 class="thumbnail-classic-title">
                                        Front of House (Service)
                                    </h6>
                                    <hr class="divider divider-default divider-sm" />
                                </div>
                            </div> -->
                            <!-- <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                <div class="unit-left">
                                    <a href="#" class="" id="back-house"
                                        data-job-title="Back of House kitchen">
                                         <a href="#" class="thumbnail-classic-icon" data-toggle="modal" data-target="#jobModal"
                    data-job-title="Back of House kitchen"> 
                                        <i class="fas fa-mug-hot"></i>
                                    </a>
                                </div>
                                <div class="thumbnail-classic-caption unit-body text-center">
                                    <h6 class="thumbnail-classic-title">
                                        Back of House kitchen
                                    </h6>
                                    <hr class="divider divider-default divider-sm" />
                                </div>
                            </div> -->
                            <!--     <div class="thumbnail-classic unit flex-column col-xs-12 col">
                                <div class="unit-left">
                                    <a href="#" class="thumbnail-classic-icon" id="apprentice">
                                        {{-- <a href="https://remit.co.uk/why-become-an-apprentice/" class="thumbnail-classic-icon" target="_blank"> --}}
                                        <i class="material-icons">person</i>
                                    </a>
                                </div>
                                <div class="thumbnail-classic-caption unit-body text-center">
                                    <h6 class="thumbnail-classic-title">
                                        Salva’s Apprenticeships
                                    </h6>
                                    <hr class="divider divider-default divider-sm" />
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                {{--
                <p class="job-info">
                    Do you have what it takes to work for one of the fastest-growing restaurant brands. The opportunity is here. Salva Fast Kebab is changing the perception of the kebab world. Kebabs Done Right. With industry-leading levels
                    of service, exceptional food and an unforgettable experience for our guests.
                </p>
                --}}
                <p class="job-info">
                    At Salva Fast Food, we’re proud to employ great people who are passionate about their jobs. But they’re all different. Some want to improve their prospects. Others want a job that fits round their family life. And some
                    just want to earn a bit of extra cash working with good, friendly people at a place where they can grow.&nbsp;Everyone who works here wants and needs different things.&nbsp;And no matter who you are, what you need and
                    where you’re going, Salva Fast Food can be a part of it.
                </p>
                <p class="job-info">Now is the time to join our team.</p>
                <p class="job-info">
                    We require Team members who have what it takes to grow with us and share in our success.
                </p>
                <p class="job-info">
                    You will support the restaurant management team and be expected to deliver exceptional food quality and guest care and service.
                </p>
                <p class="job-info">
                    You will work to brand standards, within a team, and ensure every guest leaves the restaurant having had a great experience.
                </p>
            </div>
        </div>
    </section>
    {{--
    <section class="section text-center novi-bg-img p-0">
        <div class="container-fluid row-50 p-0 m-0">
            <!-- Isotope Content-->
            <div class="isotope" data-isotope-layout="masonry">
                <div class="row row-condensed row-no-gutter">
                    <div class="col-12 col-md-6 col-lg-7 isotope-item">
                        <a class="gallery-item gallery-item-fullwidth" href="#" data-toggle="modal" data-target="#jobModal" data-job-title="Store Manager">
                            <div class="gallery-item-image">
                                <figure>
                                    <img src="{{ asset('images/cheff-img1.jpg') }}" alt="" class="img-fluid" />
                                </figure>
                                <div class="caption">
                                    <p class="caption-title">Store Manager</p>
                                    <p class="caption-text"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 isotope-item">
                        <a class="gallery-item gallery-item-fullwidth" href="#" data-toggle="modal" data-target="#jobModal" data-job-title="Kitchen Supervisor">
                            <div class="gallery-item-image">
                                <figure>
                                    <img src="{{ asset('images/cheff-img2.jpg') }}" alt="" class="img-fluid" />
                                </figure>
                                <div class="caption">
                                    <p class="caption-title">Kitchen Supervisor</p>
                                    <p class="caption-text"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5 isotope-item">
                        <a class="gallery-item gallery-item-fullwidth" href="#" data-toggle="modal" data-target="#jobModal" data-job-title="Shift Supervisor">
                            <div class="gallery-item-image">
                                <figure>
                                    <img src="{{ asset('images/cheff-img3.jpg') }}" alt="" class="img-fluid" />
                                </figure>
                                <div class="caption">
                                    <p class="caption-title">Shift Supervisor</p>
                                    <p class="caption-text"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7 isotope-item">
                        <a class="gallery-item gallery-item-fullwidth" href="#" data-toggle="modal" data-target="#jobModal" data-job-title="Front of House team member">
                            <div class="gallery-item-image">
                                <figure>
                                    <img src="{{ asset('images/cheff-img4.jpg') }}" alt="" class="img-fluid" />
                                </figure>
                                <div class="caption">
                                    <p class="caption-title">Back of House kitchen</p>
                                    <p class="caption-text"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}} {{--
    <div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Career</h1>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form class="job-form" method="POST" id="job-form" action="#">
                            <div>
                                <h3>Job Details</h3>
                                <div>
                                    <h2>Job Details</h2>
                                    <div class="blog-heading">
                                        <h5>Here is what you need:</h5>
                                        <p><br /></p>
                                        <ul type="disc">
                                            <li>Operationally focused on implementing brand standards and policies</li>
                                            <li>Consistently deliver industry-leading guest service</li>
                                            <li>Experience with previous openings would be ideal but is not essential</li>
                                            <li>Ensure store operational requirements by following brand standards, scheduling and assigning employees</li>
                                            <li>Comply with all requirements of Food Safety and Health and Hygiene standards</li>
                                            <li>Maintain awareness of market trends in the hospitality industry, understanding forthcoming guest initiatives and monitoring what local competitors are doing</li>
                                            <li>Understand P&amp;L, budgets and managing payroll</li>
                                            <li>Manage stock levels and availability</li>
                                            <li>Manage all controllable costs to keep operations profitable</li>
                                            <li>Understand weekly sales information</li>
                                            <li>Maintain operations by coordinating and enforcing personnel policies and procedures in line with GDK brand standards.</li>
                                            <li>Provide excellent management guidance to your team including training, development and leadership</li>
                                            <li>Maintain a secure, safe and healthy environment for your team and your guests</li>
                                            <li>Maintain store team member loyalty by coaching, developing and disciplining employees were necessary</li>
                                            <li>Provide training to improve all team members and utilise cross-training methods to maintain productivity and create an environment where your team can grow their knowledge</li>
                                            <li>Update colleagues on business performance, new initiatives and any issues that will enhance performance</li>
                                            <li>The guest first in everything we do</li>
                                            <li>Understand your guest and respond to guest complaints and comments</li>
                                            <li>Identify current and future guest requirements by establishing rapport with potential and actual guests and training others in a position to understand service requirements</li>
                                            <li>The guest first in everything we do</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Job Apply</h3>
                                <div>
                                    <h2>Job Apply</h2>
                                    <div>
                                        <div class="container-fluid apply-job">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="text" class="input-field" placeholder="Your Name *" name="fullname" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="email" class="input-field" placeholder="Your Email *" name="email" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="email" class="input-field" placeholder="Repeat Email *" name="re-email" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap">
                                                        <select name="store" id="store" class="input-field">
                                                            <option value="">Select Store</option>
                                                            <option value="Burnley">Burnley</option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap">
                                                        <select name="position" id="position" class="input-field">
                                                            <option value="">Please Select</option>
                                                            <option value="Store Manager">
                                                                Store Manager
                                                            </option>
                                                            <option value="Shift supervisor ">
                                                                Shift supervisor
                                                            </option>
                                                            <option value="Kitchen supervisor ">
                                                                Kitchen supervisor
                                                            </option>
                                                            <option value="Front of House (Service)">
                                                                Front of House (Service)
                                                            </option>
                                                            <option value="Back of House kitchen">
                                                                Back of House kitchen
                                                            </option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap">
                                                        <select name="time" id="time" class="input-field">
                                                            <option value="">Full/Part Time</option>
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Part Time">Part Time</option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <label for="">Would you like to upload your CV now?</label>
                                                    <div class="radio-boxes">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                                                            <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                                                            <label class="form-check-label" for="inlineRadio2">No, i'll upload later </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cvUploadDiv">
                                                    <h3>Upload your CV in Word or PDF format</h3>
                                                    <div class="f-upload-container d-flex">
                                                        <span id="filename">Select your file</span>
                                                        <label for="file-upload">
                                                            Browse
                                                            <input
                                                                type="file"
                                                                id="file-upload"
                                                                name="resume"
                                                                accept=".doc,.docx,.pdf,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                                            />
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <textarea placeholder="Tell us about yourself and any work experience you’ve had previously *" class="input-field" name="content" required=""></textarea>
                                                        <div class="focus"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="modal fade" id="jobModal" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header mx-3">
                    <h1>Career</h1>
                    <i class="material-icons dp48 close-modal" style="color: #887878; cursor: pointer;">clear</i>
                </div>
                <div class="modal-body">
                    <div class="container mb-5">
                        <div class="mx-5">
                            <h2 style="font-size: 30px; margin-bottom: 2rem; color: #000; font-family: 'Fira Sans', sans-serif;">
                                Job Details
                            </h2>
                            <div class="blog-heading" id="content" style="color: #000">
                                {{--
                                <h5 style="font-weight: 700; font-size: 1.4rem; color: #636363;">Here is what you need:</h5>
                                <p style="font-size: 1.5rem; color: #887878; font-weight: 400; line-height: 1.55;">
                                    We are looking for a reliable delivery driver who is concerned with customer satisfaction and delivering food in a safe, timely manner. The delivery driver will pick up and drop off food to customers
                                    while adhering to assigned routes and time schedules. You should be willing to work as a delivery driver to ensure customers receive their food in time.<br />
                                </p>
                                <h5 style="font-weight: 700; font-size: 1.4rem; color: #636363;">Responsibilities:</h5>
                                <ul id="job-list" type="disc">
                                    <li>Operationally focused on implementing brand standards and policies</li>
                                    <li>Consistently deliver industry-leading guest service</li>
                                    <li>Experience with previous openings would be ideal but is not essential</li>
                                    <li>Ensure store operational requirements by following brand standards, scheduling and assigning employees</li>
                                    <li>Comply with all requirements of Food Safety and Health and Hygiene standards</li>
                                    <li>Maintain awareness of market trends in the hospitality industry, understanding forthcoming guest initiatives and monitoring what local competitors are doing</li>
                                    <li>Understand P&amp;L, budgets and managing payroll</li>
                                    <li>Manage stock levels and availability</li>
                                    <li>Manage all controllable costs to keep operations profitable</li>
                                    <li>Understand weekly sales information</li>
                                    <li>Maintain operations by coordinating and enforcing personnel policies and procedures in line with GDK brand standards.</li>
                                    <li>Provide excellent management guidance to your team including training, development and leadership</li>
                                    <li>Maintain a secure, safe and healthy environment for your team and your guests</li>
                                    <li>Maintain store team member loyalty by coaching, developing and disciplining employees were necessary</li>
                                    <li>Provide training to improve all team members and utilise cross-training methods to maintain productivity and create an environment where your team can grow their knowledge</li>
                                    <li>Update colleagues on business performance, new initiatives and any issues that will enhance performance</li>
                                    <li>The guest first in everything we do</li>
                                    <li>Understand your guest and respond to guest complaints and comments</li>
                                    <li>Identify current and future guest requirements by establishing rapport with potential and actual guests and training others in a position to understand service requirements</li>
                                    <li>The guest first in everything we do</li>
                                </ul>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jobApplyModal" tabindex="-1" role="dialog" aria-labelledby="jobApplyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header mx-1" style="padding: 2rem 3.5rem; border: none;">
                    <h1 style="padding-bottom: 0.5rem; border-bottom: 0.5rem solid #ffa600; color: #000;">Career</h1>
                    <i class="material-icons dp48 close-modal" style="color: #887878; cursor: pointer;">clear</i>
                </div>
                <div class="modal-body px-5">
                    <div class="container">
                        <form class="job-form needs-validation" enctype="multipart/form-data" method="POST" id="job-form" action="{{ route('career') }}" novalidate>
                            @csrf {{--
                            <div>
                                <h3>Job Details</h3>
                                <div>
                                    <h2>Job Details</h2>
                                    <div class="blog-heading">
                                        <h5>Here is what you need:</h5>
                                        <p><br /></p>
                                        <ul type="disc">
                                            <li>Operationally focused on implementing brand standards and policies</li>
                                            <li>Consistently deliver industry-leading guest service</li>
                                            <li>Experience with previous openings would be ideal but is not essential</li>
                                            <li>Ensure store operational requirements by following brand standards, scheduling and assigning employees</li>
                                            <li>Comply with all requirements of Food Safety and Health and Hygiene standards</li>
                                            <li>Maintain awareness of market trends in the hospitality industry, understanding forthcoming guest initiatives and monitoring what local competitors are doing</li>
                                            <li>Understand P&amp;L, budgets and managing payroll</li>
                                            <li>Manage stock levels and availability</li>
                                            <li>Manage all controllable costs to keep operations profitable</li>
                                            <li>Understand weekly sales information</li>
                                            <li>Maintain operations by coordinating and enforcing personnel policies and procedures in line with GDK brand standards.</li>
                                            <li>Provide excellent management guidance to your team including training, development and leadership</li>
                                            <li>Maintain a secure, safe and healthy environment for your team and your guests</li>
                                            <li>Maintain store team member loyalty by coaching, developing and disciplining employees were necessary</li>
                                            <li>Provide training to improve all team members and utilise cross-training methods to maintain productivity and create an environment where your team can grow their knowledge</li>
                                            <li>Update colleagues on business performance, new initiatives and any issues that will enhance performance</li>
                                            <li>The guest first in everything we do</li>
                                            <li>Understand your guest and respond to guest complaints and comments</li>
                                            <li>Identify current and future guest requirements by establishing rapport with potential and actual guests and training others in a position to understand service requirements</li>
                                            <li>The guest first in everything we do</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Job Apply</h3>
                                <div>
                                    --}}
                                    <h2 style="font-size: 30px; margin-bottom: 2rem; color: #000; font-family: 'Fira Sans', sans-serif;">
                                        Job Apply
                                    </h2>
                                    <div>
                                        <div class="container-fluid apply-job">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="text" class="input-field" placeholder="Your Name *" name="fullname" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="text" class="input-field" placeholder="Your Phone *" name="phone" required="" />
                                                        <input type="hidden" class="input-field" placeholder="Your Phone *" id="applied_job_id" name="job_id" required="" />
                                                        <input type="hidden" class="input-field" placeholder="Your Phone *" id="job_category" name="category" required="" />
                                                        
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="email" class="input-field" placeholder="Your Email *" name="email" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="input-field-wrap">
                                                        <input type="email" class="input-field" placeholder="Repeat Email *" name="re-email" required="" />
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap" id="store-div">
                                                        <select name="store" id="store" class="input-field">
                                                            <option value="">Select Store *</option>
                                                            <option value="Burnley">Burnley</option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                    <div class="invalid-feedback d-block d-none" style="margin-bottom: 2rem !important;" id="store-error">Please select an item in the list.</div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap" id="position-div">
                                                        <select name="position" id="position" class="input-field">
                                                            <option value="">Please Select *</option>
                                                            <option value="Store Manager">
                                                                Store Manager
                                                            </option>
                                                            <option value="Delivery Driver">
                                                                Delivery Driver
                                                            </option>
                                                            <option value="Kitchen supervisor ">
                                                                Kitchen supervisor
                                                            </option>
                                                            <option value="Front of House (Service)">
                                                                Front of House (Service)
                                                            </option>
                                                            <option value="Back of House kitchen">
                                                                Back of House kitchen
                                                            </option>
                                                            <option value="Salva’s Apprenticeships">
                                                                Salva’s Apprenticeships
                                                            </option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                    <div class="invalid-feedback d-block d-none" style="margin-bottom: 2rem !important;" id="position-error">Please select an item in the list.</div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <div class="form-select input-field-wrap" id="time-div">
                                                        <select name="time" id="time" class="input-field">
                                                            <option value="">Full/Part Time *</option>
                                                            <option value="Full Time">Full Time</option>
                                                            <option value="Part Time">Part Time</option>
                                                        </select>
                                                        <div class="focus"></div>
                                                    </div>
                                                    <div class="empty-sm-20 empty-xs-20"></div>
                                                    <div class="invalid-feedback d-block d-none" style="margin-bottom: 2rem !important;" id="time-error">Please select an item in the list.</div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <label for="">Would you like to upload your CV now?</label>
                                                    <div class="radio-boxes">
                                                        {{--
                                                        <div class="form-check form-check-inline">
                                                            --}}
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" required style="font-size: 12px;" />
                                                            <label class="form-check-label" for="inlineRadio1" style="margin-left: 6px; margin-right: 6px; font-size: 14px; color: #464646;">Yes</label>
                                                            {{--
                                                        </div>
                                                        --}} {{--
                                                        <div class="form-check form-check-inline">
                                                            --}}
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" required style="font-size: 12px;" />
                                                            <label class="form-check-label" for="inlineRadio2" style="margin-left: 6px; margin-right: 6px; font-size: 14px; color: #464646;">No, i'll upload later </label>
                                                            {{--
                                                        </div>
                                                        --}}
                                                    </div>
                                                </div>
                                                <div id="cvUploadDiv" class="d-none">
                                                    <h3>Upload your CV in Word or PDF format</h3>
                                                    <div class="f-upload-container d-flex">
                                                        <span id="filename">Select your file</span>
                                                        <label for="file-upload">
                                                            Browse
                                                            <input
                                                                type="file"
                                                                id="file-upload"
                                                                name="resume"
                                                                accept=".doc,.docx,.pdf,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                                            />
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 mt-3">
                                                    <div class="input-field-wrap">
                                                        <textarea placeholder="Tell us about yourself and any work experience you’ve had previously *" class="input-field" name="content" required=""></textarea>
                                                        <div class="focus"></div>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback d-none d-block" id="image-error">Please select a file.</div>

                                                <div class="g-recaptcha mt-3" data-sitekey="{{ config('app.google_recaptcha_site_key') }}"></div>
                                                <div class="invalid-feedback d-none d-block" id="captcha-error">Please verify you are not a robot.</div>
                                                <div class="mt-5 d-flex justify-content-center">
                                                    <button class="btn" id="submit" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--
                                </div>
                            </div>
                            --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    {{-- @if (Session::has('message'))
    <script type="text/javascript">
        toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
    </script>
    @endif --}}
    <script src="{{ asset('js/jbvalidator.js') }}"></script>
    <script>
        $(".apply_user").on("click", function () {

            let job_id = $(this).attr("data-jobId");
            let job_category = $(this).attr("data-jobCategory");

            $("#applied_job_id").val(job_id);
            $("#job_category").val(job_category);

            $("#jobApplyModal").modal("show");

            $(".apply_clicked").on("click", function () {

                $.ajax({
                /* the route pointing to the post function */
                    url: '/job-applied',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        "_token": "{{ csrf_token() }}",
                        job_id: job_id
                    },
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        console.log('yes it workekd');
                        // $(".writeinfo").append(data.msg); 
                    }
                });

            });
        });

        $(".close-modal").on("click", function () {
            $("#jobModal").modal("hide");
            $("#jobApplyModal").modal("hide");
        });

        $(".job_detail").on("click", function () {

            let job_id = $(this).attr("data-detailId")

            $.ajax({
                /* the route pointing to the post function */
                url: '/get-job-detail',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    "_token": "{{ csrf_token() }}",
                    job_id: job_id
                },
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (data) { 
                    // console.log('yes it workekd');
                    // $(".writeinfo").append(data.msg); 
                    $("#content").html(data.description);
                    $("#jobModal").modal("show");
                }
            });

    //         $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
    //   <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;"><br /></p>
    //   <ul id="job-list" type="disc">
    //     <li>Operationally focused on implementing brand standards and policies</li>
    //     <li>Consistently deliver industry-leading guest service</li>
    //     <li>Experience with previous openings would be ideal but is not essential</li>
    //     <li>Ensure store operational requirements by following brand standards, scheduling and assigning
    //       employees</li>
    //     <li>Comply with all requirements of Food Safety and Health and Hygiene standards</li>
    //     <li>Maintain awareness of market trends in the hospitality industry, understanding forthcoming
    //       guest initiatives and monitoring what local
    //       competitors are doing</li>
    //     <li>Understand P&amp;L, budgets and managing payroll</li>
    //     <li>Manage stock levels and availability</li>
    //     <li>Manage all controllable costs to keep operations profitable</li>
    //     <li>Understand weekly sales information</li>
    //     <li>Maintain operations by coordinating and enforcing personnel policies and procedures in line
    //       with GDK brand standards.</li>
    //     <li>Provide excellent management guidance to your team including training, development and
    //       leadership</li>
    //     <li>Maintain a secure, safe and healthy environment for your team and your guests</li>
    //     <li>Maintain store team member loyalty by coaching, developing and disciplining employees were
    //       necessary</li>
    //     <li>Provide training to improve all team members and utilise cross-training methods to maintain
    //       productivity and create an environment where your
    //       team can grow their knowledge</li>
    //     <li>Update colleagues on business performance, new initiatives and any issues that will enhance
    //       performance</li>
    //     <li>The guest first in everything we do</li>
    //     <li>Understand your guest and respond to guest complaints and comments</li>
    //     <li>Identify current and future guest requirements by establishing rapport with potential and
    //       actual guests and training others in a position to
    //       understand service requirements</li>
    //     <li>The guest first in everything we do</li>
    //   </ul>`);

            // $("#jobModal").modal("show");
        });
        $("#driver").on("click", function () {
            $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
      <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;">We are looking for a reliable delivery driver who is concerned with customer satisfaction and delivering food in a safe, timely manner. The delivery driver will pick up and drop off food to customers while adhering to assigned routes and time schedules. You should be willing to work as a delivery driver to ensure customers receive their food in time.<br /></p>
      <h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Responsibilities:</h5>
      <ul id="job-list" type="disc">
        <li>Delivering orders safely to customers</li>
        <li>Accepting payments for delivered food</li>
        <li>Adhering to assigned routes and following time schedules</li>
        <li>Abiding by all transportation laws and maintaining a safe driving record</li>
      </ul>
      <h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Requirements:</h5>
      <ul id="job-list" type="disc">
        <li>Valid driver's license issued by the state where you intend to work</li>
        <li>Clean driving record</li>
        <li>Experience may be preferred</li>
        <li>Willingness to adhere to assigned routes, schedules, safety procedures, and transportation laws</li>
        <li>Strong time management and customer service skills</li>
      </ul>`);
            $("#jobModal").modal("show");
        });
        $("#kitchen-supervisor").on("click", function () {
            $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
      <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;">As kitchen supervisor, you’ll be leading a small army of kitchen porters and overseeing the day to day running of the kitchen, including cleaning the equipment, checking supplies and rotating food stock. You’ll be in demand in restaurants, hotels, pubs and the catering departments of schools, hospitals and ships. Note that part of the day may be spent working in an office, ordering supplies and so on.<br /></p>
      <h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Responsibilities:</h5>
      <ul id="job-list" type="disc">
        <li>Managing the kitchen porters</li>
        <li>Making sure the kitchen is a safe and hygienic place to work</li>
        <li>Organising the inventory, storage, and distribution of foodstuffs and supplies</li>
        <li>Helping to plan menus, apportion ingredients and use food surpluses</li>
        <li>Control portion costs by working out the number of portions per food batch</li>
        <li>In some jobs you will be required to cook</li>
      </ul>`);
            $("#jobModal").modal("show");
        });
        $("#front-house").on("click", function () {
            $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
      <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;"><br /></p>
      <ul id="job-list" type="disc">
        <li>Supervising a team of eight front of house staff including waiters, commis, head waiters and sommeliers</li>
        <li>Scheduling work rosters for the front of house team, ensuring the correct level of staffing is achieved on each shift</li>
        <li>Monitoring staff performance and giving feedback where necessary</li>
        <li>Hiring and training new employees so they meet high quality standards</li>
        <li>Greeting all guests warmly on arrival and escorting them to their table</li>
        <li>Managing walk-in, online and telephone reservations</li>
        <li>Responding quickly and sympathetically to any customer concerns</li>
        <li>Adhering to all health and safety requirements, including food hygiene regulations</li>
        <li>Supporting colleagues and staff during busy periods, including taking orders, serving meals and clearing tables</li>
        <li>Liaising with the kitchen staff to ensure an efficient and seamless service</li>
      </ul>`);
            $("#jobModal").modal("show");
        });
        $("#back-house").on("click", function () {
            $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
      <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;"><br /></p>
      <ul id="job-list" type="disc">
        <li>Assisting in the smooth, safe running of the kitchen operation</li>
        <li>Keeping the kitchen, serving areas and outside refuse area to a high standard of cleanliness</li>
        <li>Continually striving towards achievement and improvement</li>
        <li>Creating and ensuring the completion of cleaning rosters</li>
        <li>Preparing the weekly chemical and cleaning materials </li>
        <li>Producing a weekly draft rota</li>
        <li>Ensuring the Executive/Head chefs are kept aware of any relevant feedback from either the hotel guests or hotel staff</li>
        <li>Reporting any faults that may occur</li>
        <li>Day to day supervision of the Kitchen Porter team</li>
        <li>Working in a clean and tidy fashion ensuring that wastage is kept to a minimum</li>
        <li>Being aware and have an understanding of all relevant law and legislation with regards to food handling, storage, hygiene and health and safety</li>
      </ul>`);
            $("#jobModal").modal("show");
        });
        $("#apprentice").on("click", function () {
            $("#content").html(`<h5 style='font-weight: 700; font-size: 1.4rem; color: #636363;'>Here is what you need:</h5>
      <p style="font-size: 1.5rem; color: #636363; font-weight: 400; line-height: 1.55;"><br /></p>
      <ul id="job-list" type="disc">
        <li>Greeting customers on arrival giving a warm & friendly welcome</li>
        <li>Taking orders/payments</li>
        <li>Preparing a range of hot & cold food and drinks</li>
        <li>Using High Powered ovens to prepare and cook food</li>
        <li>Ensuring both front & back of house areas are kept clean/tidy, welcoming & maintained to food safety standards</li>
        <li>Opportunities to demonstrate and show customers the art of preparing and cooking the various dishes</li>
        <li>Serving customer in a warm & friendly manner</li>
        <li>Gain a good knowledge of all products served & make. recommendations to customers to promote the business</li>
      </ul>`);
            $("#jobModal").modal("show");
        });
        let isImageRequired = false;
        $("input[name='inlineRadioOptions']").change(function () {
            if ($(this).val() == "yes") {
                $("#cvUploadDiv").removeClass("d-none");
                isImageRequired = true;
                // $('#file-upload').attr('required', 'required');
            } else {
                $("#cvUploadDiv").addClass("d-none");
                $("#image-error").addClass("d-none");
                isImageRequired = false;
                // $('#file-upload').removeAttr('required');
            }
        });
        $(document).ready(function () {
            $(function () {
                let validator = $("form.needs-validation").jbvalidator({
                    language: "", //json file url
                    errorMessage: true,
                    successClass: true,
                    html5BrowserDefault: false,
                    validFeedBackClass: "valid-feedback",
                    invalidFeedBackClass: "invalid-feedback",
                    validClass: "is-valid",
                    invalidClass: "is-invalid",
                });

                //custom validate method
                validator.validator.custom = function (el, event) {
                    if ($(el).is("[name=re-email]") && $(el).val() !== $("input[name=email]").val()) {
                        return "Please enter the same email.";
                    }
                    if ($(el).is("[name=resume]") && isImageRequired) {
                        if ($("#file-upload").val() == "") {
                            $("#image-error").removeClass("d-none");
                        } else {
                            $("#image-error").addClass("d-none");
                        }
                    }
                    if ($(el).is("[name=store]")) {
                        if ($(el).val() == "") {
                            $("#store-error").removeClass("d-none");
                            $("#store-div").css("margin-bottom", "0");
                        } else {
                            $("#store-error").addClass("d-none");
                            $("#store-div").css("margin-bottom", "2rem");
                        }
                    }
                    if ($(el).is("[name=position]")) {
                        if ($(el).val() == "") {
                            $("#position-error").removeClass("d-none");
                            $("#position-div").css("margin-bottom", "0");
                        } else {
                            $("#position-error").addClass("d-none");
                            $("#position-div").css("margin-bottom", "2rem");
                        }
                    }
                    if ($(el).is("[name=time]")) {
                        if ($(el).val() == "") {
                            $("#time-error").removeClass("d-none");
                            $("#time-div").css("margin-bottom", "0");
                        } else {
                            $("#time-error").addClass("d-none");
                            $("#time-div").css("margin-bottom", "2rem");
                        }
                    }
                    if ($(el).is("[name=g-recaptcha-response]") && $(el).val() == "") {
                        $("#captcha-error").removeClass("d-none");
                    }
                };
            });
            // $('#submit').on('click', function (e) {
            //   if ($('#file-upload').val() == '' && isImageRequired) {
            //    $('#image-error').removeClass('d-none');
            //    e.preventDefault();
            //    return;
            //   }else {
            //     $('#image-error').addClass('d-none');
            //   }
            // });
        });
    </script>
    @endsection
</x-app-layout>
