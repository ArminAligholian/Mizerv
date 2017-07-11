@extends('main')


@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}


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

            {{Form::label('lat','latitude:')}}
            {{ Form::text('lat', null, array('class' => 'form-control', 'required' => '') )}}

            {{Form::label('lng','longitude:')}}
            {{ Form::text('lng', null, array('class' => 'form-control', 'required' => '') )}}

            {{Form::label('instagram','Instagram:')}}
            {{ Form::text('instagram', null, array('class' => 'form-control') )}}

            {{Form::label('telegram','Telegram:')}}
            {{ Form::text('telegram', null, array('class' => 'form-control') )}}

            {{Form::label('website','Website:')}}
            {{ Form::text('website', null, array('class' => 'form-control') )}}


            {{Form::label('sigar','Sigar:')}}
            <select class="form-control" name="sigar">
                   <option value="no">No smoking</option>
                   <option value="yes">Smoking is OK</option>
                   <option value="have">have smoking area</option>
            </select>

            {{Form::label('parking','Parking:')}}
            <select class="form-control" name="parking">
                <option value="easy">easy</option>
                <option value="hard">hard</option>
                <option value="none">none</option>
            </select>

            {{Form::label('expensive_grade','Expensive Grade:')}}
            <select class="form-control" name="expensive_grade">
                <option value="1">$</option>
                <option value="2">$$</option>
                <option value="3">$$$</option>
                <option value="4">$$$$</option>
            </select>
        <!-- these brackets below "near categories and areas in the select name" both are for selecting more than one of them
                that means with these brackets you can choose number of them-->
            {{Form::label('categories','Categories:')}}
            <select class="form-control select2-multi" name="categories[]" multiple="multiple">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

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
