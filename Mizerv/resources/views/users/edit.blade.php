@extends('main')

@section('content')

    <div class="row">
        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($user->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($user->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('users.show', 'Cancel', array($user->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>	<!-- end of .row (form) -->

@endsection