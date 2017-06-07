<?php

namespace App;

use Illuminate\Auth\EloquentUserProvider;
use App\Employee;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class EmployeeUserProvider extends EloquentUserProvider
{

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function retrieveById($id) {
        return new Employee(['employee_name' => "Janick the EMployee"]);
    }

    public function retrieveByToken($id, $token) {
       return new Employee(['employee_name' => "Janick the EMployee"]);
    }


    public function retrieveByCredentials(array $credentials) {
       return new Employee(['employee_name' => "Janick the EMployee"]);
    }

    public function validateCredentials(UserContract $user, array $credentials) {
        return true;
    }
}
