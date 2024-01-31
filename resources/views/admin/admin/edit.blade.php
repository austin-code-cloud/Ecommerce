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
                        <h1>Update Admin</h1>
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
                                        <input type="text" class="form-control" value="{{ old ('name', $getRecord->name) }}" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ old ('email', $getRecord->email) }}" name="email" placeholder="Enter email">
                                        <div style="color: red">{{$errors->first('email')}}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <p style="font-weight: bold; color: red">If you want to change password, please type, else leave empty</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option {{ ($getRecord->status == 0) ? 'selected' : ''}} value="0">Active</option>
                                            <option {{ ($getRecord->status == 1) ? 'selected' : ''}} value="1">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
