<!DOCTYPE html>

<html>
<head>
<title>Address Book</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
  // This identifies your website in the createToken call below
  Stripe.setPublishableKey('pk_test_BuiNb5E0l9GY9nVOJYFNHA5e');
  // ...
</script>
<script>
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>



</head>

<body>
<div class="navbar-wrapper">
<div class="container">
<nav class="navbar navbar-inverse navbar-static-top">
<div class="container">
<div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url('Welcome/') ?>">Address Book</a> </div>
<div id="navbar" class="navbar-collapse collapse">
<ul id ="navbar" class="nav navbar-nav">
<li ><a href="<?= site_url('Welcome/') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
<li><a href="<?= site_url('update_ctrl/show_student_id') ?>">Update</a></li>
<li><a href="<?= site_url('address/') ?>">Add a Contact</a></li>
<li><a href="<?= site_url('group') ?>">Contact Groups</a></li>
<li><a href="<?= site_url('names/show_student_id') ?>">Show Contacts</a></li>
<li><a href="<?= site_url('auth/logout') ?>">Logout</a></li>
</ul>
</div>
</div>
</nav>


</div>
</div>


		
