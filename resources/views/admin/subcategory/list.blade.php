@extends('admin.layouts.app')

@section('styles')
    {{-- for specific styles --}}
@endsection


@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Sub Category List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{ url('admin/sub_category/add') }}" class="btn btn-primary">Add New Sub Category</a>
                    </div>
                </div>
            </div>
        </section>

        @include('admin.layouts._message')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Existing Sub Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>

                                            <th>id</th>
                                            <th>Category name</th>
                                            <th>Sub Category name</th>
                                            <th>Slug</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Keywords</th>
                                            <th>Created By</th>
                                            <th>Status</th>
                                            <th>Created_at</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $item)
                                            <tr>
                                               
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td>{{ $item->slug }}</td>
                                                <td>{{ $item->meta_title }}</td>
                                                <td>{{ !empty($item->meta_description)? $item->meta_description : 'Null' }}</td>
                                                <td>{{ !empty($item->meta_keywords)? $item->meta_keywords : 'Null' }}</td>
                                                <td>{{ $item->created_by_name }}</td>
                                                <td>{{ $item->status == 0 ? 'Active' : 'Inactive' }}</td>
                                                <td>{{ date('d-m-Y', $item->Created_at) }}</td>
                                                <td>
                                                    <a href="{{ url('admin/sub_category/edit/' . $item->id) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ url('admin/sub_category/delete/' . $item->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>



            </div>
        </section>
    </div>
@endsection

@section('script')
    {{-- for specific scripts --}}
@endsection
