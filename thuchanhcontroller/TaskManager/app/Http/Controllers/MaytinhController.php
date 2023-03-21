<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaytinhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('maytinh');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
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
        
    }
    public function tinh()
    {
        $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
   $pheptinh = $_POST['pheptinh'];
   if (!($number1 == "" && $number2 == "")){
    switch ($pheptinh) {
        case '+':
            echo "Kết quả : ". $number1 + $number2;
        break;
        case '-':
            echo "Kết quả : ". $number1 - $number2;
        break;
        case '*':
            echo "Kết quả : ". $number1 * $number2;
        break;
        case '/':
            if ($number2 != 0){
                echo "Kết quả : ". $number1 / $number2;
            } else {
                echo "không được phép chia cho số 0";
            }
           
        break;
    }
   } else {
    echo "Nhập số đi Dương Quốc Khang";
   }
   
   return view('maytinh');
}
}
