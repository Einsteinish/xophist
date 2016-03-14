@extends('layouts.master')

@section('content')
    <div class="main-container">
         <h1>Xophist</h1>
         <p class="lead">Powered by Laravel</p>

         <hr>

         <div class="row">
            <div class="col-sm-6">
                <h2>Yosemite 1</h2>
                <p><a href="/view-1" role="button" class="btn btn-default">View more »</a></p>
                <img src="/images/yi078.png" width="90%">
            </div>
            <div class="col-sm-6">
                <h2>Yosemite 2</h2>
                <p><a href="/view-2" role="button" class="btn btn-default">View more »</a></p>
                <img src="/images/out041.png" width="90%">            
            </div>
        </div>
    </div>
@stop
