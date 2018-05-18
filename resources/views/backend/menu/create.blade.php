@extends('backend.layouts.app')
@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Menu Management <small class="text-muted"> Menu</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <form action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include('backend.menu._form')
                        {{ html()->submit('Save')->class('btn btn-outline-primary') }}
                        {{ html()->submit('Cancel')->class('btn btn-outline-danger') }}
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection