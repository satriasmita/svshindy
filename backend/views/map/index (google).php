<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Map';
$this->params['breadcrumbs'][] = $this->title;
?>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<div class="box box-solid box-info">
        <!--3. membuat div untuk menampilkan peta-->
      <div id="map" style="width: 1087px; height: 450px;"></div>
        <script type="text/javascript">
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-0.6290881,100.138514);
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 15,
                  center: myLatlng
              };
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map"), myOptions);
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Diskominfo Kota Pariaman"
              });
        </script></div>


