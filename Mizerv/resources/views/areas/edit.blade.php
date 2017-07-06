@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{Form::model($area,['route'=>['areas.update',$area->id],'method'=>'PUT',])}}

            {{Form::label('name','Area Name:')}}
            {{Form::text('name',null,['class'=>'form-control'])}}


            <a href="{{route('areas.index')}}" class="btn btn-default">Cancel</a>
            {{Form::submit('Save changes',['class'=>'btn btn-success'])}}

            {{Form::close()}}
        </div>
    </div>


@endsection