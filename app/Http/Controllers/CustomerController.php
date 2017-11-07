<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Customers;
	use App\Customer;
	
	class CustomerController extends Controller
	{
		public function insertpage()
		{
			return view('insertFormCustomer');
		}
		
		public function editpage($id)
		{
			return view('editFormCustomer')->with('id',$id);
		}

		public function save(Request $request)
		{
			$customer = new Customer;
			$customer->nameCus=$request->input('nameCus');
			$customer->customerID=$request->input('customerID');
			$customer->Address=$request->input('Address');
			$customer->tel=$request->input('tel');
			$customer->save();
			
			echo "Add Success!!";
			echo"<form action=\"/customers\">
			<input type=\"submit\" value=\"Go To Customer\">
			</form>";
		}
		
		public function delete($id)
		{
			$customer = Customer::findOrFail($id);
			$customer->delete();
			echo "Delete Success!!";
			echo"<form action=\"/customers\">
			<input type=\"submit\" value=\"Go To Customers\">
			</form>";
		}
		
		public function editsave(Request $request, $id)
		{
			$customer = Customer::findOrFail($id);
			$customer->nameCus=$request->input('nameCus');
			$customer->customerID=$request->input('customerID');
			$customer->Address=$request->input('Address');
			$customer->tel=$request->input('tel');
			$customer->save();
			echo "Edit Success!!";
			echo"<form action=\"/customers\">
			<input type=\"submit\" value=\"Go To Customers\">
			</form>";
		}
	}