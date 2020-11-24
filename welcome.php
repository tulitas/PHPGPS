
   <!DOCTYPE html>
<html>
<body>
    <div id="googleMap" style="width:100%;height:400px;"></div>

    <?php
    /** @var type $_POST */
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];
    
?>
    
<script>  

function myMap() {
   let lat = '<?php echo $lat;?>';
   let lng = '<?php echo $lng;?>';
   let myLatLng = new google.maps.LatLng(lat,lng);
   var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var mapProp= {
    center: myLatLng,
    zoom:6  
     };
   let marker =  new google.maps.Marker({
    position: myLatLng,
    map,
    title: "Hello World!"
  });
marker.setMap(map);
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBviR3u8gYcp3bLMEXIpqWmwCHj_5VYw_4&callback=myMap"></script>

</body>
</html>
