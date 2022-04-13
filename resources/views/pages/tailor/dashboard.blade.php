@extends('layouts.tailor')

@section('title')
    Dashboard Tailor - Jait Jait
@endsection

@section('content')
   <div class="mt-5 container">
        <p class="fw-bold fs-2">Dashboard Admin</p>
        <hr />
        <canvas id="myChart" width="400" height="150"></canvas>
        <div class="d-flex w-auto mt-5">
            <div class="w-50">
                <canvas id="myChart2" width="400" height="150"></canvas>
            </div>
            <div class="w-50">
                <canvas id="myChart3" width="400" height="150"></canvas>
            </div>
        </div>
    </div>
@endsection
