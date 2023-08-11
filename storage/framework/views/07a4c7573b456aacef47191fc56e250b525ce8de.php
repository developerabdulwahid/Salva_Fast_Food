<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.8.0/simple-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="<?php echo e(asset('js/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/common.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/menus.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/job.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    function format(item, state) {
        if (!item.id) {
            return item.text;
        }
        var countryUrl = "/images/flags/";
        var stateUrl = "https://oxguy3.github.io/flags/svg/us/";
        var url = state ? stateUrl : countryUrl;
        var img = $("<img>", {
            class: "img-flag",
            width: 26,
            src: url + item.element.value.toLowerCase() + ".gif"
        });
        var span = $("<span>", {
            text: " " + item.text
        });
        span.prepend(img);
        return span;
    }




    // var poppy = localStorage.getItem('myPopup');
    //
    // if(!poppy){
    //     function PopUp(){
    //         $('.home-popup').fadeIn(500);
    //     }
    //
    //
    //     setTimeout(showPopup, 10000);
    //     function showPopup(){
    //         $("#popup1").addClass('active');
    //     }
    //
    //
    //     localStorage.setItem('myPopup','true');
    // }





    $(document).ready(function() {
        var cookieStor = localStorage.getItem('cookie');

        if(cookieStor=='true'){
            $(".custom-bar").hide();
        }
        else{
            $(".custom-bar").show();
        }
        $("#countries").select2({
            minimumResultsForSearch: -1,
            templateResult: function(item) {
                return format(item, false);
            },  templateSelection: function(item) {
                return format(item, false);
            },


        });
        $("#popup1 .close").click(function (){
            $("#popup1").removeClass('active');

        });
        $(".sb-loading").animate({
            opacity: 1
        }, {
            duration: 500,
        });
        setTimeout(function() {
            $('.sb-preloader-number').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                });
            });
            $(".sb-bar").animate({
                height: '100%'
            }, {
                duration: 1000,
                complete: function() {

                    $(".sb-preloader").addClass('sb-hidden')
                }
            });
        }, 400);


    });


    toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "30000",
  "hideDuration": "10000",
  "timeOut": "12000",
  "extendedTimeOut": "10000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
</script><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/layouts/script.blade.php ENDPATH**/ ?>