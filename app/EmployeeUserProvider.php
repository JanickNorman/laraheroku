<?php

namespace Illuminate\Auth;

use Illuminate\Auth\EloquentUserProvider;
use App\Employee;

class EmployeeUserProvider extends EloquentUserProvider
{

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function retrieveById($id) {
        return new Employee();
    }

    public function retrieveByToken($id, $token) {
        return new Employee();
    }

    public function updateRememberToken(Authenticatable $employee, $token) {
        return true;
    }

    public function retrieveByCredentials(array $credentials) {
        return new Employee();
    }

    public function validateCredentials(Authenticatable $user, array $credentials) {
        return true;
    }
}
