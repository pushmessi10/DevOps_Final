<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>VPV</title>
</head>
<body>
<div id="header">

</div>
<div class="container">
        <div class="row">
                <h3>Thank you for the registration. Here are your registration details.</h3>
        </div>
        <div class="row">
                <table class="table">
                        <tr>
                                <td><em>Name</em></td>
                                <td><?php echo $Name ?></td>
                        </tr>
                        <tr>
                                <td><em>Phone_No</em></td>
                                <td><?php echo $Phone_No ?></td>
                        </tr>
                        <tr>
                                <td><em>Address</em></td>
                                <td><?php echo $Address ?></td>
                        </tr>
                        <tr>
                                <td><em>Email</em></td>
                                <td><?php echo $Email ?></td>
                        </tr>
                        <tr>
                                <td><em>DOB</em></td>
                                <td><?php echo $dob ?></td>
                        </tr>
                        <tr>
                                <td><em>Dance_Type</em></td>
                                <td><?php echo $dance_type ?></td>
                        </tr>
                </table>
        </div><br>
       <div class="row">
		<button type="button" id="back" class="btn btn-primary">Make new booking</button>
	</div>
</div>

</body>
</html>

