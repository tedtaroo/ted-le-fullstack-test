@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>
                            Welcome to humming bird AI.
                        </p>
                        <p>
                            We have released new employee management feature. Please log in and enjoy!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
