<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('123');
        // return view('student.index');
        // return view('student.index',['name'=>'去IKEA吃冰淇淋','price'=>'1枝10元']);
        $data=[
            ['name'=>'amy',
            'mobile'=>'0911-111-111'
            ],
            ['name'=>'bob',
            'mobile'=>'0922-222-222'
            ],
            ['name'=>'amy',
            'mobile'=>'0933-333-333'
            ],
        ];
        return view('student.index',['dataXDXD'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function excel()
    {
        // dd('123');
        return view('student.excel');
    }

    public function child()
    {
        // dd('123');
        return view('child');
    }
    
}
