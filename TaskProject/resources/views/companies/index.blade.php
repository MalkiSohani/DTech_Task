@extends('layouts.app')

@section('content')
    <h2>Companies</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Create Company</a>
    <a href="{{ route('home') }}" class="btn btn-success mb-3">Go Dashboard</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->website }}</td>
                    <td>
                        <a href="{{ route('companies.show', $company) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('companies.destroy', $company) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $companies->links() }}
@endsection