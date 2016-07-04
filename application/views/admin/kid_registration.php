<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-10">
				<!-- general form elements -->
				<div class="box box-primary">
				  <div class="box-header with-border">
					<h3 class="box-title">Kid Registration</h3>
				  </div>
				  <!-- /.box-header -->
				  <!-- form start -->

					<?php echo validation_errors(); ?>
				  <form role="form" action="<?php echo base_url() ?>admin/kid_save" method="post">
					<div class="box-body">
					  <div class="form-group">
					  	<label for="first_name">Firstname</label>
					  	<input name="first_name" type="text" class="form-control" placeholder="First name">
			  		  </div>
	  		   		  <div class="form-group">
					  	<label for="last_name">Lastname</label>
					  	<input name="last_name" type="text" class="form-control" placeholder="Last name">
			  		  </div>
					  <div class="form-group">
						<label for="email">Email address</label>
						<input name="email" type="email" class="form-control" placeholder="Email">
					  </div>
					  <div class="form-group">
					  	<label for="phone_number">Phone Number</label>
					  	<input name="phone_number" type="phone" class="form-control" placeholder="Phone number">
			  		  </div>
			  		  <div class="form-group">
					  	<label for="locality">Locality</label>
					  	<input type="text" name="locality" class="form-control" placeholder="locality">
			  		  </div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <input class="btn btn-primary" type="submit" value="Register" />
					</div>
				  </form>
				</div>
				<!-- /.box -->
			</div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->