<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Polonica - Beauty Parlour & Spa</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Gallery Plugin -->
    <link rel="stylesheet" type="text/css" href="css/lightcase.css">

    <!-- Modal Plugin -->
    <link rel="stylesheet" href="css/aos.css" />



</head>

<body>
    <!-- Preloader Start -->
    
    <?php
        include("header.php");
     ?>

    <?php
       if(isset($_GET['page']))
        {
            $section = $_GET['page'].".php";

            if(file_exists($section))
            {
                include($section);
            }

            else
            {
                error();  
            }

        }

        else
        {
            include("main.php");
        }

        function error()
        {
            header('Location: 404.php');
            die();
        }
    ?>

     <?php
        include("footer.php");
     ?>

    <!-- Jquery-2.2.4 JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <!-- Gallery -->
    <script type="text/javascript" src="js/lightcase.js"></script>
    <!-- Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>

    <script src="js/aos.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[data-rel^=lightcase]').lightcase();
        });


        $("#modal").iziModal();

        AOS.init();
    </script>
    <script>
      function initMap() {
        var shop_one = {lat: 10.8505, lng: 76.2711};
        var shop_two = {lat: 8.8932, lng: 76.6141};
        var shop_three = {lat: 9.5916, lng: 76.5222};
        var shop_four = {lat: 9.4981, lng: 76.3388};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: shop_one,

          styles: [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#3293a2"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
        });
        var marker_one = new google.maps.Marker({
          position: shop_one,
          map: map,
          title: 'Polonica (Kochi)'
        });

        var marker_two = new google.maps.Marker({
          position: shop_two,
          map: map,
          title: 'Polonica (Kollam)'
        });
        var marker_three = new google.maps.Marker({
          position: shop_three,
          map: map,
          title: 'Polonica (Kollam)'
        });
        var marker_four = new google.maps.Marker({
          position: shop_four,
          map: map
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the '+
            'Northern Territory,</p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';


        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });


        marker_one.addListener('click', toggleBounce_one);
        marker_two.addListener('click', toggleBounce_two);
        marker_three.addListener('click', toggleBounce_three);
        marker_four.addListener('click', toggleBounce_four);

        function toggleBounce_one() {
        if (marker_one.getAnimation() !== null) {
          marker_one.setAnimation(null);
        } else {
          marker_one.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
      function toggleBounce_two() {
        if (marker_two.getAnimation() !== null) {
          marker_two.setAnimation(null);
        } else {
          marker_two.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
      function toggleBounce_three() {
        if (marker_three.getAnimation() !== null) {
          marker_three.setAnimation(null);
        } else {
          marker_three.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
      function toggleBounce_four() {
        if (marker_four.getAnimation() !== null) {
          marker_four.setAnimation(null);
        } else {
          marker_four.setAnimation(google.maps.Animation.BOUNCE);
        }
      }


      }
    </script>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBRDYRJRvaGmX5qRhWsNMNx-kq7ajcGLUw&callback=initMap"
  type="text/javascript"></script>
</body>

</html>