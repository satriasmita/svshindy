<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Map';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- peta leaflet -->
<link rel="stylesheet" href="leaflet/leaflet.css" />
 <script src="leaflet/leaflet.js"></script>
<style type="text/css">
 #mapid {
  margin: 0 auto 0 auto;
  height: 90%;
  width: 80%;
 }
 html, body {
        height: 100%;
      }
</style>

<div class="box box-solid box-info">
  
<!-- peta kantor desa kampung baru -->
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.3485384289542!2d100.12669069277123!3d-0.6306762999241948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2437325d868b8805!2sKantor+Kepala+Desa+Kampung+Baru!5e0!3m2!1sen!2sid!4v1564106507458!5m2!1sen!2sid" width="1087" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

<!-- peta wilayah kampung baru -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6709.638927752158!2d100.12447271943404!3d-0.6325507408179445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e3aa435f934b%3A0x972586bef9e2b082!2sKampung+Baru%2C+Central+Pariaman%2C+Pariaman+City%2C+West+Sumatra!5e0!3m2!1sen!2sid!4v1564106876441!5m2!1sen!2sid" width="1087" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<!-- --------------------------------------------------------------------------------------------- -->
<!-- peta leaflet -->
<!-- <div id="mapid" style="width: 1087px; height: 450px;"></div> -->
<script type="text/javascript">
  var mapOptions = {
     center: [-0.629296, 100.138316],
     zoom: 15
  }
 
  var map = new L.map('mapid', mapOptions);
 
  var layer = new L.TileLayer('http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png');
  // layer lain
//Mapnik
// http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png
//Black And White
// http://{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png
// //DE
// http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/ {y}.png
// //France 
// http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png
// //Hot 
// http://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png
// //BZH 
// http://tile.openstreetmap.bzh/br/{z}/{x}/{y}.png

  map.addLayer(layer);
 
  var marker = L.marker([-0.629296, 100.138316]).addTo(map);
  marker.bindPopup('<b>Dinas Komunikasi dan Informatika Kota Pariaman</b><br>Jl. Imam Bonjol No. 44 Pariaman, Desa Cimparuah, Kecamatan Pariaman Tengah, Kota Pariaman, 25511');

  map.on('click', function (e) {
    alert("Info Latitude (garis lintang) : " + e.latlng.lat + ", Longitude (garis bujur) : " + e.latlng.lng);
});
 
 </script>
 <!-- ----------------------------------------------------------------------------------------------------------- -->

</div>