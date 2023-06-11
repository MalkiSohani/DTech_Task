@extends('layouts.app')

@section('content')
    <h2>Edit Company</h2>

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $company->email }}" required>
        </div>

        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" id="website" class="form-control" value="{{ $company->website }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
