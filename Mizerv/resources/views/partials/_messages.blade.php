@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success:</strong> {{\Illuminate\Support\Facades\Session::get('success')}}
    </div>
@endif

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        <ui>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ui>
    </div>

@endif
