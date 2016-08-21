<?php 

namespace App\Repositories;

interface EmployeeRepositoryInterface
{

    /**
     * Lists all employees
     */
    public function all();

    /**
     * Gets the employee's records
     * @param [int] $id [employee id]
     */
    public function get($id);

    /**
     * Gets the employee's records
     * @param [int] $id [employee id]
     */
    public function create(array $employeeData);

    /**
     * Updates an employee's record
     * @param [int] $id [employee id]
     * @param [array] $employeeData [key-values to be updated]
     */
   
    public function update($id, array $employeeData);

    /**
     * Deletes all employee's records
     * @param [int] $id [employee id]
     */
    public function delete($id);

}