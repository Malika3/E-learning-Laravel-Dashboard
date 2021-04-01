@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getseances/'.$seance->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier une seance</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="jour">Jour de la seance</label>
                <input type="text" name="jour" class="form-control" value="{{$seance->jour}}">
                </div>

                <div class="form-group">
                <label for="heureD">Heure Debut</label>
                <input type="text" name="heureD" class="form-control" value="{{$seance->heureD}}">
                </div>

                <div class="form-group">
                <label for="heureF">Heure Fin</label>
                <input type="text" name="heureF" class="form-control" value="{{$seance->heureF}}">
                </div>

               

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection