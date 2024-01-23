<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersController extends Controller
{
  private static function getData(){
    return[
    ['id'=>1,'name'=>'LENOVO','origin'=>'maroc'],
    ['id'=>2,'name'=>'DELL','origin'=>'US'],
    ['id'=>3,'name'=>'HP','origin'=>'ESP']
    ];
  }



    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $data=[
    //         'computers'=>self::getData() 
    //     ];
    //    dd($data);
    //    die();
        return view('computers.index',[
            'computers'=>self::getData()
        ]);
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
        $computers=self::getData();
        $index=array_search($id,array_column($computers,'id'));
        if($index=== false){
            abort(404);
        }
        return view('computers.show',[
            'item'=> $computers[$index]
        ]);
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
}