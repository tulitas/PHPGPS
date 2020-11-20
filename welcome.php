
   <!DOCTYPE html>
<html>
<body>
    <div id="googleMap" style="width:100%;height:400px;"></div>

    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
?>
    
<script>  
function myMap() {
    let lat = '<?php echo $name;?>';
    let lng = '<?php echo $email;?>';
var mapProp= {   
  center:new google.maps.LatLng('<?php echo $name;?>', '<?php echo $email;?>'),
  zoom:5    
};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    let myLatLng = { lat: lat, lng: lng};
    let marker = new google.maps.Marker({position: myLatLng,  title: "hello"});
    window.alert(lat + "\n " + lng);    
    marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBviR3u8gYcp3bLMEXIpqWmwCHj_5VYw_4&callback=myMap"></script>

</body>
</html>
