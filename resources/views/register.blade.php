@extends('index')
@section('content')




<div class="container">
    <div class="row">
        <div class="col-3">
            @if(session()->has('success'));
            <div style="text-align:center ;margin-top:20px;">
                <strong>{{session()->get('success')}}</strong>
            </div >



            @endif
          
        </div>
        <div class="col-4">
                <form action="{{route('do_register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>name</label>
                    <input type="text" name="name" class="form-control" >
                    <label>mobile</label>
                    <input type="mobile" name="mobile" class="form-control">
                    <label>address</label>
                    <input type="text" name="address" class="form-control">
                    <label>email</label>
                    <input type="text" name="email" class="form-control">
                    <label>password</label>
                    <input type="text" name="password" class="form-control">
                    <label>photo</label>
                    <input type="file" name="image" class="form-control">
                    <button type="submit" name="submit " class="btn btn-danger">submit</button>

                    
                </form>

                @endsection
        </div>
    </div>
</div>

