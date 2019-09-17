
<?php if($this->session->flashdata('pass_login')) : ?>
		<div class="alert alert-success">
			<?php echo $this->session->flashdata('pass_login'); ?>
		</div>
<?php endif; ?>

<?php if($this->session->flashdata('fail_login')) : ?>
		<div class="alert alert-danger">
				<?php echo $this->session->flashdata('fail_login'); ?>
		</div>
<?php endif; ?>
<div class="container">
<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url(); ?>admin/users/login" onSubmit="return validasi()">
    <div class="row">
        <div class="col-md-2">
    <div class="logoCatalog">
    <img src="<?php echo base_url(); ?>assets/images/products/LogoSukses.png" width="150px" height="150px" alt="logoctlg">
    </div>
  </div>
        <div class="col-md-6">
    <div class="juduldaftar">
            <h2 align="center">LOGIN</h2>
            <hr>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="name">Name</label>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                    <input type="text" name="username" class="form-control" id="name"
                           placeholder="Username" required autofocus>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <!-- Put name validation error messages here -->
                    </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                    </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 field-label-responsive">
            <label for="password">Password</label>
        </div>
        <div class="col-md-6">
            <div class="form-group has-danger">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
                    <input type="password" name="password" class="form-control" id="password"
                    placeholder="Password" required>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            </div>
        </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-user" aria-hidden="true"></i> Login</button>
        </div>
    </div>
</form>
</div>
