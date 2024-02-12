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
                        <h1>Add New Sub Category</h1>
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
                                        <label>Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select</option>
                                            @foreach ($getCategory as $item)
                                                <option {{ $item->id == $getRecord->category_id ? 'selected' : '' }} value="{{$item->id }}">{{ $item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub Category Name <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" name="sub_category_name"
                                            value="{{ old('name', $getRecord->name) }}" placeholder="Category_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" name="slug"
                                            value="{{ old('slug', $getRecord->slug) }}" placeholder="Slug Ex. URL">
                                        <div style="color: red">{{ $errors->first('slug') }}</div>
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option {{ $getRecord->status == 0 ? 'selected' : '' }} value="0">Active
                                            </option>
                                            <option {{ $getRecord->status == 1 ? 'selected' : '' }} value="1">Inactive
                                            </option>
                                        </select>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label>Meta title <span style="color: red">*</span></label>
                                        <input type="text" class="form-control" name="meta_title"
                                            value="{{ old('meta_title', $getRecord->meta_title) }}" placeholder="Meta_title">
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea class="form-control" name="meta_description" placeholder="Meta_description">{{ old('meta_description', $getRecord->meta_description) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Meta Keyboards</label>
                                        <input type="text" class="form-control" name="meta_keywords"
                                            value="{{ old('meta_keyword', $getRecord->meta_keywords) }}" placeholder="Meta_keywords">
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
