</body>

</html>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{url('/')}}/js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="{{url('/')}}/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{url('/')}}/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>

<script src="{{url('/')}}/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="{{url('/')}}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="{{url('/')}}/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="{{url('/')}}/vendors/counterup/waypoints.min.js"></script>
<script src="{{url('/')}}/vendors/counterup/jquery.counterup.min.js"></script>
<script src="{{url('/')}}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{url('/')}}/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="{{url('/')}}/vendors/bootstrap-selector/bootstrap-select.js"></script>
<!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->
<script src="{{url('/')}}/vendors/lightbox/simpleLightbox.min.js"></script>

<!-- instafeed-->
<script type="text/javascript" src="{{url('/')}}/vendors/instafeed/instafeed.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/vendors/instafeed/script.js"></script>


{{-- select2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- Date Range Picker --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="{{url('/')}}/js/theme.js"></script>

{{-- Sweet Alert 2 --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Jquery Validation --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

{{-- lightbox 2 js load --}}
<script type="text/javascript" src="/js/light_box/js/lightbox.min.js"></script>



<script>
    $(document).ready(function() {


        $(window).on('resize load pagebeforecreate', function() {
            if ($(window).width() < 992) {
                $(".dropdown-toggle").attr("data-toggle", "dropdown");
            }



        });

        $(window).on('resize load pagebeforecreate', function() {
            if ($(window).width() >= 992) {
                $(".dropdown-toggle").removeAttr("data-toggle");
            }


        });

        $(".anchor_link").click(function() {
            $("button.navbar-toggle").trigger('click');
        });
    })
</script>


@stack('page_js')
