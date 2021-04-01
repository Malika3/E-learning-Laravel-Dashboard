@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{url('getseances')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <h1 style="text-align:center"> Ajouter une seance</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="jour">Jour de la seance</label><input type="text" name="jour" class="form-control">
                </div>
                <div class="form-group">
                <label for="heurD">Heure Debut</label><input type="text" name="heureD" class="form-control">
                </div>
                <div class="form-group">
                <label for="heurF">Heure Fin </label><input type="text" name="heureF" class="form-control">
                </div>

                <div class="form-group">
                <input type="submit" class="form-control btn btn-warning" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection