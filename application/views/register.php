<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
<form method="post" action="<?php echo base_url(); ?>users/register">
<div class="form-group">
  <label>First Name*</label>
  <input type="text" class="form-control" name="first_name" placeholder="Masukan Nama Awal">
</div>
<div class="form-group">
  <label>Last Name*</label>
  <input type="text" class="form-control" name="last_name" placeholder="Masukan Nama Akhir">
</div>
<div class="form-group">
  <label>Email Address*</label>
  <input type="text" class="form-control" name="email" placeholder="Masukan Email">
</div>
<div class="form-group">
  <label>Username*</label>
  <input type="text" class="form-control" name="username" placeholder="Masukan Username">
</div>
<div class="form-group">
  <label>Password*</label>
  <input type="password" class="form-control" name="password" placeholder="Masukan Password">
</div>
<div class="form-group">
  <label>Confirm Password*</label>
  <input type="password" class="form-control" name="password2" placeholder="Masukan Password Ulang">
</div>

<button name="submit" type="submit" class="btn btn-primary">Register</button>
</form>
