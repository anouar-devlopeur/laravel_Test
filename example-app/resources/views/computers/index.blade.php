@extends('layout.master')
@section('title','Computers')
@section('content')
   <div class="max-w-7xl mx-auto p-6 ">

    <div class="flex justify-center  px-0 sm:items-center sm:justify-between">
        <h1 class="text-2xl font-bold">Computers To Project Test</h1>
    </div>
    <div class="mt-8 bg-slate-300 text-center rounded-[20px]">THIS PAGE Computers</div>
    <ul>
        @foreach ($computers as $item)
      
        <a href="{{ route('computers.show', ['computer' => $item['id']]) }}">
            <li >
              {{$item['name']}}  is form <strong> {{$item['origin'] }}</strong> 
            </li>  
        </a>
            @endforeach
     </ul>
  </div>
  
   

   
@endsection