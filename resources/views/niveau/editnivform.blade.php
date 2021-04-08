@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getniveaux/'.$niveaux->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier un niveau</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="NiveauName">Niveau:</label>
                <input type="text" name="NiveauName" class="form-control" value="{{$niveaux->NiveauName}}">
               

                </div>
                <div class="form-group">
                <label for="seance_id">Seance ID</label><input type="text" name="seance_id" class="form-control">
                </div>
                
                <div class="form-group">
                <label for="groupe_id">Groupe ID</label><input type="text" name="groupe_id" class="form-control">
                </div>
                

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection