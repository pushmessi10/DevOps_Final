<?php
defined('BASEPATH') OR exit('No direct script access 
allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Dance_Classes</title>
        <script language="javascript">

                function verify() 
       {
       
                   
                   if (document.form1.Name.value == "")
                   {
                       alert("Please give the name");
                       document.form1.Name.focus();
                       return false;
                   }
       
                   
       
                   if (document.form1.Address.value == "") 
                   {
                       alert("Please give address");
                       document.form1.Address.focus();
                       return false;
                   }
       
                  return( true );
       }
           
       </script>
</head>

<!-- Creating Form -->

<body 
background="https://previews.123rf.com/images/pitta/pitta1506/pitta150600056/41494401-bokeh-light-color-background.jpg">

        <center><b>
                <h1 style="color:rgba(7, 7, 2, 
0.527);">VPV DANCE CLASSES</h1></b></center>
                <h1 style="color:rgba(7, 7, 2, 
0.527);">REGISTRATION FORM</h1></b></center>
        <center><h3>Please fill the following form to complete 
registration.</h3></center>
        <table border=1 align=center bgcolor="Lavender" 
cellpadding=20px><br>
        <td colspan=6 align=center><b>STUDENT INFORMATION</td> 
        <form action="/welcome/book" method="POST">
        <tr>
        <td>Name:</td><td> <input type = "text" name = "Name" 
size=30 maxlength=30></td>
        </tr>
        <tr>
        <td>Phone_No :</td> <td><input type = "text" name = 
"Phone_No" size=30 maxlength=30></td>
        </tr>
        <tr>
        <td>Address :</td><td><textarea name="Address" 
id="Address" size=30 maxlength=30></textarea> </td>
        </tr>
        <tr>
        <td>Email :</td> <td><input type = "text" name = 
"Email" size=30 maxlength=30></td>
        </tr>
        
        <p>
        <tr><td>Date: 
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
        <option value="1">Jan</option> 
        <option value="2">Feb</option> 
        <option value="3">Mar</option> 
        <option value="4">Apr</option> 
        <option value="5">May</option> 
        <option value="6">Jun</option> 
        <option value="7">Jul</option> 
        <option value="8">Aug</option> 
        <option value="9">Sep</option> 
        <option value="10">Oct</option> 
        <option value="11">Nov</option> 
        <option value="12">Dec</option> 
        </select> 
          
        <select name="Year" id="Year"> 
          
        <option value="-1">Year:</option> 
        <option value="1992">1992</option>
        <option value="1993">1993</option>       
        <option value="1994">1994</option> 
        <option value="1995">1995</option> 
        <option value="1996">1996</option> 
        <option value="1997">1997</option> 
        <option value="1998">1998</option> 
        <option value="1999">1999</option> 
        <option value="2000">2000</option> 
        </select> 
        </td> 
        </tr></td></tr> 
        
        <tr><td> 
        Dance_Type:
        <td><select name="dance_type" id="dance_type"> 
        <option value="-1" selected>select..</option> 
        <option value="Bharatnatyam">Bharatnatyam</option> 
        <option value="Hip-Hop">Hip-Hop</option>
        <option value="Bollywood">Bollywood</option>
        <option value="Jazz">Jazz</option> 
        <option value="Slow-Mo">Slow-Mo</option>         
        </select></td> 
        </td></tr> 

        
        <tr><td colspan =2 align="center"> 
        <button type="submit">submit</button>
        <button type="Reset">Reset</button></td></tr>
        </table>
        </form>
        </div>
        </div>
        </div>
        </div>


</body>
</html>


