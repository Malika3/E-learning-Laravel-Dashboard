@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{url('getens')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <h1 style="text-align:center"> Ajouter un enseignant</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="Name">Name:</label><input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                <label for="Email">Email:</label><input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                <label for="grade">Grade:</label><input type="text" name="grade" class="form-control">
                </div>

                <div class="form-group">
                <label for="module_id">Module_id:</label><input type="text" name="module_id" class="form-control">
                </div>

                <div class="form-group">
                <input type="submit" class="form-control btn btn-warning" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection