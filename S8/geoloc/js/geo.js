function succesGeo(position){

	var infopos="posistion determiné : <br/>"

	infopos+= "Latitude :"+position.coords.latitude+"<br />"
	infopos+= "Longitude :"+position.coords.longitude+"<br />"
	infopos+= "Altitude :"+position.coords.altitude+"<br />"

	document.getElementById("maposition").innerHTML=infopos;
}
navigator.geolocation.watchPosition(succesGeo);

function initMap() {
  var myLatlng = {lat: 48.9370894, lng: 2.3257524};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatlng
  });

  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title: 'Click to zoom'
  });

  map.addListener('center_changed', function() {
    // 3 seconds after the center of the map has changed, pan back to the
    // marker.
    window.setTimeout(function() {
      map.panTo(marker.getPosition());
    }, 3000);
  });

  marker.addListener('click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
}
