@if(count($errors) > 0)
    <div class="row">
        <div class="alert alert-danger col-md-12">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif