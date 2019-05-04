@extends('backend.layouts.app')
@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                       Menu Category Management <small class="text-muted">Menu Category</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    {{ html()->form('POST', route('admin.menu_category.store'))->open() }}
                        @include('backend.category._form')
                    {{ html()->submit('Save')->class('btn btn-outline-primary') }}
                    {{ html()->submit('Cancel')->class('btn btn-outline-danger') }}
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection