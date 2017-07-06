@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {{Form::model($category,['route'=>['categories.update',$category->id],'method'=>'PUT',])}}

            {{Form::label('name','Category Name:')}}
            {{Form::text('name',null,['class'=>'form-control'])}}


            <a href="{{route('categories.index')}}" class="btn btn-default">Cancel</a>
            {{Form::submit('Save changes',['class'=>'btn btn-success'])}}

            {{Form::close()}}
        </div>
    </div>


@endsection