<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("employee.employee_list",["employee"=>employees::get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employee.home");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        employees::create([
            "name"=>$request->input("name"),
            "surname"=>$request->input("surname"),
            "position"=>$request->input("position"),
            "phone"=>$request->input("phone"),

        ]);
        return redirect()->route("adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=employees::where("id",$id)->firstOrFail();
    	return view("employee.edit",["employees"=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        employees::where("id",$request->input("id"))->update([
    		"name"=>$request->input("name"),
    		"surname"=>$request->input("surname"),
    		"position"=>$request->input("position"),
    		"phone"=>$request->input("phone"),
    		"is_hired"=>$request->input("is_hired")
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
