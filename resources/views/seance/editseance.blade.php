@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getseances/'.$seances->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier une seance</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="jour">Jour de la seance</label>
                <input type="text" name="jour" class="form-control" value="{{$seances->jour}}">
                </div>

                <div class="form-group">
                <label for="heureD">Heure Debut</label>
                <input type="text" name="heureD" class="form-control" value="{{$seances->heureD}}">
                </div>

                <div class="form-group">
                <label for="heureF">Heure Fin</label>
                <input type="text" name="heureF" class="form-control" value="{{$seances->heureF}}">
                </div>
                
                <div class="form-group">
                <label for="module_id">Module_id</label>
                <input type="text" name="module_id" class="form-control" value="{{$seances->module_id}}">
                </div>

                <div class="form-group">
                <label for="groupe_id">Groupe_id</label>
                <input type="text" name="groupe_id" class="form-control" value="{{$seances->groupe_id}}">
                </div>

                <div class="form-group">
                <label for="enseignant_id">Enseignant_id</label>
                <input type="text" name="enseignant_id" class="form-control" value="{{$seances->enseignant_id}}">
                </div>

                <div class="form-group">
                <label for="salle_id">Salle_id</label>
                <input type="text" name="salle_id" class="form-control" value="{{$seances->salle_id}}">
                </div>



               

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection