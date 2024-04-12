<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;


class TeacherController extends Controller
{
    public function index():View
    {
        $teachers = teacher::all();
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile'=>'required|min:10',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อครู',
            'address.required' => 'กรุณากรอกที่อยู่',
            'mobile.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'mobile.min'=>'กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 หมายเลข'
        ]);
        $validRequest = [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ];
        teacher::create($validRequest);
        return redirect('/teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $teacher = teacher::find($id);
        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = teacher::find($id);
        return view('teachers.edit')->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id): RedirectResponse
    {
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'mobile'=>'required|min:10',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อครู',
            'address.required' => 'กรุณากรอกที่อยู่',
            'mobile.required' => 'กรุณากรอกเบอร์โทรศัพท์',
            'mobile.min'=>'กรุณากรอกเบอร์โทรศัพท์ให้ครบ 10 หมายเลข'
        ]);
        $validRequest = [
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ];
        teacher::where('id',$id)->update($validRequest);
        $teacher = teacher::find($id);
        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        teacher::where('id',$id)->delete();
        return redirect('/teachers');
    }
}
