
$router->get('/employee', function() {
    $employees = Employee::all();
	
	echo "<h1>All Employees</h1>";
    echo "<table border=2> 
    <tr><center>
    <th>รหัสพนักงาน</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th> 
    <th>เลขบัตรประจำตัวประชาชน</th>    
    <th>แผนก</th>
    <th>อายุ</th>  
    <th>วันที่เริ่มทำงาน</th>
    <th>เบอร์โทรศัพท์</th> 
    <th>เพศ</th> 
    <th>เงินเดือน</th>
    <th>ตำแหน่ง</th>
    <th>แก้ไข</th>   
    <th>ลบ</th>     
    </tr></center> ";
    
        foreach ($employees as $employee) {
            echo "
			<tr>
			<td><center>$employee->employeeID</center></td>
			<td><center>$employee->Fname</center></td>
			<td><center>$employee->Lname</center></td>
            <td><center>$employee->Ssn</center></td>
            <td><center>$employee->departmentID,DeparmentName</center></td>
            <td><center>$employee->age</center></td>
            <td><center>$employee->hire_date</center></td>
            <td><center>$employee->tel</center></td>
            <td><center>$employee->gender</center></td>
            <td><center>$employee->salary</center></td>
            <td><center>$employee->position</center></td>
			<td><center><a href=\"/employee/$employee->employeeID/editpage\">Click</a></center></td>
			<td><center><a href=\"/employee/$employee->employeeID/delete\">Click</a></center></td>
			</tr>";
        }
	echo "</table><br>";
	echo"<form action=\"/employee/insertpage\"><input type=\"submit\" value=\"Add Employee\"></form>";
	
});

    $router->get('/employee/insertpage','EmployeeController@insertpage');
    $router->post('/employee/save','EmployeeController@save');
    $router->get('/employee/{id}/editpage','EmployeeController@editpage');
    $router->post('/employee/{id}/editsave','EmployeeController@editsave');
    $router->get('/employee/{id}/delete','EmployeeController@delete');
    $router->get('/', 'IndexController@index');
    $router->get('/posts', 'PostController@index');
    $router->get('/posts/{id}', 'PostController@view');