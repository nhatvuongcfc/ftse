{{-- pos-fixed bottom-0 w-90 --}}
{{-- <footer class=" " style="background-color: red">
    nhatvuong
    {{-- <div class="footer-copy right text-center py-3">
        © 2020 Copyright:
        <a style="margin: 0 -40px;" class="navbar-brand" href="./"><img src="{{ asset('image/user/logo-text.png') }}" alt="Logo"></a>
    </div> --}}
  {{-- </footer> --}} 
  
  {{--  <footer >
      <div id="layout_footer">

      
    <section id="footer-bottom" style="background-color: #fff">
            <div class="row">
                <p class="content" style="padding: 0; color:#000">© 2020 Copyright:
                    <a  href="./"><img style="max-width:14%" src="{{ asset('image/user/logo-text.png') }}" alt="Logo"></a>

                </p>

            </div>
    </section>
</div>
</footer>
</div>  --}}

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('js/admin/main.js') }}"></script>

<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<!--Chartist Chart-->
<script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

{{--  <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>  --}}
{{--  <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>  --}}
{{--  <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>  --}}

<script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
{{-- <script src="{{ asset('js/init/weather-init.js') }}"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script> --}}
<script type="text/javascript" src="https://www.anhngumshoa.com/theme/frontend/default/js/jquery.countdown.min.js"></script>

<script src="{{ asset('js/init/fullcalendar-init.js') }}"></script>
<script src="{{ asset('js/slug.js') }}"></script>
@yield('js')
</body>
</html>
