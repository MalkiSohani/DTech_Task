@extends('layouts.app')

@section('content')
    <h2>{{ $company->name }}</h2>

    <p>Email: {{ $company->email }}</p>
    <p>Website: {{ $company->website }}</p>

    <a href="{{ route('companies.edit', $company) }}" class="btn btn-secondary">Edit</a>

    <form action="{{ route('companies.destroy', $company) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
    </form>
@endsection
