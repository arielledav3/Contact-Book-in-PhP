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
<table class="table table-hover table-striped" >
<thead>
<tr class="info">
	<th><a href="<?= site_url('first_name/first_order') ?>" class="btn btn-primary">First Name</a></th>
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
          <h4 class="modal-title">View Contacts</h4>
        </div>
        <div class="modal-body text-center lead">
        <h3><i>Welcome, Here you can view your contact(s) info!</i></h3>
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
			<a href="<?php echo base_url() . "index.php/names/delete_student_id/" . $contact->id; ?>" class="btn btn-danger" onclick="return confirm('Yes, Please Delete Contact!');">
			Delete</a>

			<?php endforeach; ?>
		 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div><!--footer-->
      </div><!--content--> 
    </div><!--dialog-->  
  </div><!--modal-->
  
  <!-- start example group each contact by first name and then have links at the top to get user to correct group -->
  <!-- start with links at the top -->
  <div id="links_2_groups" class="container">
  	<div class="row" style="width:100%">
  		<span><a href="#nums">#</a></span>
  		<span><a href="#A">A</a></span>
  		<span><a href="#B">B</a></span>
  		<span><a href="#C">C</a></span>
  		<span><a href="#D">E</a></span>
  		<span><a href="#E">E</a></span>
  		<span><a href="#F">F</a></span>
  		<span><a href="#G">G</a></span>
  		<span><a href="#H">H</a></span>
  		<span><a href="#I">I</a></span>
  		<span><a href="#J">J</a></span>
  		<span><a href="#K">K</a></span>
  		<span><a href="#L">L</a></span>
  		<span><a href="#M">M</a></span>
  		<span><a href="#N">N</a></span>
  		<span><a href="#O">O</a></span>
  		<span><a href="#P">P</a></span>
  		<span><a href="#Q">Q</a></span>
  		<span><a href="#R">R</a></span>
  		<span><a href="#S">S</a></span>
  		<span><a href="#T">T</a></span>
  		<span><a href="#U">U</a></span>
  		<span><a href="#V">V</a></span>
  		<span><a href="#W">W</a></span>
  		<span><a href="#X">X</a></span>
  		<span><a href="#Y">Y</a></span>
  		<span><a href="#Z">Z</a></span>
  	</div>
  </div>
  
   <div>
  	<section id="nums">
  		<h2 class="text-center">#</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(is_numeric($contact->first_name[0])) { ?>
  			    <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <a class="jump" href="<?php echo base_url() . "index.php/api_contact/user/" . $contact->id; ?>" data-target="#theModal"><?php echo $contact->first_name; ?></a></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
  <div> 
  	<section id="A">
  		<h2 class="text-center"> A</h2>
  	  <div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'a') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			   </div>
  			<?php } ?>
  		<?php endforeach; ?>
  	 </div>
  	
  	</section>
 </div>
 
 <div>
  	<section id="B">
  		<h2 class="text-center"> B</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'b') == 0) { ?>
  			    <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
  <div>
  	<section id="C">
  		<h2 class="text-center"> C</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'c') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="D">
  		<h2 class="text-center"> D</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'d') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="E">
  		<h2 class="text-center"> E</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'e') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			   </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="F">
  		<h2 class="text-center"> F</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'f') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="G">
  		<h2 class="text-center"> G</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'g') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="H">
  		<h2 class="text-center">H</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'h') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="I">
  		<h2 class="text-center">I</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'i') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="J">
  		<h2 class="text-center">J</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'j') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
 <div>
  	<section id="K">
  		<h2 class="text-center">K</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'k') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="L">
  		<h2 class="text-center">L</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'l') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="M">
  		<h2 class="text-center">M</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'m') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
</div>

<div>
  	<section id="N">
  		<h2 class="text-center">N</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'n') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="O">
  		<h2 class="text-center">O</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'o') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="P">
  		<h2 class="text-center">P</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'p') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			   </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
</div>

<div>
  	<section id="Q">
  		<h2 class="text-center">Q</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'h') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	</section>
 </div>
 
<div>
  	<section id="R">
  		<h2 class="text-center">R</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'r') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
</div>

<div>
  	<section id="S">
  		<h2 class="text-center">S</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'s') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
<div>
  	<section id="T">
  		<h2 class="text-center">T</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'t') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			   </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
  <div>
  	<section id="U">
  		<h2 class="text-center">U</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'u') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="V">
  		<h2 class="text-center">V</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'v') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="W">
  		<h2 class="text-center">W</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'w') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="X">
  		<h2 class="text-center">X</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'x') == 0) { ?>
  			    <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="Y">
  		<h2 class="text-center">Y</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'y') == 0) { ?>
  			  <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  			  </div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
   <div>
  	<section id="Z">
  		<h2 class="text-center">Z</h2>
  		<div class="row">
  		<?php foreach ($contacts as $contact): ?>
  			<?php if(strcasecmp($contact->first_name[0],'z') == 0) { ?>
  			   <div class="col-xs-12 col-sm-6 col-md-4">
  				<span class="glyphicon glyphicon-leaf"> <?php echo $contact->email; ?></span><br>
  				</div>
  			<?php } ?>
  		<?php endforeach; ?>
  		</div>
  	
  	</section>
 </div>
 
 <div class="modal fade" id="theModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Contacts</h4>
        </div>
        <div class="modal-body text-center lead">
        <h3><i>Welcome, Here you can view your contact(s) info!</i></h3>
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
			<a href="<?php echo base_url() . "index.php/names/delete_student_id/" . $contact->id; ?>" class="btn btn-danger" onclick="return confirm('Yes, Please Delete Contact!');">
			Delete</a>

			<?php endforeach; ?>
		 </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div><!--footer-->
      </div><!--content--> 
    </div><!--dialog-->  
  </div><!--modal-->
  
<script type="text/javascript">       
   $('.jump').on('click', function(e) {
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
		test += '<a href="<?php echo base_url() . "index.php/names/delete_student_id/" . $contact->id; ?>" class="btn btn-danger delete_btn" >Delete</a>';
		}
		 $('.modal-body').html(test);
		 $('#myModal').modal('show');
		}).fail(function () {
		alert('Oh no! A problem occured');
		});
	});	
</script>
 

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
		test += '<a href="<?php echo base_url() . "index.php/names/delete_student_id/" . $contact->id; ?>" class="btn btn-danger delete_btn" >Delete</a>';
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

