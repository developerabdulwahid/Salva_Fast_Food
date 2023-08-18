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
            @endif  

            @if (Session::has('error'))
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
                    toastr.error('{{ Session::get('error') }} ' );
                })
            </script>
            @endif  
            {{--
            <div class="content-text" style="padding: 5rem; background-color: #000;">
                <p style="max-width: 85rem; margin: auto; font-size: 1.6rem; text-align: center; line-height: 3.2rem; color: #fff;">
                    At Salva Fast Food, we’re proud to employ great people who are passionate about their jobs. But they’re all different. Some want to improve their prospects. Others want a job that fits round their family life. And some
                    just want to earn a bit of extra cash working with good, friendly people at a place where they can grow.&nbsp;Everyone who works here wants and needs different things.&nbsp;And no matter who you are, what you need and
                    where you’re going, Salva Fast Food can be a part of it.
                </p>
            </div>
            --}}
            <div class="container career">
              <h1 class="mt-3">Our Jobs</h1>

              <h4 class="mt-5">Keywords</h4>
              <input type="text" class="form-control" placeholder="e.g. Chef" name="search" id="search">
            </div>
            <button type="submit" class="btn btn-warning job-search mt-3" style="margin-left: 85.5%; border-radius: 20px;">Search</button>

            
            <div class="container">

                @foreach ($jobs as $job)

                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            
                            <h1 class="card-title" style="color: #000"> {{ $job->title }} </h1>
                            
                            <div class="col-md-12 row">

                                <div class="col-md-8">
                                    <h4 class="card-text" style="color: black; ">{!! Str::words($job->description, 100, ' ...') !!}</h4>
                                </div>


                                <div class="col-md-4">
                                    <img src="{{asset('jobs/').'/'.$job->file}}" class="card-img-top" width="150px" height="120px" alt="{{ $job->title }}" />
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
                @endforeach

            </div>
        </div>
    </section>
    
    
    
    @section('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="{{ asset('js/jbvalidator.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".fav").on("click", function() {
                var $this = $(this);
                $this.toggleClass("off");
            });
        });
    </script>
    @endsection
</x-app-layout>
