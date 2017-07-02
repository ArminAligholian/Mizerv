@extends('main')


@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'textarea',
            plugins: "lists",
            plugins:"link",
            menubar:false
        });
    </script>

@endsection

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

            {{Form::label('areas','Areas:')}}
            <select class="form-control select2-multi" name="areas[]" multiple="multiple">
                @foreach($areas as $area)
                    <option value='{{ $area->id }}'>{{ $area->name }}</option>
                @endforeach
            </select>

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

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection

