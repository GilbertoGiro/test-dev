@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="mt-4">
                <h1>
                    Query
                </h1>
            </div>
        </div>
    </div>

    <hr class="mt-3 mb-3">

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-4">
                <div class="card-header">
                    <h4 class="mt-1 mb-1 bold">
                        Query (test-mysql)
                        <i class="fa fa-database float-lg-right" style="margin-top:2px;"></i>
                    </h4>
                </div>
                <div class="card-body">
                    <img src="{{ asset('img/query.png') }}">
                </div>
            </div>
        </div>
    </div>
@endsection