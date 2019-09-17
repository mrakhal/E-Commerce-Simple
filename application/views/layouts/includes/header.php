<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CatalogYuk | Situs Catalog dan Jual Pakaian Online</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(''); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(''); ?>assets/css/custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/js/bootstrap.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a id="Navigasitop" class="navbar-brand" href="<?php echo base_url(); ?>">Catalog<span>Yuk</span></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <?php if(!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/register">Buat Akun</a></li>
              <?php endif; ?>
            <li><a href="<?php echo base_url(); ?>kontak">Kontak</a></li>
            <li><a href="<?php echo base_url(); ?>about">About</a></li>
          </ul>
    <?php if(!$this->session->userdata('logged_in')) :?>
			<form method="post" action ="<?php echo base_url(); ?>users/login" class="navbar-form navbar-right">
				<div class="form-group">
					<input name="username" type="text" class="form-control" placeholder="Masukan Username" size="9">
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Masukan Password" size="9">
				</div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
    <?php else : ?>
      <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
      <p style="color:white;" class="navbar-form navbar-right"> <?=$this->session->userdata('username')  ?></p>
      <button name="submit" type="submit" class="btn btn-default">Logout</button>
      </form>
    <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
      <marquee style="color:white; padding-bottom:10px;" direction="right">CatalogYuk | Gratis Ongkos Kirim</marquee>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view('layouts/includes/sidebar'); ?>
			</div>

			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				<div id="panelproduk" class="panel-heading">
					<h3 class="panel-title">Catalog<span>Yuk</h3>
			</div>
			<div class="panel-body">
