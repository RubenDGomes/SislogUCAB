<html>
  <head>
    <title>SisLogUCAB</title>
    <link rel='stylesheet' href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
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
          <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li> -->
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url(); ?>sislog/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>sislog/login">Login</a>
          </li>
        </ul>
      </ul>
    </div>
  </nav>

  <div class="container">
    <br>

    <?php if ($this->session->flashdata('user_registred')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registred').'</p>' ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login_success')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>' ?>
    <?php endif; ?>
