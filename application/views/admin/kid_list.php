<?php print_r($result); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
		  <div class="col-md-12">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Kid Information</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th>First Name</th>
					  <th>Last Name</th>
					  <th>Email</th>
					  <th>Phone</th>
					  <th>Locality</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($result as $kid_result): ?>
					<tr>
					  <td><?php echo $kid_result->first_name; ?></td>
					  <td><?php echo $kid_result->last_name; ?></td>
					  <td><?php echo $kid_result->email; ?></td>
					  <td><?php echo $kid_result->phone_number; ?></td>
					  <td><?php echo $kid_result->locality; ?></td>
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