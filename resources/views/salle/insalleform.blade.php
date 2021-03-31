@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{url('getsalles')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <h1 style="text-align:center"> Ajouter une salle</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="Name">Nom de la salle</label><input type="text" name="nom" class="form-control">
                </div>

                <div class="form-group">
                <input type="submit" class="form-control btn btn-warning" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection