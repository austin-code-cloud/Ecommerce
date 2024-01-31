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
                        <h1>Admin</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right">
                        <a href="{{ url('admin/admin/add') }}" class="btn btn-primary">Add New Admin</a>
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
                                <h3 class="card-title">Existing Admins</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $item)
                                            
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{ ($item->status == 0) ? 'Active' : 'Inactive' }}</td>  
                                            <td>
                                                <a href="{{ url('admin/admin/edit/'. $item->id) }}" class="btn btn-primary">Edit</a> 
                                                <a href="{{ url('admin/admin/delete/'. $item->id) }}" class="btn btn-danger">Delete</a> 
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
