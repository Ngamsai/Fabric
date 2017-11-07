<?php

namespace App;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/statusCheck','statusController@statusInput');

$router->get('/department/{id}', function($id){
	return Department::where('departmentID','=',$id)->first();
});

$router->get('/department', function () use ($router) {
    return Department::all();
});

$router->get('/ordercus', function () use ($router) {
    return Ordercustomer::all();
});

$router->get('/employee/{id}', function ($id) use ($router) {
    return Employee::where('departmentID','=',$id)->first();
});


$router->get('/customer/{id}', function ($id) {
    $customer = Customer::findOrFail($id);
    return $customer->sendToOrderCustomer;
});

$router->get('/allcustomer', function () {
    return Customer::all();
});

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
    #echo "$employee->Fname";
    #<td><center>$employee->Fname</center></td>
        foreach ($departments as $department) {
            #$employee = $department->manager;
            $emp = $department->supervisor;
            
            $mmm =Employee::findOrFail($emp);

            echo "
			<tr>
			<td><center>$department->departmentname</center></td>
			<td><center>$department->departmentID</center></td>
			<td><center>$mmm->Fname</center></td>
			<td><center><a href=\"/departments/$department->departmentID/editpage\">Click</a></center></td>
			<td><center><a href=\"/departments/$department->departmentID/delete\">Click</a></center></td>
            </tr>";
        }
	echo "</table><br>";
	
	
});

    $router->get('/departments/insertpage','DepartmentController@insertpage');
    $router->post('/departments/save','DepartmentController@save');
    $router->get('/departments/{id}/editpage','DepartmentController@editpage');
    $router->post('/departments/{id}/editsave','DepartmentController@editsave');
    $router->get('/departments/{id}/delete','DepartmentController@delete');
    $router->get('/', 'IndexController@index');
    $router->get('/posts', 'PostController@index');
    $router->get('/posts/{id}', 'PostController@view');