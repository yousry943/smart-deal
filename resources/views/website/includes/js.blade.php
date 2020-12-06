





 <!-- <script type="text/javascript" src="js/jquery-1.12.4.js"></script> -->




 <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/bootsnav.js"></script> -->
 <!-- <script type="text/javascript" src="js/parallax.js"></script> -->
 <!-- <script type="text/javascript" src="js/scrollto.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery.counterup.js"></script> -->
 <!-- <script type="text/javascript" src="js/gallery.js"></script> -->
 <!-- <script type="text/javascript" src="js/wow.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/slider.js"></script> -->
 <!-- <script type="text/javascript" src="js/video-player.js"></script> -->
 <!-- <script type="text/javascript" src="js/jquery.barfiller.js"></script> -->
 <!-- <script type="text/javascript" src="js/jflickrfeed.min.js"></script> -->
 <!-- <script type="text/javascript" src="js/timepicker.js"></script> -->
 <!-- <script type="text/javascript" src="js/tweetie.js"></script> -->
 <!-- Google Map Javascript Codes -->
 <!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyABqK-5ngi3F1hrEsk7-mCcBPsjHM5_Gj0"></script>
 <script src="js/jquery.googlemap.js"></script> -->
 <!-- Custom script for all pages -->
 <!-- <script type="text/javascript" src="js/color-switcher.js"></script> -->
 <!-- <script type="text/javascript" src="js/script.js"></script> -->












 <!-- Custom script for all pages -->




 <script src="{{ asset('assets/website/js/jquery-1.12.4.js')}}"></script>


    <script src="{{ asset('assets/website/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/website/js/bootsnav.js')}}"></script>

    <script src="{{ asset('assets/website/js/parallax.js')}}"></script>

    <script src="{{ asset('assets/website/js/scrollto.js')}}"></script>

      <script src="{{ asset('assets/website/js/jquery-scrolltofixed-min.js')}}"></script>

      <script src="{{ asset('assets/website/js/jquery.counterup.js')}}"></script>
      <script src="{{ asset('assets/website/js/gallery.js')}}"></script>

      <script src="{{ asset('assets/website/js/wow.min.js')}}"></script>

      <script src="{{ asset('assets/website/js/slider.js')}}"></script>
      <script src="{{ asset('assets/website/js/video-player.js')}}"></script>

      <script src="{{ asset('assets/website/js/jquery.barfiller.js')}}"></script>

      <script src="{{ asset('assets/website/js/jflickrfeed.min.js')}}"></script>

      <script src="{{ asset('assets/website/js/timepicker.js')}}"></script>

        <script src="{{ asset('assets/website/js/tweetie.js')}}"></script>

              <script src="{{ asset('assets/website/js/tweetie.js')}}"></script>

              <!-- <script src="{{ asset('assets/website/js/jquery.googlemap.js')}}"></script> -->


              <script src="{{ asset('assets/website/js/script.js')}}"></script>



              <!--Jquery-->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
              <!--Floating WhatsApp css-->
              <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
              <!--Floating WhatsApp javascript-->
              <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>


              <!--Div where the WhatsApp will be rendered-->
                <div id="WAButton"></div>



              <script type="text/javascript">
              var image_path="{{ asset('assets/website/images/whatsapp.svg')}}";
                 $(function () {
                              $('#WAButton').floatingWhatsApp({
                             phone: '+201009236100', //WhatsApp Business phone number
                             headerTitle: 'Chat with us on WhatsApp!', //Popup Title
                             popupMessage: 'Hello, how can we help you?', //Popup Message
                             showPopup: true, //Enables popup display
                             buttonImage: '<img src="http://127.0.0.1:8000/assets/website/images/whatsapp.png" />',
                             position: "right" //Position: left | right
                         });
                     });
              </script>
