@extends('main')

@section('title', '| Create New Restaurant')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Restaurant</h1>
            <hr>
            <!-- without using form helper to upload file
                        <form method="post" action="..." enctype="multipart/form-data">

                        </form>
             -->
            {!! Form::open(array('route' => 'restaurants.store', 'data-parsley-validate' => '','files'=>'true')) !!}
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

            {{ Form::label('phone', 'Phone number:') }}
            {{ Form::text('phone', null, array('class' => 'form-control', 'required' => '', 'integer') ) }}

            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address', null, array('class' => 'form-control', 'required' => '') ) }}

            {{ Form::label('location', 'Location:')}}
            {{ Form::text('location', null, array('class' => 'form-control', 'required' => '') )}}

            {{Form::label('profile_image',"Upload profile image:")}}
            {{Form::file('profile_image')}}

            {{ Form::label('description', "Description:") }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}


            {{ Form::label('capacity', 'Capacity:') }}
            {{ Form::text('capacity', null, array('class' => 'form-control', 'required' => '', 'integer') ) }}

            {{ Form::submit('Create Restaurant', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {{ csrf_field() }}
            {!! Form::close() !!}
        </div>
    </div>

@endsection


