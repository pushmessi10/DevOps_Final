<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>VPV</title>
	
<body background="https://www.ourstyle.life/wp-content/uploads/2017/11/dancing-feet.jpg">	
</head>

<!-- Creating Form -->
<meta charset="utf-8">
	
<body bgcolor="white"><center><font size=5><body>

<div id="header">
	
</div>
<div class="container">
	<div class="row">
		<p>Please fill the following form to book complete the registration</p>
	</div>
	<div class="row">
	<form action="/welcome/book" method="POST">

</form>
<b><h2>REGISTRATION FORM</h2></b></center>
<table border=1 align=center bgcolor="Lavender" cellpadding=20px><br>
<td colspan=6 align=center><b>STUDENT INFORMATION</td>
<form name ="registration Form" action = "/welcome/book" method="POST">
<tr>
<td>Name:</td><td> <input type = "text" name = "Name" size=30 maxlength=30></td>
</tr>
<tr>
<td>Phone_No :</td> <td><input type = "text" name = "Phone No" size=30 maxlength=30></td>
</tr>
<tr>
<td>Address :</td><td><textarea name="Address" id="Address" size=30 maxlength=30></textarea> </td>
</tr>

<p>
<tr><td>Date of Birth:
<td>
<select name="date" id="date">
<option value="-1">Date:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>

<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>

<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>

<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>

<select id="Month" name="Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>

<select name="Year" id="Year">

<option value="-1">Year:</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2000">2001</option>
<option value="2000">2002</option>
</select>
</td>
</tr></td></tr>

<tr><td>
Dance_Type:
<td><select name="dance_type">
<option value="-1" selected>select..</option>
<option value="Bharatnatyam">Bharatnatyam</option>
<option value="Hip-Hop">Hip-Hop</option>
<option value="Jazz">Jazz</option>
</select></td>
</td></tr>


<tr><td colspan =2 align="center">
<button type="submit">submit</button>
<button type="Reset">Reset</button></td></tr>
</table>
</form>
</body>
</html>

