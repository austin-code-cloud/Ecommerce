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
                        <h1>Add New Admin</h1>
                    </div>

                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-primary">

                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="Enter email">
                                        <div style="color: red">{{$errors->first('email')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option {{ (old('status') == 0) ? 'selected' : ''}} value="0">Active</option>
                                            <option {{ (old('status') == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection

@section('script')
    {{-- for specific scripts --}}
@endsection
