<!DOCTYPE html>
<html>
<head>
	<title>Insert Form</title>
</head>
<body>

	<form action='/departments/save' method="post">
	<table>
	<tr>
        <td>Department Name : </td>
        <td><input type="text" name="departmentname"></td>
    </tr>
    <tr>
        <td>Department ID : </td>
        <td><input type="text" name="departmentID" 
        pattern="[0-9]{3}" 
        title="Three letter number code"></td>
    </tr>
    <tr>
        <td>Supervisor : </td>
        <td><input type="text" name="supervisor"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Add">
        <input type="reset"></td>
    </tr>	
	</table>
	</form>
	<form action="/departments">
    <input type="submit" value="Back">
	</form>

</body>
</html>