<!-- Scripts -->
<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script> -->
<script type="text/javascript" src="assets/js/isInViewport.jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.particleground.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/scrollReveal.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- SLICK GALLERY -->
<script type="text/javascript" src="/slick/slidergallery.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>
<!-- CONTACT FORM MODAL GALLERY -->
<script src="/js/contactmodal.js"></script>
<!-- SLICK SLIDER THUMB GALLERY -->
<script src="/js/slickinthumb.js"></script>


<script>
function myMap() {
  var icon = {
    url: "../assets/img/orangemarker.png",
    scaledSize: new google.maps.Size(50, 50),
    }
  cord = document.getElementById("cord");
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position:myCenter,
    animation:google.maps.Animation.BOUNCE,
    icon: icon,
  });
  marker.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content:"Foot Forward Properties - We are here to serve you!"
    });
  infowindow.open(map,marker);
  map.setZoom(16);
  map.setCenter(marker.getPosition());
  });
  $(document).ready(function()
  {
    $("#cord").on('click', function ()
    {
      map.setZoom(16);
      map.setCenter(marker.getPosition());
    });
  });
  google.maps.event.addListener(cord,'click',function() {
    map.setZoom(16);
    map.setCenter(marker.getPosition());
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKEzL8SPU49cTvEWBXROXAyIgrfLbZ6vw&callback=myMap"></script>
<!--  <script>
      var latitude = 34.038405;
      var longitude = -117.946944;
      var description = ['Footforward Properties - We are here to serve you']
      var pinIcon = new google.maps.MarkerImage(
          "assets/img/orangemarker.png",
          null, /* size is determined at runtime */
          null, /* origin is 0,0 */
          null, /* anchor is bottom center of the scaled image */
          new google.maps.Size(50, 50)
          );
      var mapTheme = "light";
      var mapElement = "map";
      google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, pinIcon, mapTheme, mapElement));

      AIzaSyC4_0oYCFToPrh5ynkWOEWXY5qSIoeCYBo
  </script> -->
