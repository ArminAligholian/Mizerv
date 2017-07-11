(function(window,google) {

    var Tehran = {lat: 31.9, lng: 54.5},
    options= {
        zoom: 14,
        center: Tehran,
        // disableDefaultUI: true,
        // scrollwheel: false,
        // draggable:false
        // mapTypeId:google.maps.MapTypeId.RoadMap
        // mapTypeId:google.maps.MapTypeId.HYBRID
        //maxZoom:11
        //minZoom:9
        //zoomControlOptions:{ position: google.maps.ControlPosition.BOTTOM_right, style: google.maps.ZoomControlStyle.LARGE}

    },
    element = document.getElementById('map'),
    map = new google.maps.Map(element,options);
    var marker = new google.maps.Marker({
        position: Tehran,
        map: map,
        draggable:true,
       /* event:{
            name: 'click',
            callback: function () {

            }
        },*/
        //icon:'URL'

    });

    google.maps.event.addListener(map,'click',function (e) {
       alert('clickkk');
       console.log(e)
    });


}(window,google));
