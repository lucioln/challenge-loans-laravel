<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'salary' => 'required|numeric',
            'age' => 'required|numeric',
            'location' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $salary = $request->input('salary');
        $age = $request->input('age');
        $location = $request->input('location');
        $name = $request->input('name');
        $eligibleLoans = [];

        if ($salary <= 3000) {
            $eligibleLoans[] = (object)['category' => 'Empréstimo Pessoal', 'tax' => 4];
        }

        if (($salary > 3000 && $salary <= 5000) && ($age < 30 && $location === 'SP')) {
            $eligibleLoans[] = (object)['category' => 'Empréstimo Pessoal', 'tax' => 4];
        }

        if ($salary >= 5000) {
            $eligibleLoans[] = (object)['category' => 'Empréstimo Consignado', 'tax' => 2];
        }

        if ($salary <= 3000) {
            $eligibleLoans[] = (object)['category' => 'Empréstimo com Garantia', 'tax' => 3];
        }

        if (($salary > 3000 && $salary <= 5000) && ($age < 30 && $location === 'SP')) {
            $eligibleLoans[] = (object)['category' => 'Empréstimo com Garantia', 'tax' => 3];
        }

        // Retorne os empréstimos elegíveis
        return view('result', ['eligibleLoans' => $eligibleLoans, 'name' => $name]);
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
        //
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
