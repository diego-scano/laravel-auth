@extends('layouts.base')

@section('title', 'Guitars')

@section('content')

  <table class="table">
   <thead class="thead-dark">
     <tr>
       <th scope="col">#</th>
       <th scope="col">Brand</th>
       <th scope="col">Model</th>
       <th scope="col">Type</th>
       <th scope="col">Price</th>
       <th scope="col">Image</th>
     </tr>
   </thead>
   <tbody>
     @foreach ($guitar as $guit)
       <tr>
         <th scope="row">{{$guit->id}}</th>
         <td>{{$guit->brand}}</td>
         <td>{{$guit->model}}</td>
         <td>{{$guit->type}}</td>
         <td>{{$guit->price}}</td>
         <td><img src="{{$guit->image}}" width="200" alt=""></td>
       </tr>
     @endforeach
   </tbody>
 </table>

@endsection
