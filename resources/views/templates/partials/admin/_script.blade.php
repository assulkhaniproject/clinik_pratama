<script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{asset('admin/js/jquery.appear.js')}}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{asset('admin/js/countdown.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{asset('admin/js/waypoints.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.counterup.min.js')}}"></script>
    <!-- Wow JavaScript -->
    <script src="{{asset('admin/js/wow.min.js')}}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{asset('admin/js/apexcharts.js')}}"></script>
    <!-- Slick JavaScript -->
    <script src="{{asset('admin/js/slick.min.js')}}"></script>
    <!-- Select2 JavaScript -->
    <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{asset('admin/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{asset('admin/js/smooth-scrollbar.js')}}"></script>
    <!-- lottie JavaScript -->
    <script src="{{asset('admin/js/lottie.js')}}"></script>
    <!-- am core JavaScript -->
    <script src="{{asset('admin/js/core.js')}}"></script>
    <!-- am charts JavaScript -->
    <script src="{{asset('admin/js/charts.js')}}"></script>
    <!-- am animated JavaScript -->
    <script src="{{asset('admin/js/animated.js')}}"></script>
    <!-- am kelly JavaScript -->
    <script src="{{asset('admin/js/kelly.js')}}"></script>
    <!-- Flatpicker Js -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{asset('admin/js/chart-custom.js')}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{asset('admin/js/custom.js')}}"></script>
    @yield('script')
    @yield('othscript')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
</script>