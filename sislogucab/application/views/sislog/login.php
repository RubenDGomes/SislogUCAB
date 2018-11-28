<?php echo form_open('sislog/login'); ?>
  <div class="row">
    <div class="col-md-4 offset-md-4" style=" border: 5px 5px 5px 5px; ">
        <h1 class="text-center"><?php echo $title ?></h1>
        <div class="form_group">
            <input type="text" name="email" placeholder="Example@gmail.com"  class="form-control" required autofocus><br>
        </div>
        <div class="form_group">
            <input type="password" name="password" placeholder="Password" class="form-control" required autofocus><br>
        </div>
        <input type="submit" name="Submit" class="btn btn-primary btn-block">
    </div>
  </div>

<?php echo form_close(); ?>
