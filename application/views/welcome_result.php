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
                                <td><em>Email</em></td>
                                <td><?php echo $email ?></td>
                        </tr>
                        <tr>
                                <td><em>Name</em></td>
                                <td><?php echo $Name ?></td>
                        </tr>
                        <tr>
                                <td><em>Date of Birth</em></td>
                                <td><?php echo $DOB ?></td>
                        </tr>
                        <tr>
                                <td><em>Address</em></td>
                                <td><?php echo $Address ?></td>
                        </tr>
                        <tr>
                                <td><em>Dance Type</em></td>
                                <td><?php echo $Dance Type ?></td>
                        </tr>
                </table>
        </div>
        <div class="row">
                <button type="button" id="back" class="btn
btn-primary">Make new booking</button>
        </div>
</div>

</body>
</html>

