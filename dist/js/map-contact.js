// (function ($) {
//   var map;
//       function initMap() {
//         map = new google.maps.Map(document.getElementById('map'), {
//           center: {lat: 50.410944, lng: 30.599861},
//           zoom: 16,
//           disableDefaultUI: true,
//           // zoomControl: false,
//           // mapTypeControl: false
//         });
//         var marker = new google.maps.Marker({
//           position: {lat: 50.410944, lng: 30.599861},
//           map: map,
// 	      icon: {
// 	      	  url: 'img/infrastructure/main-map.svg',
// 	      	  // scaledSize: new google.maps.Size(30, 40)
// 	      }
//         });
//         var infowindow = new google.maps.InfoWindow({
//             content: "Берег Дніпра"
//           });

//         marker.addListener('click', function() {
//             infowindow.open(map, marker);
//           })
//       }
//       	$.getJSON("js/mapStyle.json", function(data) {
//                map.setOptions({styles: data});
//            });
//  initMap()

//  })(jQuery);

 $(function() {
     filterMarkers = function (category) {
         for (i = 0; i < markers1.length; i++) {
             marker = gmarkers1[i];
             console.log(marker);
             if (marker.category == category || category == 'all') {
                 marker.setMap(map);
                 map.setCenter(marker.getPosition())
                 // marker.setAnimation(google.maps.Animation.DROP);
             }
             else {
                 marker.setMap(null)
             }
         }
     }
     var gmarkers1 = [];
     var markers1 = [];
     var infowindow = new google.maps.InfoWindow({
         content: ''
     });
     markers1 = [
                 ['0', '', 50.410944, 30.599861, 'main', 'img/infrastructure/main-map.svg', 'Берег Дніпра', '30', '40'],
                 ['1', '', 50.422353, 30.455401, 'sale', 'img/infrastructure/sale-map.svg', 'Відділ продажу', '25', '30'],
                 ['2', '', 50.461814, 30.489191, 'sale1', 'img/infrastructure/sale-map.svg', 'Відділ продажу', '25', '30'],   
                      ];
      markers2 = [
                 ['0', '', 50.410944, 30.599861, 'main', 'img/infrastructure/main-map.svg', 'Берег Дніпра', , '30', '40'],
                ['1', '', 50.422353, 30.455401, 'sale', 'img/infrastructure/sale-map.svg', 'Відділ продажу', '25', '30'],
                 ['2', '', 50.461814, 30.489191, 'sale1', 'img/infrastructure/sale-map.svg', 'Відділ продажу', '25', '30'],
                 
                     ];
     function addMarker(marker) {
         var category = marker[4];
         var title = marker[1];
         var pos = new google.maps.LatLng(marker[2], marker[3]);
         var content = marker[6];
         var scaledSize = new google.maps.Size(marker[7], marker[8]);
         var markerIcon = {
             url : marker[5]
             
         };
         if($(window).width() < 767) {
            var markerIcon = {
                url : marker[5],
               scaledSize: scaledSize
                
            };
         }
         marker1 = new google.maps.Marker({
             title: title,
             position: pos,
             category: category,
             map: map,
             icon: markerIcon,
             // animation: google.maps.Animation.DROP,
         });
         gmarkers1.push(marker1);
         // Marker click listener
         google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
             return function () {
                console.log('hello')
                 infowindow.setContent(content);
                 infowindow.open(map, marker1);
                 map.setCenter(content.getPosition()); 
                 map.panTo(this.getPosition());
             }
         })(marker1, content));
     }
       // Create the map
     var map = new google.maps.Map($('#map')[0], {
         zoom: 16,
         // zoomControl: false,
         // mapTypeControl: false,
         // scaleControl: false,
         // streetViewControl: false,
         // scrollwheel: true,
         // fullscreenControl: false,
         // scrollwheel: false,
         // center: new google.maps.LatLng( centerX, centerY),
         disableDefaultUI: true,
         mapTypeId: google.maps.MapTypeId.ROADMAP,
         center: new google.maps.LatLng(50.412000, 30.599861)
     });

 var uri = window.location.href;
         var searchIndex = uri.search('/ru/');
         if(searchIndex > -1){
         for (i = 0; i < markers2.length; i++) {
         addMarker(markers2[i]);
     }

         }else{
             for (i = 0; i < markers1.length; i++) {
         addMarker(markers1[i]);
     }
         }
     
    $.getJSON("js/mapStyle.json", function(data) {
           map.setOptions({styles: data});
       });       
 });