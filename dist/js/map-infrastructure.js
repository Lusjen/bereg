$(function() {
     filterMarkers = function (category) {
         for (i = 0; i < markers1.length; i++) {
             marker = gmarkers1[i];
             // console.log(marker);
             if (marker.category == category || category == 'all' || marker.category == 'main') {
                 marker.setMap(map);
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
                     ['1', '', 50.412166, 30.597861, 'park', 'img/infrastructure/park.svg', 'Паркова зона', '25', '30'],
                     ['2', '', 50.411640, 30.599304, 'жк', 'img/infrastructure/great.svg', 'ЖК Great', '25', '30'],
                     ['3', '', 50.412766, 30.596861, 'school', 'img/infrastructure/school.svg', 'Початкова школа', '25', '30'],
                     ['4', '', 50.411766, 30.598761, 'sport', 'img/infrastructure/sport.svg', 'Спортивний майданчик', '25', '30'],
                     ['5', '', 50.410960, 30.600350, 'sport', 'img/infrastructure/sport.svg', 'Спортивний майданчик', '25', '30'],
                     ['6', '', 50.411210, 30.605695, 'market', 'img/infrastructure/market.svg', 'Novus', '25', '30'],
                     ['7', '', 50.407518, 30.613454, 'sport', 'img/infrastructure/sport.svg', 'Sport Life', '25', '30'],
                     ['8', '', 50.406629, 30.612724, 'sport', 'img/infrastructure/sport.svg', 'Фітнес Клуб Fitness24', '25', '30'],
                     ['9', '', 50.407591, 30.605866, 'yachts', 'img/infrastructure/yachts.svg', 'Яхт клуб Рів"єра', '25', '30'],
                     ['10', '', 50.405701, 30.611595, 'market', 'img/infrastructure/river-mall.svg', 'River Mall', '25', '30'],
                     ['11', '', 50.408436, 30.615683, 'school', 'img/infrastructure/school.svg', 'Спеціалізована загальноосвітня школа №329', '25', '30'],
                     ['12', '', 50.409134, 30.614706, 'kinder', 'img/infrastructure/kinder.svg', 'Заклад дошкільної освіти №245 "Перевесло"', '25', '30'],
                     ['13', '',  50.403458, 30.614169, 'cafe', 'img/infrastructure/cafe.svg', 'Villa Riviera', '25', '30'],
                     ['14', '',  50.406021, 30.612780, 'cafe', 'img/infrastructure/cafe.svg', 'Mafia', '25', '30'],
                     ['15', '',  50.395326, 30.616171, 'metro', 'img/infrastructure/metro.svg', 'м. Осокорки', '25', '30'],
                     ['16', '',  50.394160, 30.604104, 'metro', 'img/infrastructure/metro.svg', 'м. Славутич', '25', '30'],
                     ['17', '',  50.411642, 30.614973, 'medicine', 'img/infrastructure/medicine.svg', 'Klinika Dobroho Doktora', '25', '30'],
                     

                    
                 ];
      markers2 = [
                     ['0', '', 50.410944, 30.599861, 'main', 'img/infrastructure/main-map.svg', 'Берег Дніпра', '30', '40'],
                     ['1', '', 50.412166, 30.597861, 'park', 'img/infrastructure/park.svg', 'Паркова зона', '25', '30'],
                     ['2', '', 50.411640, 30.599304, 'жк', 'img/infrastructure/great.svg', 'ЖК Great', '25', '30'],
                     ['3', '', 50.412766, 30.596861, 'school', 'img/infrastructure/school.svg', 'Початкова школа', '25', '30'],
                     ['4', '', 50.411766, 30.598761, 'sport', 'img/infrastructure/sport.svg', 'Спортивний майданчик', '25', '30'],
                     ['5', '', 50.410960, 30.600350, 'sport', 'img/infrastructure/sport.svg', 'Спортивний майданчик', '25', '30'],
                     ['6', '', 50.411210, 30.605695, 'market', 'img/infrastructure/market.svg', 'Novus', '25', '30'],
                     ['7', '', 50.407518, 30.613454, 'sport', 'img/infrastructure/sport.svg', 'Sport Life', '25', '30'],
                     ['8', '', 50.406629, 30.612724, 'sport', 'img/infrastructure/sport.svg', 'Фітнес Клуб Fitness24', '25', '30'],
                     ['9', '', 50.407591, 30.605866, 'yachts', 'img/infrastructure/yachts.svg', 'Яхт клуб Рів"єра', '25', '30'],
                     ['10', '', 50.405701, 30.611595, 'market', 'img/infrastructure/river-mall.svg', 'River Mall', '25', '30'],
                     ['11', '', 50.408436, 30.615683, 'school', 'img/infrastructure/school.svg', 'Спеціалізована загальноосвітня школа №329', '25', '30'],
                     ['12', '', 50.409134, 30.614706, 'kinder', 'img/infrastructure/kinder.svg', 'Заклад дошкільної освіти №245 "Перевесло"', '25', '30'],
                     ['13', '',  50.403458, 30.614169, 'cafe', 'img/infrastructure/cafe.svg', 'Villa Riviera', '25', '30'],
                      ['14', '',  50.406021, 30.612780, 'cafe', 'img/infrastructure/cafe.svg', 'Mafia', '25', '30'],
                      ['15', '',  50.395326, 30.616171, 'metro', 'img/infrastructure/metro.svg', 'м. Осокорки', '25', '30'],
                      ['16', '',  50.394160, 30.604104, 'metro', 'img/infrastructure/metro.svg', 'м. Славутич', '25', '30'],
                      ['17', '',  50.411642, 30.614973, 'medicine', 'img/infrastructure/medicine.svg', 'Klinika Dobroho Doktora', '25', '30'],
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
                 infowindow.setContent(content);
                 infowindow.open(map, marker1);
                 map.panTo(this.getPosition());
             }
         })(marker1, content));
        
     }

       // Create the map
     var map = new google.maps.Map($('#map')[0], {
         zoom: 15,
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


var markermain = $("[data-category = 'main']");
            // console.log(markermain)
            //  markermain.trigger('click');
            filterMarkers(markermain.attr('data-category'))
     
    $.getJSON("js/mapStyle.json", function(data) {
           map.setOptions({styles: data});
       }); 
 });