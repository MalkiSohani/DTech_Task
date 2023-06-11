@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4><b>{{ __('ADMIN PANEL') }}</b></h4></div>


                <div class="card-body">
                <a href="{{ route('companies.index') }}" class="btn btn-link"><h5><b>Companies Manage</h5></b></a></h3><br>
                <a href="{{ route('employees.index') }}" class="btn btn-link"><h5><b>Employees Manage</h5><b></a> <br>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
