<?php

	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	use App\Models\Employees;
	use App\Employee;
	
	class EmployeeController extends Controller
	{
		public function insertpage()
		{
			return view('insertFormEmployee');
		}
		
		public function editpage($id)
		{
			return view('editFormEmployee')->with('id',$id);
		}

		public function save(Request $request)
		{
			$employee = new Employee;
			$employee -> employeeID=$request->input('employeeID');
			$employee -> Fname=$request->input('Fname');
			$employee -> Lname=$request->input('Lname');
            $employee -> Ssn=$request->input('Ssn');
            $employee -> departmentID=$request->input('departmentID');
            $employee -> age=$request->input('age');
            $employee -> hire_date=$request->input('hire_date');
            $employee -> tel=$request->input('tel');
            $employee -> address=$request->input('address');
            $employee -> gender=$request->input('gender');
            $employee -> salary=$request->input('salary');
            $employee -> position=$request->input('position');
			$employee ->save();
			
			echo "Add Success!!";
			echo"<form action=\"/employees\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
		
		public function delete($id)
		{
			$employee  = Employee::findOrFail($id);
			$employee ->delete();
			echo "Delete Success!!";
			echo"<form action=\"/employees\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
		
		public function editsave(Request $request, $id)
		{
			$employee  = Employee::findOrFail($id);
			$employee -> employeeID=$request->input('employeeID');
			$employee -> Fname=$request->input('Fname');
			$employee -> Lname=$request->input('Lname');
            $employee -> Ssn=$request->input('Ssn');
            $employee -> departmentID=$request->input('departmentID');
            $employee -> age=$request->input('age');
            $employee -> hire_date=$request->input('hire_date');
            $employee -> tel=$request->input('tel');
            $employee -> address=$request->input('address');
            $employee -> gender=$request->input('gender');
            $employee -> salary=$request->input('salary');
            $employee -> position=$request->input('position');
			$employee ->save();
			echo "Edit Success!!";
			echo"<form action=\"/employees\">
			<input type=\"submit\" value=\"Back to Employees\">
			</form>";
		}
	}