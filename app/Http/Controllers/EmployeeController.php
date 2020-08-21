<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        //dd($employee);
        return view('employee.index', ['employees' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployee $request)
    {

        /* 
        // 1- First Methode 
        $employee = new Employee();
        $employee->FullName = $request->input('FullName');
        $employee->Email = $request->input('Email');
        $employee->PhoneNumber = $request->input('PhoneNumber');
        $employee->address = $request->input('address');
        */

        // into Class Employee you should Add :  protected $fillable = ['FullName', 'Email', 'PhoneNumber', 'address'];
        $data = $request->only(['FullName', 'Email', 'PhoneNumber', 'address']);
        $employee = Employee::create($data);

        // persiste into Database
        $employee->save();
        //Flash Message
        $request->session()->flash('status', 'Employee SuccessFully Insert.');
        //return  redirect()->route('employee.index', ['employee'=> $employee->id]);
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employee.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployee $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->FullName = $request->input('FullName');
        $employee->Email = $request->input('Email');
        $employee->PhoneNumber = $request->input('PhoneNumber');
        $employee->address = $request->input('address');
        $employee->save();
        $request->session()->flash('status', 'Employee SuccessFully Updated');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //$employee = Employee::findOrFail($id);
        //$employee->delete();
        Employee::destroy($id);
        $request->session()->flash('status', 'Employee SuccessFully Deleted');
        return redirect()->route('employee.index');
    }
}
