<?php echo validation_errors(); ?>

<?php echo form_open('sislog/register'); ?>
<div class="row">
  <div class="col-md-4 offset-md-4">
    <h2 style="text-align: center;"><?= $title ?></h2>
    <legend>Register</legend>
    <div class="form_group">
      <label>Nombre</label>
      <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="form_group">
      <label>Apellido</label>
      <input type="text" name="last_name" class="form-control" placeholder="Last Name">
    </div>
    <div class="form_group">
      <label>Cedula</label>
      <input type="text" name="ci" class="form-control" placeholder="Cedula">
    </div>
    <div class="form_group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form_group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" placeholder="Username">
    </div>
    <div class="form_group">
      <label>Contraseña</label>
      <input type="password" name="password" class="form-control" placeholder="Enter Password">
      <label>Confirm Password</label>
      <input type="password" name="password2" class="form-control" placeholder="Confirm Password">
    </div>
    <input type="submit" name="Submit" class="btn btn-primary">
  </div>
  </div>


<?php echo form_close(); ?>
