$router->get('/departments', function() {
    $departments = Department::all();
	
	echo "<h1>All Departments</h1>";
    echo "<table border=2> 
    <tr><center>
    <th>ชื่อแผนก</th>
    <th>รหัสแผนก</th>
    <th>ชื่อหัวหน้าแผนก</th> 
    <th>แก้ไข</th> 
    <th>ลบ</th> 
    </tr></center> ";
    
        foreach ($departments as $department) {
            echo "
			<tr>
			<td><center>$department->departmentname</center></td>
			<td><center>$department->departmentID</center></td>
			<td><center>$department->supervisor</center></td>
			<td><center><a href=\"/departments/$department->departmentID/editpage\">Click</a></center></td>
			<td><center><a href=\"/departments/$department->departmentID/delete\">Click</a></center></td>
            </tr>";
        }
	echo "</table><br>";
	echo"<form action=\"/departments/insertpage\"><input type=\"submit\" value=\"Add Department\"></form>";
	
});

    $router->get('/departments/insertpage','DepartmentController@insertpage');
    $router->post('/departments/save','DepartmentController@save');
    $router->get('/departments/{id}/editpage','DepartmentController@editpage');
    $router->post('/departments/{id}/editsave','DepartmentController@editsave');
    $router->get('/departments/{id}/delete','DepartmentController@delete');
    $router->get('/', 'IndexController@index');
    $router->get('/posts', 'PostController@index');
    $router->get('/posts/{id}', 'PostController@view');