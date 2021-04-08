@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  method="post" action="{{url('getgroupes/'.$groupes->id)}}" >
            @method('PUT')
            @csrf
            <input type="hidden">

            <h1 style="text-align:center"> Modifier un groupe</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="num">Numero de groupe</label>
                <input type="text" name="num" class="form-control" value="{{$groupes->num}}">
                </div>
                <div class="form-group">
                <label for="niveau_id">Niveau ID</label>
                <input type="text" name="niveau_id" class="form-control" value="{{$groupes->niveau_id}}">
                </div>
                <div class="form-group">
                <label for="seance_id">Seance ID</label>
                <input type="text" name="seance_id" class="form-control" value="{{$groupes->seance_id}}">
                </div>

               

                <div class="form-group">
                <input type="submit" class="form-control btn btn-danger" value="Modifier">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection