@extends('index')
@section('content')


<div class="container">
  <div class="row">
   <div class="col-3">

   </div>\
   <div class="col-4">

  
  
<div class="card" style="width: 18rem;">

    @if(Auth::user()->image)
        <img src="{{ asset('storage/images/'.Auth::user()->image) }}" width="100px" height="100px">
    @endif


  <div class="card-body">
  
  <p> name:{{ Auth::user()->name}}</p><br>
  <p>mobile:{{ Auth::user()->mobile}}</p><br>
  <p>address:{{Auth::user()->address}}</p>

  <a href="{{route('edit')}}" class="btn btn-success">edit</a>
  
  </div>
</div>
</div>
</div>
</div>


@endsection