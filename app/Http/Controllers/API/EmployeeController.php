<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //

    public function list_role() {
        
        $data = Role::get();

        $response['data'] = $data;
        $response['succes'] = true;

        return $response;
    }

    public function create(Request $request) {

        try {
            $insert['name_lastname'] = $request['name'];
            $insert['email'] = $request['email'];
            $insert['city'] = $request['city'];
            $insert['direction'] = $request['address'];
            $insert['phone'] = $request['phone'];
            $insert['rol'] = $request['rol'];

            Employee::insert($insert);

            $response['message'] = "Save successfull";
            $response['success'] = true;
            
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }

        return $response;
    }

    public function list() {


        try {
            
            $data = Employee::with('role')->get();

            $response['data'] = $data;
            $response['message'] = "load successful";
            $response['success'] = true;

        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }
        return $response;
    }

    public function get($id) {

        try {

            $data = Employee::with('role')->find($id);

            if($data) {

                $response['data'] = $data;
                $response['message'] = "load successful";
                $response['success'] = true;

            } else{
                $response['data'] = null;
                $response['message'] = "Not found data id => $id";
                $response['success'] = false;
            }

        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }
        return $response;
    }

    public function update(Request $request, $id) {
        try {

            $data['name_lastname'] = $request['name'];
            $data['email'] = $request['email'];
            $data['city'] = $request['city'];
            $data['direction'] = $request['address'];
            $data['phone'] = $request['phone'];
            $data['rol'] = $request['rol'];

            $res = Employee::where('id', $id)->update($data);
            
            $response['res'] = $res;
            $response['message'] = 'Update Successful';
            $response['success'] = true;
            
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }

        return $response;
    }

    public function delete($id) {
        try {
            $res = Employee::where('id', $id)->delete();

            $response['res'] = $res;
            $response['message'] = 'Delete Successful';
            $response['success'] = true;
            
        } catch (\Exception $e) {
            $response['message'] = $e->getMessage();
            $response['success'] = false;
        }
        return $response;
    }

  
}
