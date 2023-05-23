@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Clients</div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="card-header">Houses</div>

                        <ul>
                            @foreach($houses as $house)
                                <li>{{$house->address}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
