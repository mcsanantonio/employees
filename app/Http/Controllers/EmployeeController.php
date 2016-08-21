<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Repositories\EmployeeRepository as Employee;

class EmployeeController extends Controller
{
    /**
    * @var Model name
    */
    private $model;

    /**
    * Constructor
    */
    public function __construct(Employee $model)
    {
        $this->model = $model;
    }

    /**
     * Display the map of employees.
     *
     * @return view
     */
    public function index()
    {
        $employees =  $this->model->all();

        return view('list', compact('employees'));
    }

    /**
     * Show the form for adding new employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) :
            $rules = [
                'name' => 'required|max:100',
                'email'  => 'required|email|unique:employees',
                'department'  => 'required',
            ];

            $validator = $this->validate($request, $rules);

            if (!empty($validator) && $validator->fails()) {
                return view('create')->withErrors($validator);
            }

            $employeeData = Input::all();
            
            $result = $this->model->create($employeeData);
            
            return redirect('/');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee =  $this->model->all();

        return view('list', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee =  $this->model->get($id);

        return view('create')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if ($request->isMethod('PATCH')) :
            $rules = [
                'name' => 'required|max:100',
                'email'  => 'required|email',
                'department'  => 'required',
            ];

            $validator = $this->validate($request, $rules);

            if (!empty($validator) && $validator->fails()) {
                return view('create')->withErrors($validator);
            }

            $employeeData = array_except(Input::all(), '_method');
            $employeeData = array_except($employeeData, '_token');

            $result = $this->model->update($id, $employeeData);
            
            return redirect('/');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->model->get($id);

        $employee->delete();

        return redirect('/');
    }
}
