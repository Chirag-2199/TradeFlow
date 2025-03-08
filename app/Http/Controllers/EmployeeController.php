<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('pages.employees');
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Logic to store employee
    }

    public function show($id)
    {
        return view('employees.show');
    }

    public function edit($id)
    {
        return view('employees.edit');
    }

    public function update(Request $request, $id)
    {
        // Logic to update employee
    }

    public function destroy($id)
    {
        // Logic to delete employee
    }
}
