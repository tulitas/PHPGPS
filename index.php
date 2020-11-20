<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBviR3u8gYcp3bLMEXIpqWmwCHj_5VYw_4&callback=myMap"></script>

<form action="welcome.php" method="post">
    Name: <input type="text" name="name" id="name"><br>
E-mail: <input type="text" name="email" id="email"><br>
<input type="submit" >
</form>


</body>
</html>

