@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getsalles/'.$salle->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier une salle</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="Name">Nom de la salle:</label>
                <input type="text" name="nom" class="form-control" value="{{$salle->nom}}">
                </div>

               

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection