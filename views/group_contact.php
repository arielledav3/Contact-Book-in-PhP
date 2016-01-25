<?php include_once('header.php'); ?>
<div class="container">
<!-- Button trigger modal -->

<button type="button" class="btn btn-success btn-lg glyphicon glyphicon-plus" data-toggle="modal" data-target="#myGroup">
  Add-Group
</button>

<div class="modal fade" id="myGroup">
  <div class="modal-dialog">
    <div class="modal-content form-horizontal text-center">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Create A Group</h4>
      </div>
      <div class="modal-body1";">
			<form method="POST" action="api/user">

			<div class="row">
			 <div class="form-group">
			<div class="col-sm-4 control-label"><label>Group Name</label></div>
			<div class="col-xs-5"><input type="text" id ="name" name ='name' class ='form-control'></div>
			</div>
			</div>

			<div class="row">
			 <div class="form-group">
			<div class="col-sm-4 control-label"><label>Description</label></div>
			<div class="col-xs-5"><input type ="text" id = 'description' name ='description' class ='form-control'></div>
			</div>
			</div>

			<input type="submit" id ='submit' value ='Add' class = 'submit-form btn btn-success text-center'>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- show table of contact groups and allow deleting of them -->
<div id="grid">
<h2> Current Groups </h2>
<div class="row">
	<div class="form-group col-xs-4">
		<div class="input-group"> <span class="input-group-addon">Search</span>

			<input id="filter" type="text" class="form-control" placeholder="Type here...">
		</div>
	</div>
</div>
<br>
<table class="table table-hover table-striped">
<thead>
<tr class="info">
	<th>Group Name</th>
	<th>Description </th>
	<th width="100">View</th>
	<th width="100">Delete</th>
</tr>
</thead>
<tbody class="searchable">
<?php foreach ($groups as $group): ?>
<?php $group_id1 = $group->id; ?>
<tr>
<td class="text-capitalize"><?php echo $group->name; ?></td>
<td class="text-capitalize"><?php echo $group->description; ?></td>
<td><a class="btn btn-default modal_btn" href="<?php echo base_url() . "index.php/api/user/" . $group->id; ?>" data-target="#userModal">View Group</a></td>
<td><a href="<?php echo base_url() . "index.php/api/user/" . $group->id; ?>" class="btn btn-danger delete_btn" data-target="#userModal">Delete</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>


<div id="userModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="myModalLabel" class="modal-title">Group(s)</h4>
        </div>
        <div class="modal-body" id="myModal_body">
        	<h3><i>View Your Group(s)</i></h3>
				<p> Modal Stuff </p>
			</div>
		<div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div><!--footer-->
      </div><!--content--> 
    </div><!--dialog-->  
  </div><!--modal-->


<!-- use rest api now for deleting -->
<script type="text/javascript">
$('.modal_btn').on('click', function(e) {
		e.preventDefault();
		$.ajax({
		url: $(this).attr('href'),
		}).done(function(data) {
		var i;
		var test = '';
		for(i in data){
		test += '<b>';
		test += '•';
		test += data[i].first_name;
		test += ' ';
		test += data[i].last_name;
		test += ' ';
		test += data[i].email;
		test += '</b>';
		test += '<br>';
		}
		 $('.modal-body').html(test);
		 $('#userModal').modal('show');
		}).fail(function () {
		alert('Empty');
		});	
		
	});	

</script>
<script type="text/javascript">
	$('.delete_btn').bind('click', function (e) {
		e.preventDefault();
		var test = confirm("Delete Group?");
	if(test == true){
		$.ajax({
			// URL from the link that was clicked on.
			type: 'DELETE',
			url: $(this).attr('href'),
			}).done(function (data, textStatus) {
				window.location.reload();

			}).fail(function (xhr, textStatus, errorThrown) {

				alert('Error with Ajax');

		});
	 }
 });																			
																									
</script>

<script type="text/javascript">
$(".submit-form").on('click', function() {
	var name = $('#name').val();
	var description = $('#description').val();
	var data = { name : name, description: description };
	var url = $(this).attr('action');
	$.post(url,data,function(result){
		window.location.reload();
 	}).error(function(t1,t2,t3){
 		alert("failed");
 	});
 });
 
				
</script>


</div>



<?php include_once('footer.php'); ?>


