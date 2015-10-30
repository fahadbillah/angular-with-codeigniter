<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" ng-app="ngci">
<head>
	<meta charset="utf-8">
	<title ng-bind="title+' | Angular Codeigniter'"></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#/">NGCI</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul menu-active class="nav navbar-nav">
				<li class="active"><a href="#/about/time">Home</a></li>
				<li><a href="#/about/MAX">About</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>

	<div ng-view></div>


	<!-- bootstrap & jquery files -->
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- angular files -->
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>bower_components/angular-route/angular-route.min.js"></script>

	<!-- this project files -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/about.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/directive.js"></script>
</body>
</html>