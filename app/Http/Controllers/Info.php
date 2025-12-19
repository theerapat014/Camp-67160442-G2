<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Info extends Controller
{
    public function myfun()
    {
        return view('info.index');
    }

    public function index(){
        return $this->myfun();
    }

    public function process(Request $request)
    {
        // จัดการอัปโหลดรูปภาพ
        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
        }

        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'date' => $request->input('date'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'img' => $imagePath,  // ส่ง path ของรูปที่อัปโหลด
            'address' => $request->input('address'),
            'color_select' => $request->input('color_select'),  // เปลี่ยนจาก 'color'
            'music' => $request->input('music', []),  // รับเป็น array
        ];

        return view('info.process', $data);
    }
}
