@extends('layouts.calculator.calculator')

@section('content')
<div class="main_container" id="main_container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h2>進数変換器</h2>
                    <div id="calculator"></div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
