@extends('backend.layouts.app')
@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        Blogs Management <small class="text-muted"> Blog</small>
                    </h4>
                </div><!--col-->

                <div class="col-sm-7">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="Create New"><i class="fas fa-plus-circle"></i></a>
                    </div><!--btn-toolbar-->
                </div><!--col-->
            </div><!--row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-inverse">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Text</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>User Uploaded</th>
                                <th>Active</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $result)
                            <tr>
                                <th scope="row">{{$result->id}}</th>
                                <td>{{$result->title}}</td>
                                <td>{{$result->text}}</td>
                                <td>{{$result->image}}</td>
                                <td>{{$result->category_id}}</td>
                                <td>{{$result->user_id}}</td>
                                <td>{{$result->active}}</td>
                                <td>{{$result->created_at}}</td>
                                <td>@mdo</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--col-->
            </div><!--row-->
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        totals blog post :10
                    </div>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection