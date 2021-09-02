@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <h6>Add New Blog</h6>
            </div>
            <div class="ms-panel-body">
                <form action="{{route('blog.create')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom006">Title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('blog_title') }}" name="blog_title" id="validationCustom006" placeholder="Title" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Blog Title.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Blog Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="blog_image">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <small>Picture Size Must be Less than 4000 kb</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">Description</label>
                            <textarea id="summernote" name="blog_description"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">SEO Title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('blog_seo_title') }}" name="blog_seo_title" id="validationCustom009" placeholder="SEO Title" required>
                                <div class="invalid-tooltip">
                                    Please Provide a SEO Title.
                                </div>
                            </div>
                            <small>SEO Title can't be More Than 60 Words</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">Permalink</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ old('blog_seo_permalink') }}" name="blog_seo_permalink" id="validationCustom009" placeholder="SEO Permalink" required>
                                <div class="invalid-tooltip">
                                    Please Provide a SEO Permalink.
                                </div>
                            </div>
                            <small>SEO Permalink can't be More Than 160 Words</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">Description</label>
                            <div class="input-group">
                                <textarea class="form-control" value="{{ old('blog_seo_description') }}" name="blog_seo_description" id="validationCustom009" placeholder="SEO Description" required rows="3"></textarea>
                                <div class="invalid-tooltip">
                                    Please Provide a SEO Description.
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 350,
            });
        });
    </script>
@endsection
