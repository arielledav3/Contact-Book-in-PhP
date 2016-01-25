<?php include_once('header.php'); ?>
<div class="container ">

<?php echo form_open('address', 'class = "form-horizontal" '); ?>
<h1>Add Contact</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Contact inserted successfully</h3></CENTER><br>
<?php } ?>
<div class="row">
 <div class="form-group col-xs-4">
<?php echo form_label('Email '); ?> <?php echo form_error('email'); ?>
<?php echo form_input(array('id' => 'email','type' => 'email', 'name' => 'email' , 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('First Name '); ?> <?php echo form_error('first_name'); ?>
<?php echo form_input(array('id' => 'first_name', 'name' => 'first_name', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('Last Name '); ?> <?php echo form_error('last_name'); ?>
<?php echo form_input(array('id' => 'last_name', 'name' => 'last_name' , 'class' => 'form-control', 'required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('Phone Number '); ?> <?php echo form_error('phone_number'); ?>
<?php echo form_input(array('id' => 'phone_number', 'name' => 'phone_number',
	'placeholder'=> '(123)456-7890','class' => 'form-control','required'=> 'required')); ?>
</div>
</div>
<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('Address '); ?> <?php echo form_error('address'); ?>
<?php echo form_input(array('id' => 'address', 'name' => 'address', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('City '); ?> <?php echo form_error('city'); ?>
<?php echo form_input(array('id' => 'city', 'name' => 'city', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('State '); ?> <?php echo form_error('state'); ?>
<?php echo form_input(array('id' => 'state', 'name' => 'state', 
	'placeholder'=> 'Illinois', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('Zip Code '); ?> <?php echo form_error('zip_code'); ?>
<?php echo form_input(array('id' => 'zip_code', 'name' => 'zip_code', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row">
<div class="form-group col-xs-4">
<?php echo form_label('Birthday '); ?> <?php echo form_error('birthday'); ?>
<?php echo form_input(array('type' => 'text','id' => 'birthday', 'name' => 'birthday',
'placeholder'=> '06/21/1989', 'class' => 'form-control','required'=> 'required')); ?>
</div>
</div>

<div class="row"> 
<div class="form-group col-xs-4">
<!-- add contact to group -->
<?php echo form_label('Group '); ?> <?php echo form_error('group_id'); ?>
<?php echo form_dropdown('group_id',$group_id); ?>
</div>
</div>

<div class="form-group">
<?php echo form_submit(array('id' => 'submit', 'value' => 'Add Contact', 'class' => 'btn btn-success')); ?>
<?php echo form_close(); ?>
</div>

</div>
</div>

<?php include_once('footer.php'); ?>
