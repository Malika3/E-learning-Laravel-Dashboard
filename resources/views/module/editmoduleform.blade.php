@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getmodules/'.$modules->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier un module</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="moduleName">Nom du module:</label>
                <input type="text" name="moduleName" class="form-control" value="{{$modules->moduleName}}">
                
                </div>

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection