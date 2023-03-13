<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;


class Student0309Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('hello');
        $data = Student::get();

        // dd($data);
        return view('student.student0309',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('hello store');
        $data = new Student;

        $data->name=$request->name;
        $data->age=$request->age;

        $data->save();

        return redirect()->route('student0309.index');
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
        // 1. 確認id
        // dd($id);

        // 2. id丟到前面
        // id 抓到了

        // 3.該筆資料 丟到前端
        // SELECT * from students where id = 1;

        $data = Student::get();  //index select all
        // 範例 1
        $data = Student::find($id); //where id=$id
        // 範例 2
        // $data = Student::where('id',$id);
        // dd($data);
        return view('student.edit',['data'=>$data]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($id);
        // dd($request->all());
        $input = $request->except(['_token','_method']);
        // dd($input);
        // dd('update ok');

        // 1. id get 單筆data
        // 2. 修改後data update 單筆data 

        // 1. id get 單筆data
        $data = Student::find($id);
        // 2. 修改後data update 單筆data
        $data->name= $input['name'];
        $data->age= $input['age'];
        $data->save();

        return redirect()->route('student0309.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // dd('刪除OK');

        Student::find($id)->delete();
        return redirect()->route('student0309.index');
        

    }

    public function excel(){
        return Excel::download(new StudentExport, 'students0309.xlsx');
    }

}
