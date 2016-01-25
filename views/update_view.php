<?php include_once('header.php'); ?>

<div class="container">

<div id="wrapper">
<div id="grid">
<h1>Contacts</h1>
<div class="row">
	<div class="form-group col-xs-4">
		<div class="input-group"> <span class="input-group-addon">Search</span>

			<input id="filter" type="text" class="form-control" placeholder="Type here...">
		</div>
	</div>
</div>
<br>
<table id="test" class="table table-hover table-striped info">
<thead>
<tr class="info">
	<th>First Name</th>
	<th>Last Name</th>
	<th width="100">Update</th>
</tr>
</thead>
<tbody class="searchable">
<!-- Fetching Names Of All Students From Database -->
<?php foreach ($contacts as $contact): ?>
<tr>
<td class="text-uppercase"><?php echo $contact->first_name; ?></td>
<td class="text-uppercase"><?php echo $contact->last_name; ?></td>
<td>
<a class="btn btn-info update glyphicon glyphicon-pencil" href="<?php echo base_url()."index.php/update_ctrl/show_student_id/" . $contact->id; ?>">Update</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

<!--"<?php echo base_url()."index.php/update_ctrl/show_student_id/" . $contact->id; ?>"-->

</div>

<?php if($id > 0) {?>
<div class="modal fade " id="myModal" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update</h4>
        </div>
        <div class="modal-body">
        <h3><i>Welcome, Here you can update your contact(s) info!</i></h3>
          <?php foreach ($single_contact as $contact): ?>
		<!-- Fetching All Details of Selected Student From Database And Showing In a Form -->

		<!--<p>Update contacts</p>-->
		<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_student_id1"?>" id="userForm" class"form-inline">
		<label id="hide">Id :</label>
		<input type="text" id="hide" name="id" value="<?php echo $contact->id; ?>"><br>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Email :</label>
		<input type="text" name="email" class="col-sm-6" value="<?php echo $contact->email; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">First Name :</label>
		<input type="text" name="first_name" class="col-sm-6"  value="<?php echo $contact->first_name; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Last Name :</label>
		<input type="text" name="last_name" class="col-sm-6" value="<?php echo $contact->last_name; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Phone Number :</label>
		<input name="phone_number" class="col-sm-6" value="<?php echo $contact->phone_number; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Address :</label>
		<input type="text" name="address" class="col-sm-6" value="<?php echo $contact->address; ?>"><br>
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">City :</label>
		<input type="text" name="city" class="col-sm-6" value="<?php echo $contact->city; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">State:</label>
		<input type="text" name="state" class="col-sm-6" value="<?php echo $contact->state; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Zip Code :</label>
		<input type="text" name="zip_code" class="col-sm-6" value="<?php echo $contact->zip_code; ?>">
		</div>
		</div>
		
		<div class="row">
    	<div class="form-group">
		<label class="col-sm-3 control-label">Birthday :</label>
		<input type="text" name="birthday" class="col-sm-6" placeholder = "06/21/1989" value="<?php echo $contact->birthday; ?>">
		</div>
		</div>
		<!-- add contact to group -->
		<div class="row dropdown">
    	<div class="form-group col-xs-4">
		<?php echo form_label('Group :'); ?> <?php echo form_error('group_id'); ?> 
		<?php echo form_dropdown('group_id', $group_id); ?>
		</div>
		</div>

		<input type="submit" id="submit" name="submit" value="Update" class="btn btn-success">
		</form>

		 <?php endforeach; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div><!--footer-->
      </div><!--content--> 
    </div><!--dialog-->  
  </div><!--modal-->
<?php } ?>


</div> <!-- end wrapper -->


<script type="text/javascript">  
	$(function(){   
    	$("#myModal").modal();
    });
</script>

<script>
	$('table').filterTable(); //if this code appears after your tables; otherwise, include it in your document.ready() code.
</script>

</div>

<?php include_once('footer.php'); ?>

