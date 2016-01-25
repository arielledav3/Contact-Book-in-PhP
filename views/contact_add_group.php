<?php include_once('header.php'); ?>

<div class="container">
<div id="wrapper">
<h1>Current contacts</h1>
<div id="grid">
<p>Click On Menu</p>
<!--====== Displaying Fetched Names from Database in Links ========-->
<table style="width:100%">
<?php foreach ($contacts as $contact): ?>
<tr>
<td><?php echo $contact->first_name; ?></td>
<td><?php echo $contact->last_name; ?></td>
<td><a href="<?php echo base_url() . "index.php/names/show_student_id/" . $contact->id; ?>">View Details</a></td>
</tr>
<?php endforeach; ?>
</table>
</div>
</div>

</div>
<?php include_once('footer.php'); ?>


