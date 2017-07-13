<?php 
require('conn1.php');
require_once('header.php');

extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from reg_details where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
$dob=$yy."-".$mm."-".$dd;

$query="insert into reg_details values ('$n','$mob','$e','$tad','$pad','$pcm','$tot','$tota','$fn','$mn','$fmob','$skill','$sc','$w','$gen','$dob','$pay')";
mysqli_query($conn,$query);

//upload image
$err="<font color='blue'>Registration successfull !!</font>";



}}

?>
<center><h1>Registration Form</h2></center><br />
	<form method="post" enctype="multipart/form-data">
		<fieldset>
    <legend>Personal information:</legend>	
<br />
<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your Name*:</td>
					<Td><input  type="text"  class="form-control" name="n" required/>                                   </td>
				  </tr>
<tr>
					<td>Enter Your Mobile:</td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				<tr>

                                   <tr>
					<td>Enter Your Father's name*:</td>
					<Td><input  type="text"  class="form-control" name="fn" required/> </td>
				  </tr>
                                      <tr>
					<td>Enter Your Fathers Contact Number*: </td>
					<Td><input  class="form-control" type="number" name="fmob" required/></td>
				</tr>

			    <tr>
					<td>Enter Your Mother's name*:</td>
					<Td><input  type="text"  class="form-control" name="mn" required/></td>
				</tr>
			     <tr>
<tr>
					<td>Select Your Gender*:</td>
					<Td>
				Male<input type="radio" name="gen" value="M" required/>
				Female<input type="radio" name="gen" value="F"/>	
					</td>
				</tr>
		
			      				
				<tr>
					<td>Enter Your DOB*:</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
<tr>
					<td>Enter Your email id: </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
<tr>
<td>Enter your School name*:</td>
<td><textarea name="sc" rows="3" cols="20" required>

</textarea>
</td>
</tr>

<tr>
					<td>Enter Your Marks (in Class 11th)*: </td>
					<Td><input  class="form-control" type="number" placeholder="PCM" name="pcm" required/></td><Td><input  class="form-control" type="number" placeholder="Total" name="tot" required/></td>

				</tr>
<tr>
					<td>Enter Your Marks (in Class 10th)*: </td>
					<Td><input  class="form-control" type="number" placeholder="Total" name="tota" required/></td>

				</tr>


			
				<td>Enter your Permanent Address*:</td>
<td><textarea name="pad" rows="4" cols="20" required>
</textarea>
</td>
</tr>
<tr>
<td>Enter Address of Correspondence:</td>
<td><textarea name="tad" rows="4" cols="20" >
</textarea>
</td><td>  <input type="checkbox" name="tem" value="Same as Permanent Address"> Same as Permanent Address
<br></td>
</tr>
<tr>
<td>Enter your Skills:</td>
<td><textarea name="skill" rows="2" cols="20" required>
For Example, C++(Beginner),Java(Intermediate) etc.
</textarea>
</td>
</tr>
<tr>
<td>
Workshop Topic*:
</td>

<td>
Web Development<input type="radio" name="w" value="Web development" required/>
				Application development<input type="radio" name="w" value="App development"/>	
</td>
</tr>


			

				<tr>
<td>  <input type="checkbox" name="term" value="accept" required>I agree to all <a href="https://brajkishorupadhyay.000webhostapp.com/assets/images/conditions.docx" target="_blank">terms and Conditions </a>
<br></td>
				</tr>	
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Submit" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
               </fieldset>
		</form>
	</body>
</html>