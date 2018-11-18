<html>
  <head>
    <title>SisLogUCAB</title>
    <link rel='stylesheet' href="https://bootswatch.com/4/lux/bootstrap.min.css">
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
