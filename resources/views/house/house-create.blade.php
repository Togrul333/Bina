@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">+ Add House</div>
                <div class="tab-content flex-column active-tab" >
                    <div class="row mb-3" style="margin-top: 10px">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Username client</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control name" name="name"  required autocomplete="name" autofocus>
                            <span class="input-error error-name"></span>
                        </div>
                    </div>

                    <div class="row mb-3" style="margin-top: 10px">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email client</label>
                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control email" name="email">
                            <span class="input-error error-email"></span>
                        </div>

                    </div>
                    <div class="row mb-3" style="margin-top: 10px">
                        <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control address" name="address">
                            <span class="input-error error-address"></span>
                        </div>

                    </div>
                    <div class="row mb-3" style="margin-top: 10px">
                        <label for="region" class="col-md-4 col-form-label text-md-end">Region</label>

                        <div class="col-md-6">
                            <input id="region" type="text" class="form-control region" name="region">
                            <span class="input-error error-region"></span>
                        </div>
                    </div>

                    <div class="tab-content-item d-flex justify-content-end">
                        <a href="#" data-url="{{route('save.house')}}" class="save-house-btn btn btn--outline btn--md py-7 radius">
                            <span class="info">Save Changes</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/add-house.js')}}"></script>
@endsection
