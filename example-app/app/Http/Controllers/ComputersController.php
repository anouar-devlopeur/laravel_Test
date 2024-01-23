<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
//   private static function getData(){
//     return[
//     ['id'=>1,'name'=>'LENOVO','origin'=>'maroc'],
//     ['id'=>2,'name'=>'DELL','origin'=>'US'],
//     ['id'=>3,'name'=>'HP','origin'=>'ESP']
//     ];
//   }



    
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
            'computers'=>Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required | integer'
            // 'computer-price'=>['required' , 'integer']
        ]);
      $computer=new Computer();
      $computer->name=strip_tags($request->input('computer-name'));
      $computer->origin=strip_tags($request->input('computer-origin'));
      $computer->price=strip_tags($request->input('computer-price'));
      $computer->save();
      return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // findOrFail : Function is verfication is in or is not on affiche 404
        $index= Computer::findOrFail($id);
        // if($index=== false){
        //     abort(404);
        // }
        return view('computers.show',[
            'item'=> $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $index= Computer::findOrFail($id);
        return view('computers.edit',[
            'computer'=> $index
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'computer-name'=>'required',
            'computer-origin'=>'required',
            'computer-price'=>'required | integer'
            // 'computer-price'=>['required' , 'integer']
        ]);
        $computer= Computer::findOrFail($id);
      $computer->name=strip_tags($request->input('computer-name'));
      $computer->origin=strip_tags($request->input('computer-origin'));
      $computer->price=strip_tags($request->input('computer-price'));
      $computer->save();
      return redirect()->route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
       $to_delete=Computer::findOrFail($id);
       $to_delete->delete();
       return redirect()->route('computers.index');
    }
}