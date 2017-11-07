
$router->get('/customers', function() {
    $customers = Customer::all();
	
	echo "<h1>All Customers</h1>";
    echo "<table border=2> 
    <tr><center>
    <td>รหัสลูกค้า</td>
    <td>ชื่อ</td>
    <td>ที่อยู่</td>  
    <td>เบอร์โทร</td>
    <td>แก้ไข</td>  
    <td>ลบ</td> </center>   
    </tr>";
    
        foreach ($customers as $customer) {
            echo "
			<tr>
			<td><center>$customer->customerID</center></td>
			<td><center>$customer->nameCus</center></td>
			<td><center>$customer->Address</center></td>
			<td><center>$customer->tel</center></td>
			<td><center><a href=\"/customers/$customer->customerID/editpage\">Click</a></center></td>
			<td><center><a href=\"/customers/$customer->customerID/delete\">Click</a></center></td>
			</tr>";
        }
	echo "</table><br>";
	
	echo"<form action=\"/customers/insertpage\"><input type=\"submit\" value=\"Add Customer\"></form>";
	
});

$router->get('/customers/insertpage','CustomerController@insertpage');
$router->post('/customers/save','CustomerController@save');
$router->get('/customers/{id}/editpage','CustomerController@editpage');
$router->post('/customers/{id}/editsave','CustomerController@editsave');
$router->get('/customers/{id}/delete','CustomerController@delete');
$router->get('/', 'IndexController@index');
$router->get('/posts', 'PostController@index');
$router->get('/posts/{id}', 'PostController@view');