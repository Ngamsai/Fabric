<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Models\Departments;
	use App\Department;
	use App\Employee;
	class DepartmentController extends Controller
	{
		public function insertpage()
		{
			return view('insertFormDepartment');
		}
		
		public function editpage($id)
		{
			return view('editFormDepartment')->with('id',$id);
		}

		public function save(Request $request)
		{
			$department = new Department;
			$department->departmentname=$request->input('departmentname');
			$department->departmentID=$request->input('departmentID');
			$department->supervisor=$request->input('supervisor');
			$department->save();
			
			echo "Add Success!!";
			echo"<form action=\"/departments\">
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
		
		public function delete($id)
		{
			$department = Department::findOrFail($id);
			$department->delete();
			echo "Delete Success!!";
			echo"<form action=\"/departments\">
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
		
		public function editsave(Request $request, $id)
		{
			$department = Department::findOrFail($id);
			$department->departmentname=$request->input('departmentname');
			$department->departmentID=$request->input('departmentID');
			$department->supervisor=$request->input('supervisor');
			if ($check = Employee::where('employeeID', '=', $department->supervisor=$request->input('supervisor'))->first()) {
				$department->save();
				echo "Edit Success!!";
			}
			else{
				echo "SSN does't exit.";
			}
			echo"<form action=\"/departments\">
			
			<input type=\"submit\" value=\"Back To Department\">
			</form>";
		}
	}