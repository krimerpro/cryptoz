    <!-- Footer section start -->
    <footer>
      <div class="container">
        <div class="footer-bottom">
          <div class="row">
            <div class="col-md-8">
              <p class="mb-0">© Cryptoz all Rights Reserved theme by <a href="#" target="_blank" title="TemplatesCoder">Cryptoz Team</a></p>
            </div>
            <div class="col-md-4">
              <div class="social-media">
                  <ul>
                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->
</div>

<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/viewportchecker.js') }}"></script>
<script src="{{ asset('js/snap.svg-min.js') }}"></script>
<script src="{{ asset('js/jquery.listtopie.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
$(function() {
  setTimeout (function(){
        jQuery('.fadeInUp,.fadeInRight,.slideInRight,.fadeInLeft,.fadeInLeftBig,.fadeInDown,.zoomIn,.fadeInDownBig,.fadeInUpBig,.fadeInUpMedium').addClass("invisible").
        viewportChecker({
          classToAdd: 'visible animated',
          offset: 50
        });
      },500);
})
</script>

<script>
  $(window).on('scroll', function(){
  var scrollDistance = $(window).scrollTop() +96;

  // Assign active class to nav links while scolling
  $('.menu-section').each(function(i) {
    if ($(this).position().top <= scrollDistance) {
      $('.navbar-nav a.page-scroll.active').removeClass('active');
      $('.navbar-nav a.page-scroll').eq(i).addClass('active');
    }
  });
}).scroll();
</script>
