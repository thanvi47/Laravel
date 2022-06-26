<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salarys=Salary::all();
//        return $salary;
        return view('salary' )->with(compact('salarys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $salary=new Salary;
    $salary->employee_id=$request['employee_id'];
    $salary->designation_id	=$request['designation_id'];
    $salary->department_id=$request['department_id'];
    $salary->basic	=$request['basic'];
//    $salary->da 	=$request['da'];
//    $salary->ta	=$request['ta'];
//    $salary->hra	=$request['hra'];
//    $salary->pf	=$request['pf'];
//    $salary->ha	=$request['ha'];
//    $salary->gross_salary=$request['gross_salary'];
//    $salary->net_salary	=$request['net_salary'];
        $salary ->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $salary=Salary::all();
        view('salary')->compact('salary');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
