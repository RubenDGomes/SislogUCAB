<html>
  <head>
    <title>SisLogUCAB</title>
    <link rel='stylesheet' href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <script src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"></script>
    <script src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="container">
    <br>

    <?php if ($this->session->flashdata('login_success')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>' ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ?>
    <?php endif; ?>
