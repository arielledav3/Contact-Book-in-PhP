<?php include_once('header.php'); ?>
<div class="container">
  
<div id="wrapper">
<h1>Current Contacts</h1>
<br>
<div id="grid">
<div class="row">
	<div class="form-group col-xs-4">
		<div class="input-group"> <span class="input-group-addon">Search</span>

			<input id="filter" type="text" class="form-control" placeholder="Type here...">
		</div>
	</div>
</div>
<br>
<!--====== Displaying Fetched Names from Database in Links ========-->
<table class="table table-hover table-striped">
<thead>
<tr class="info">
	<th><a href="<?= site_url('first_name/first_order/') ?>" class="btn btn-primary">First Name</a></th>
	<th><a href="<?= site_url('last_name/last_order') ?>" class="btn btn-primary">Last Name</a></th>
	<th width="100">View</th>
</tr>
</thead>
<tbody class="searchable">
<?php foreach ($contacts as $contact): ?>
<tr>
<td class="text-uppercase"><?php echo $contact->first_name; ?></td>
<td class="text-uppercase"><?php echo $contact->last_name; ?></td>
<td><a class="btn btn-info glyphicon glyphicon-user" href="<?php echo base_url() . "index.php/api_contact/user/" . $contact->id; ?>" data-target="#myModal">Details</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Order By First Name</h4>
        </div>
        <div class="modal-body text-center lead">
       		 <h3><i>View By First Name</i></h3>
			<!--====== Displaying Fetched Details from Database ========-->
			<?php foreach ($single_contact as $contact): ?>
			<p>Contact Detail</p>
			 <?php echo $contact->email; ?><br>
		    <?php echo $contact->first_name; ?> 
			<?php echo $contact->last_name; ?><br>
			<?php echo $contact->phone_number; ?><br>
			<?php echo $contact->address; ?><br>
			<?php echo $contact->city; ?><br>
			<?php echo $contact->state; ?><br>
			<?php echo $contact->zip_code; ?><br>
			<?php echo $contact->birthday; ?><br>
			<!--====== Delete Button ========-->
			<a href="<?php echo base_url() . "index.php/first_name/delete_student_id/" . $contact->id; ?>" class="btn btn-danger" onclick="return confirm('Yes, Please Delete Contact!');">
			Delete</a>

			<?php endforeach; ?>
			</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div><!--footer-->
      </div><!--content--> 
    </div><!--dialog-->  
  </div><!--modal-->
  

</div>

<script type="text/javascript">       
   $('.glyphicon-user').on('click', function(e) {
		e.preventDefault();
		$.ajax({
		url: $(this).attr('href'),
		}).done(function(data) {
		var i;
		var test = '';
		for(i in data){
		test += data[i].first_name;
		test += ' ';
		test += data[i].last_name;
		test += '<br>';
		test += data[i].email;
		test += '<br>';
		test += data[i].phone_number;
		test += '<br>';
		test += data[i].address;
		test += '<br>';
		test += data[i].city;
		test += ', '
		test += data[i].state;
		test += '<br>';
		test += data[i].zip_code;
		test += '<br>';
		test += data[i].birthday;
		test += '<br>';
		test += '<a href="<?php echo base_url() . "index.php/names/delete_student_id/" . $contact->id; ?>" class="btn btn-danger" onclick="return confirm("Yes, Please Delete Contact!");" >Delete</a>';
		}
		 $('.modal-body').html(test);
		 $('#myModal').modal('show');
		}).fail(function () {
		alert('Oh no! A problem occured');
		});
	});	
</script>

<script>
$("#search").keyup(function() {
    var value = this.value.toUpperCase();

    $("table").find("tr").each(function(index) {
        if (index === 0) return;
        var id = $(this).find("td").first().text();
        $(this).toggle(id.indexOf(value) !== -1);
    });
});
</script>
</div>
<?php include_once('footer.php'); ?>
