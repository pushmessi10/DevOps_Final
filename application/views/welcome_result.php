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
                <p>Thank you for the registration. Here are your registration details.</p>
        </div>
        <div class="row">
                <table class="table">
                        <tr>
                                <td><em>Name</em></td>
                                <td><?php echo $Name ?></td>
                        </tr>
                        <tr>
                                <td><em>Phone_No</em></td>
                                <td><?php echo $Phone No ?></td>
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
                                <td><?php echo $date ?></td>
                        </tr>
                        <tr>
                                <td><em>Dance_Type</em></td>
                                <td><?php echo $dance_type ?></td>
                        </tr>
                </table>
        </div>
        <div class="row">
                <button type="button" id="back" class="btn
btn-primary">Make new registration</button>
        </div>
</div>

</body>
</html>

