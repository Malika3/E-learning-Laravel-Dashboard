@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{url('home/'.$ens->id)}}" method="put">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >

            <h1 style="text-align:center"> Modifier un enseignant</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{$ens->name}}">
                </div>

                <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" name="email" class="form-control" value="{{$ens->email}}">
                </div>

                <div class="form-group">
                <label for="Grade">Grade:</label>
                <input type="text" name="grade" class="form-control" value="{{$ens->grade}}">
                </div>

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection