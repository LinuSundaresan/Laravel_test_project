@extends('layouts.master')

@section('content')
    
    <div class="row mt-4 ml-2 justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Login</h2>

            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            <div class="card">
                <div class="card-body">
                    <form action="{{Route('login.submit')}}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label for="" class="form-label">Username</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection