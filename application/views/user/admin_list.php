<div class="content-wrapper">
    <section class="content">
        <div class="row">
		  <div class="col-md-12">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">User Information</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>Full Name</th>
					  <th>Email</th>
					  <th>Phone Number</th>
					  <th>Blood Group</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($result as $user_result): ?>
					<tr>
					  <td><?php echo $user_result->name; ?></td>
					  <td><?php echo $user_result->email; ?></td>
					  <td><?php echo $user_result->phone; ?></td>
					  <td><?php echo $user_result->blood_group; ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		  </div>
		<!-- DataTables -->
		</div>
    </section>
</div>
		<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script>
		  $(document).ready(function() {
		    $('#example1').DataTable();
		});
		</script>