@extends('backend.layouts.app')
@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Event Management <small class="text-muted"> Event</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <form>
                        @include('backend.event._form')
                        <button type="button" class="btn btn-outline-primary">Save</button>
                        <button type="button" class="btn btn-outline-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection