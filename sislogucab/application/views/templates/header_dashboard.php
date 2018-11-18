<html>
  <head>
    <title>SisLogUCAB</title>
    <link rel='stylesheet' href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/">SisLogUCAB</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url(); ?>">Paquetes<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about">Balance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item" style="align: rigth">
          <a class="nav-link" href="#"><?php
            $this->load->controls('Login');
            echo '<a class="nav-link" href="#">'. $this->Login->session->userdata('username').'</a>';
            ?></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <br>
