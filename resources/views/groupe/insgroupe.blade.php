@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form  action="{{url('getgroupes')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}" >
            <h1 style="text-align:center"> Ajouter un groupe</h1>
            <br/>
            <br/>
                <div class="form-group">
                <label for="num">Numero de groupe</label><input type="text" name="num" class="form-control">
                </div>

                <div class="form-group">
                <label for="seance_id"> La seance de ce groupe</label><input type="text" name="seance_id" class="form-control">
                </div>


                <div class="form-group">
                <label for="niveau_id"> Le Niveau</label><input type="text" name="niveau_id" class="form-control">
                </div>

                

                <div class="form-group">
                <input type="submit" class="form-control btn btn-warning" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection