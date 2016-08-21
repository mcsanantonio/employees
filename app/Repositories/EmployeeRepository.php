<?php

namespace App\Repositories;

use App\Employees as Employees;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    /**
     * NOTE:: Static table set to Employees 
     */
    
    /**
     * Lists all employees
     */
    public function all()
    {
    	return Employees::all();
    }

    /**
     * Gets the employee's records
     * @param [int] $id [employee id]
     */
    public function get($id)
    {
    	return Employees::find($id);
    }

    /**
     * Creates new employee record
     * @param [array] $employeeData
     */
    public function create(array $employeeData)
    {
        return Employees::create($employeeData);
    }

    /**
     * Updates an employee's record
     * @param [int] $id [employee id]
     * @param [array] $employeeData [key-values to be updated]
     */
   
    public function update($id, array $employeeData)
    {
        return Employees::where('id', $id)->update($employeeData);
    }

    /**
     * Deletes all employee's records
     * @param [int] $id [employee id]
     */
    public function delete($id)
    {
        return Employees::where('id', $id)->delete();
    }
}