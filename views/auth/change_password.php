<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body class="form-horizontal text-center">
<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <label for="email" class="col-sm-4 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
        	<div class="row">
    		<div class="form-group">
            <div class="col-sm-4"><?php echo form_input($old_password,NULL,'class="form-control"');?></div>
            </div>
            </div>
      </p>

      <p>
            <label for="new_password" class="col-sm-4 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
            <div class="row">
    		<div class="form-group">
            <div class="col-sm-4"><?php echo form_input($new_password,NULL,'class="form-control"');?></div>
            </div>
            </div>
      </p>

      <p>
            <label for="new_password" class="col-sm-4 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
            <div class="row">
    		<div class="form-group">
            <div class="col-sm-4"><?php echo form_input($new_password_confirm,NULL,'class="form-control"');?></div>
            </div>
            </div>
      </p>

      <?php echo form_input($user_id);?>
      <p><?php echo form_submit('submit', lang('change_password_submit_btn'),'class="btn btn-primary"');?></p>

<?php echo form_close();?>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>



