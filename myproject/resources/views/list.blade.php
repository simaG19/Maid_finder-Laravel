@extends ('layout')
@section('content')
@if(session(' success'))
<div class= "alert alert-success at-3%">
{{ session('success') }}
</div>

@endif
<h1>users</h1>


<div classs="pb-3">
<a class="btn btn-success" href="{{ route("create") }}" >Add user</a>

</div>