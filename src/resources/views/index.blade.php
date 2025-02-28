@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('envmanager.update') }}">
    @csrf
    <textarea name="env_content" rows="20" class="form-control">{{ $envContent }}</textarea>
    <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection