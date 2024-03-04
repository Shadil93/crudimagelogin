@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-4">
            <form action="{{ route('do_login') }}" method="POST" >
                @csrf
                <label>email</label>
                <input type="email" name="email" class="form-control">

               <label>password</label>
               <input type="password" name="password" class="form-control">

               <button type="submit"  class="btn btn-success">Login</button> 
            </form>
        </div>
    </div>
</div>


@endsection