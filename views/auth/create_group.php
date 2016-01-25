<html>
<head>
<title>Create Group</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
</head>
<body>
<nav class="navbar navbar-default">
<ul id ="navbar" class="nav navbar-nav">
<li><a href="<?= site_url('Welcome/') ?>">Home</a></li>
<li><a href="<?= site_url('update_ctrl/show_student_id') ?>">Update</a></li>
<li><a href="<?= site_url('address/') ?>">Add a Contact</a></li>
<li class="active"><a href="<?= site_url('auth/create_group') ?>">Create Group</a></li>
<li><a href="<?= site_url('names/show_student_id') ?>">Show contacts</a></li>
<li><a href="<?= site_url('auth/logout') ?>">Logout</a></li>
</ul>
</nav>
<div id="gr" style="text-align:center">
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

<?php echo form_close();?>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>