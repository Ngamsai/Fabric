<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action='/employees/<?php echo $id; ?>/editsave' method="post">
	<table>
	<tr>
        <td>Employee ID : </td>
        <td><input type="text" name="employeeID"></td>
    </tr>
    <tr>
        <td>FirstName : </td>
        <td><input type="text" name="Fname"></td>
    </tr>
    <tr>
        <td>LastName : </td>
        <td><input type="text" name="Lname"></td>
    </tr>
    <tr>
        <td>Social Security Number : </td>
        <td><input type="text" name="Ssn"></td>
    </tr>
    <tr>
    <tr>
        <td>Department ID : </td>
        <td><input type="text" name="departmentID" 
        pattern="[0-9]{3}" 
        title="Three letter number code"></td>
    </tr>
    <tr>
    <tr>
        <td>Age : </td>
        <td><input type="text" name="age"> </td> 
    </tr>
    <tr>
    <tr>
        <td>Hire Date : </td>
        <td><input type="date" name="bday"></td>
    </tr>
    <tr>
    <tr>
        <td>Tel : </td>
        <td><input type="text" name="tel"></td>
    </tr>
    <tr>
    <tr>
        <td>Address : </td>
        <td><input type="text" name="address"></td>
    </tr>
    <tr>
    <tr>
        <td>Gender : </td>
        <td><input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other</td>
    </tr>
    <tr>
    <tr>
        <td>Salary : </td>
        <td><input type="text" name="salary"></td>
    </tr>
    <tr>
    <tr>
        <td>Position : </td>
        <td><select name="position" >
            <option value="employee">Employee</option>
            <option value="supervisor">Supervisor</option>
            <option value="other">Other</option>
            </select></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Add">
        <input type="reset"></td>
    </tr>	
	</table>
	</form>
	<form action="/employees">
    <input type="submit" value="Back">
	</form>

</body>
</html>