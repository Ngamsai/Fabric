<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action='/customers/<?php echo $id; ?>/editsave' method="post">
	<table>
	<tr>
	<td>Customer_Name : </td>
	<td><input type="text" name="nameCus"></td>
</tr>
<tr>
	<td>CustomerID : </td>
	<td><input type="text" name="customerID"></td>
</tr>
<tr>
	<td>Address : </td>
	<td><input type="text" name="Address"></td>
</tr>
<tr>
	<td>Tel : </td>
	<td><input type="text" name="tel"></td>
</tr>
<tr>
	<td><input type="submit" name="submit" value="Edit"></td>
</tr>
		
	</table>
	</form>
	<form action="/customers">
    <input type="submit" value="Back">
	</form>

</body>
</html>