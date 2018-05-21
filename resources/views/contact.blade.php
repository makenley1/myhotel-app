@extends ('layouts/app')

@section('style')
  <link rel="stylesheet" type="text/css" href="css/contact.css">
@endsection

@section('content')

  <!-- banner -->
<div class="banner_top innerpage" id="home"></div>

  <!-- //banner -->
  <!-- top Products -->
  <div class="ads-grid_shop">
    <div class="shop_inner_inf">
      <h3 class="head">Contact Us</h3>
      <p class="head_para">Add Some Description</p>
      <div class="inner_section_w3ls">
        <div class="col-md-7 contact_grid_right">
          <h6>Please fill this form to contact with us.</h6>
          <form action="#" method="post">
            <div class="col-md-6 col-sm-6 contact_left_grid">
              <input type="text" name="Name" placeholder="Name" required="">
              <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="col-md-6 col-sm-6 contact_left_grid">
              <input type="text" name="Telephone" placeholder="Telephone" required="">
              <input type="text" name="Subject" placeholder="Subject" required="">
            </div>
            <div class="clearfix"> </div>
            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
          </form>
        </div>
        <div class="col-md-5 contact-left">
          <h6>Contact Info</h6>
          <div class="visit">
            <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
              <span class="fa fa-home" aria-hidden="true"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
              <h4>Visit us</h4>
              <p>Parma Via Modena,BO, Italy</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="mail-us">
            <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
              <span class="fa fa-envelope" aria-hidden="true"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
              <h4>Mail us</h4>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="call">
            <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
              <span class="fa fa-phone" aria-hidden="true"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
              <h4>Call us</h4>
              <p>+18044261149</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="visit">
            <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
              <span class="fa fa-fax" aria-hidden="true"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
              <h4>Fax</h4>
              <p>+1804426349</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"> </div>

      </div>

      <div class="clearfix"></div>

    </div>
  </div>
  <div class="contact-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
        class="map" style="border:0" allowfullscreen=""></iframe>
  </div>  

  <!-- js -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <!-- //js -->
  <!-- cart-js -->
  <script src="js/minicart.js"></script>
  <script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
      var items, len, i;

      if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {}
      }
    });
  </script>
  <!-- //cart-js -->
  <!-- /nav -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/classie.js"></script>
<!--  -->
  <!-- //nav -->
  <!-- script for responsive tabs -->
  <script src="js/easy-responsive-tabs.js"></script>
  <script>
    $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function (event) { // Callback function if tab is switched
          var $tab = $(this);
          var $info = $('#tabInfo');
          var $name = $('span', $info);
          $name.text($tab.text());
          $info.show();
        }
      });
      $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
      });
    });
  </script>
  <!--search-bar-->
  <script src="js/search.js"></script>
  <!--//search-bar-->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- //end-smoth-scrolling -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
@stop

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
@endsection
