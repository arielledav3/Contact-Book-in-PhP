<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<style>
	body{padding: 2cm 4cm 3cm 4cm;}
</style>
</head>
<body class="form-horizontal text-center lead">
<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

    <div class="row">
    	<div class="form-group">
             <?php echo form_label(lang('create_user_fname_label'), 'first_name',array('class' => 'col-sm-3 control-label'));?> 
            <div class="col-sm-6"> <?php echo form_input($first_name,NULL,'class="form-control"');?></div>
        </div>
	</div>


     <div class="row">
    	<div class="form-group">
           <?php echo form_label(lang('create_user_lname_label'), 'last_name',array('class' => 'col-sm-3 control-label'));?>
            <div class="col-sm-6"><?php echo form_input($last_name,NULL,'class="form-control"');?></div>
      </div>
      </div>

   <div class="row">
    <div class="form-group">
            <?php echo form_label(lang('create_user_company_label'), 'company',array('class' => 'col-sm-3 control-label'));?> 
            <div class="col-sm-6"><?php echo form_input($company,NULL,'class="form-control"');?></div>
      </div>
      </div>

    <div class="row">
    <div class="form-group">
            <?php echo form_label(lang('create_user_email_label'), 'email',array('class' => 'col-sm-3 control-label'));?> 
            <div class="col-sm-6"><?php echo form_input($email,NULL,'class="form-control"');?></div>
      </div>
    </div>

    <div class="row">
    <div class="form-group">
           <?php echo form_label(lang('create_user_phone_label'), 'phone',array('class' => 'col-sm-3 control-label'));?>
            <div class="col-sm-6"><?php echo form_input($phone,NULL,'class="form-control"');?></div>
      </div>
      </div>

     <div class="row">
    <div class="form-group">
            <?php echo form_label(lang('create_user_password_label'), 'password',array('class' => 'col-sm-3 control-label'));?> 
            <div class="col-sm-6"><?php echo form_input($password,NULL,'class="form-control"');?></div>
      </div>
      </div>

    <div class="row">
    <div class="form-group">
            <?php echo form_label(lang('create_user_password_confirm_label'), 'password_confirm',array('class' => 'col-sm-3 control-label'));?> 
            <div class="col-sm-6"><?php echo form_input($password_confirm,NULL,'class="form-control"');?></div>
      </div>
      </div>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?></p>

<?php echo form_close();?>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
