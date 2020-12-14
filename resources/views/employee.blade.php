@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Employee management system</title>
</head>
<body>

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Employee Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                        @include("employeeslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("employeeslist")
            </section>
            <section class="col-md-5">
                @include("createemployee")
            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("employeeslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("employeeslist")
            </section>
            <section class="col-md-5">
                @include("editemployee")
            </section>
        </div>
    </div>
@endif

</body>
</html>
<script>

</script>
@endsection
