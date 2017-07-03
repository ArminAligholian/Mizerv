@extends('main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{$category->id}}</th>
                        <td>
                            <a href="{{route('categories.show',$category->id)}}" class="btn btn-danger btn-xs">{{$category->name}}</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <div class="well">
                <form method="post" action="{{route('categories.store')}}">

                    <h2>new category</h2>

                    <!-- the input name should be the same name of the parameter that we want to be sent to the DB   -->
                    <label name="name" >Name:</label>
                    <input type="text" class="form-control"  name="name">
                    <br>
                    <button class="btn btn-primary btn-block" type="submit">Create new category</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </form>
            </div>
        </div>
    </div>

@endsection