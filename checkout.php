<?php session_start();
include "header.php";
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">
		
<?php include  "connect.php"; ?>

	<form action="order.php" method="post">

		<table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h3 align="center" style="font-size: 1.3em;">Fill up details to deliver your item</h3> </th>
		<br>
            </tr>
			    <tr align="center">

			    	<td style="color: black">  Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: black; background-color: white" required="" pattern="[a-z,A-Z]*"></td>
			    		
			    </tr>

			    <tr align="center">
			    	<td style="color: black">   Enter Mobile no (10) <br>
			        <input type="no" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: black; background-color: white" required="" pattern="\d{10}"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: black">   Enter Email address <br>
			        <input type="Email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: black; background-color: white"></td>
			    </tr>

                <tr align="center">
                	<td style="color: black"> Enter address <br>
                 <input type="text" name="ad" placeholder="enter your address" style="width: 100%; padding: 50px; color: black; background-color: white">
                </tr>	

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Confirm Order" style="height: 50px; background-color:white; color: black; padding: 10px; width: 30%;"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>