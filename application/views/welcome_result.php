<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dubaria</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui.theme.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
<div id="header">
	
</div>
<div class="container">
	<div class="row">
		<p>Thank you for the registration. Here is the information that you entered.</p>
	</div>
	<div class="row">
		<table class="table">
			<tr>
				<td><em>Name</em></td>
				<td><?php echo $Name ?></td>
			</tr>
			<tr>
				<td><em>Phone No</em></td>
				<td><?php echo $Phone_No ?></td>
			</tr>
			<tr>
				<td><em>Address</em></td>
				<td><?php echo $Address ?></td>
			</tr>
            <tr>
                <td><em>date</em></td>
                <td><?php echo $Date of Birth ?></td>
            </tr>
            <tr>
                <td><em>dance_type</em></td>
                <td><?php echo $Dance_type ?></td>
            </tr>
      </table>
	</div>
	<div class="row">
		<button type="button" id="back" class="btn btn-primary">Make new registration</button>
	</div>
</div>

</body>
</html>
