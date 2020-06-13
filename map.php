<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Google Maps Multiple Markers</title>
  <script src="http://maps.google.com/maps/api/js?sensor=false"
          type="text/javascript"></script>
</head>
<body>
  <div id="map" style="width: 900px; height: 600px;"></div>

  <script type="text/javascript">
    var locations = [

      ['DNG Orthopadic hospital', 26.850436,75.772991, 4],
      ['sharda hospital',26.845569,75.770825,6],
      ['raksheet hospital',26.848678,75.771488,5],
      ['mansarover hospital',26.847739,75.769823,7]


    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(26.75, 75.79),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
</body>
</html>
