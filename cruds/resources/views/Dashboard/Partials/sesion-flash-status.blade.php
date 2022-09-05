@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif    
@csrf
<!--  si session encuentra status -->
@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
@endif