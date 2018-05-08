@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="card-group mb-4">
        <!-- Count Menus upload -->
        <div class="card">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="icon-globe"></i>
                </div>
                <div class="h4 mb-0">10</div>
                <small class="text-muted text-uppercase font-weight-bold">menu</small>
                <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="font-weight-bold font-xs btn-block text-muted" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
        <!-- End count Menus upload -->
        <!-- Count Events upload -->
        <div class="card">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="icon-music-tone "></i>
                </div>
                <div class="h4 mb-0">20</div>
                <small class="text-muted text-uppercase font-weight-bold">Events</small>
                <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="font-weight-bold font-xs btn-block text-muted" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
        <!-- End Count Events upload -->
        <!-- Count Blog post upload -->
        <div class="card">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="icon-music-tone "></i>
                </div>
                <div class="h4 mb-0">20</div>
                <small class="text-muted text-uppercase font-weight-bold">Blog post</small>
                <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="font-weight-bold font-xs btn-block text-muted" href="#">View More <i class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
        <!-- End Count Blog post upload -->
        <!-- Count User register -->
        <div class="card">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="icon-people"></i>
                </div>
                <div class="h4 mb-0">87.500</div>
                <small class="text-muted text-uppercase font-weight-bold">Users</small>
                <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="font-weight-bold font-xs btn-block text-muted" href="#">Reed More  <i class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
        <!-- End Count User register -->
        <!-- Site Errors -->
        <div class="card">
            <div class="card-body">
                <div class="h1 text-muted text-right mb-4">
                    <i class="icon-info "></i>
                </div>
                <div class="h4 mb-0">12</div>
                <small class="text-muted text-uppercase font-weight-bold">Sites Error</small>
                <div class="progress progress-xs mt-3 mb-0">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="font-weight-bold font-xs btn-block text-muted" href="{{ route('log-viewer::logs.list') }}">{!! trans('strings.backend.general.see_all.more_info') !!} <i class="fa fa-angle-right float-right font-lg"></i></a>
            </div>
        </div>
        <!-- End site Errors -->
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block">
                    {!! __('strings.backend.welcome') !!}
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
