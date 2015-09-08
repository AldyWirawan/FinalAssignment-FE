<!DOCTYPE html>

<html>
<head>
	<title>Sistem Prediksi Tren Saham</title>

	<!-- css bootstrap -->
	<link rel="stylesheet" type="text/css" href="aset/css/my-style.css">
	<link rel="stylesheet" type="text/css" href="aset/bootstrap/css/bootstrap.css">

	<!-- css datatables -->
	<link rel="stylesheet" type="text/css" href="aset/css/dataTables.min.css"/>

	<!-- js bootstrap + angular -->
	<script src="aset/js/jquery-2.1.3.min.js"></script>
	<script src="aset/bootstrap/js/bootstrap.min.js"></script>
	<script src="aset/js/angular.js"></script>
	<script src="aset/js/angular-route.js"></script>

	<!-- js highcharts + datatables -->
	<script type="text/javascript" src="aset/js/dataTables.min.js"></script>

	<script src="aset/app.js"></script>

</head>

<body ng-app="sistemprediksitrenApp">
	<!-- navbar -->
	<nav class="navbar navbar-inverse" ng-controller="NavController">
		<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand" style="margin-left:15px; color:white" href="#" ng-click="halaman='beranda'">Sistem Prediksi Tren Saham</a>
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
			    	<li class="{{(halaman=='datahistoris')?'active':''}}"><a href="#/datahistoris" style="color:white;font-size:125%" data-toggle="tooltip" title="Data index saham gabungan JKSE per 5 menit yang diambil dari Yahoo! Finance pada bulan Agustus" ng-click="halaman='datahistoris'">Data Historis</a></li>
			        <li class="{{(halaman=='sma')?'active':''}}"><a href="#/sma" style="color:white;font-size:125%" data-toggle="tooltip" title="Data Simple Moving Average yang dihitung berdasarkan harga penutupan saham JKSE per 5 menit" ng-click="halaman='sma'">Perhitungan SMA</a></li>
			        <li class="{{(halaman=='datatweet')?'active':''}}"><a href="#/datatweet" style="color:white;font-size:125%" data-toggle="tooltip" title="Data mentah Twitter berbahasa Inggirs yang merupakan hasil streaming Twitter di hari biasa pada waktu pembukaan hingga penutupan pasar saham"ng-click="halaman='datatweet'">Data Tweet</a></li>
			        <li class="{{(halaman=='sentianal')?'active':''}}"><a href="#/sentianal" style="color:white;font-size:125%" data-toggle="tooltip" title="Data hasil analisis sentimen Twitter per 5 menit yang dilakukan menggunakan SentiWordNet" ng-click="halaman='sentianal'">Sentimen Analisis</a></li>
			        <li class="{{(halaman=='datamodel')?'active':''}}"><a href="#/datamodel" style="color:white;font-size:125%" data-toggle="tooltip" title="Pembangunan model dan pengujian SVM" ng-click="halaman='datamodel'">Data Model SVM</a></li>
			        <li class="{{(halaman=='prediksitren')?'active':''}}"><a href="#/prediksitren" style="color:white;font-size:125%" data-toggle="tooltip" title="Parameter SVM yang saat ini digunakan" ng-click="halaman='prediksitren'">Prediksi Tren</a></li>
			    </ul>

		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>
	<div class="container" ng-view>
	</div>
</body>
</html>