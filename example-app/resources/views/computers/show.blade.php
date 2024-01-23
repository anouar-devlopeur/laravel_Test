@extends('layout.master')
@section('title','Show_Computers')
@section('content')
   <div class="max-w-7xl w-3/6 mx-auto p-6 lg:p-8">

    <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
        <h1 class="text-2xl font-bold">Computers To Project Test</h1>
    </div>
    <div class="mt-8 bg-slate-300 text-center rounded-[20px]">THIS PAGE SINGLE Computers</div>
    <ul>
        <a href="{{route('computers.edit',$item->id)}}" >
          <li class="list-disc mb-6"> {{$item->name}}  is form  <strong> {{$item->origin }}</strong>-$<b>{{$item->price}}</b>  </li>  
        </a>
     </ul>
 <a href="{{route('computers.edit',$item->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit Computer </a>
   <form action="{{route('computers.destroy',$item->id)}}" class="mt-5" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit"  class=" w-[140px] text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800" value="Delete Computer"> 

   </form>
</div>
  
   

   
@endsection