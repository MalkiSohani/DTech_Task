@extends('layouts.app')

@section('content')
    <h2>{{ $employee->first_name }} {{ $employee->last_name }}</h2>

    <p>Company: {{ $employee->company? $employee->company->name : 'N/A' }}</p>
    <p>Email: {{ $employee->email }}</p>
    <p>Phone: {{ $employee->phone }}</p>

    <a href="{{ route('employees.edit', $employee) }}" class="btn btn-secondary">Edit</a>

    <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
    </form>
@endsection
