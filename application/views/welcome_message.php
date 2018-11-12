<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Pushkar</title>

</head>
<body background="https://centerstudioarchitecture.com/wp/wp-content/uploads/2017/02/109WParrish_After_5.jpg">
<div id="header">

</div>
<div class="container">
        <div class="row">
           <h3>Please fill the following form to book a  ticket</h3>
        </div>
        <div class="row">




        <form action="/welcome/book" method="POST">
     


        <center><div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control"
id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enteremail">
          </div> </center>



         <center>  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="Name" id="Name">
                   </div> </center>



         <center>  <div class="form-group">
                      <label for="DOB">Date of Birth</label>
                      <input type="text" id="datepicker" name="DOB">
                   </div> </center>
          


         <center> <div class="form-group">
                     <label for="address">Address</label>
                     <input type="text" id="address" name="Address">
                  </div>  </center>


        <center>  <div class="form-group">
                <label for="Dance_Form">Dance Type</label>
                <select class="form-control" name="Dance Type" id="type">
                  <option>Hip-Hop</option>
                  <option>Jazz</option>
                  <option>Classical</option>
                  <option>Bollywood</option>
                </select>
          </div> </center>
         
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        </div>
        </div>
        </div>


</body>
</html>

