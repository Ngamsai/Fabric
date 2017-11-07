<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
</head>
<body>

	<form action='/ordercloths/<?php echo $id; ?>/editsave' method="post">
	<table>
	<tr>
    <td>Factory Name : </td>
    <td><input type="text" name="namefactory"></td>
    </tr>
    <tr>
        <td>Factory ID : </td>
        <td><input type="text" name="factory_id" 
        pattern="[0-9]{4}" 
        title="Three letter number code"></td>
    </tr>
    <tr>
        <td>Factory Tel. : </td>
        <td><input type="text" name="tel_factory" 
        pattern="[0-9]{10}" 
        title="Ten letter number for telephone"></td>
    </tr>
    <tr>
        <td>Factory Address : </td>
        <td><input type="text" name="address_factory"></td>
    </tr>
    <tr>
        <td>Start Date : </td>
        <td><input type="date" name="bday"></td>
    </tr>
    <tr>
        <td>Weight Cloth : </td>
        <td><input type="text" name="weight_cloth"></td>
    </tr>
    <tr>
        <td>Factory Account : </td>
        <td><input type="text" name="account_factory"></td>
    </tr>
    <tr>
        <td>Tarnsfer Date : </td>
        <td><input type="date" name="date_tranfer"></td>
    </tr>
    <tr>
        <td>Total(cost) : </td>
        <td><input type="text" name="linetotal"></td>
    </tr>
    <tr>
        <td>Type of Cloth : </td>
        <td><input type="text" name="type_cloth"></td>
    </tr>
    <tr>
        <td>Receive Date : </td>
        <td><input type="date" name="date_recv"></td>
    </tr>
    <tr>
        <td>Cloth ID : </td>
        <td><input type="text" name="cloth_id"
        pattern="[0-9]{4}" 
        title="Four letter number code"></td>
    </tr>
    <tr>
        <td>Width Cloth : </td>
        <td><input type="text" name="width_cloth"></td>
    </tr>
    <tr>
        <td>Folding : </td>
        <td><input type="text" name="folding"></td>
    </tr>
    <tr>
        <td>Unit Folding : </td>
        <td><input type="text" name="unit_folding"></td>
    </tr>
    <tr>
        <td>Order Cloth ID : </td>
        <td><input type="text" name="order_clothid"
        pattern="[0-9]{5}" 
        title="Five letter number code"></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="Add">
        <input type="reset"></td>
    </tr>	
	</table>
	</form>
	<form action="/ordercloths">
    <input type="submit" value="Back">
	</form>

</body>
</html>