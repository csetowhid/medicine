@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <h6>Edit Blog</h6>
            </div>
            <div class="ms-panel-body">
                <form action="{{route('blog.create')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$blog->id}}">
                    <div class="form-row">
                            <label for="validationCustom006">Title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$blog->blog_title}}" name="blog_title" id="validationCustom006" placeholder="Title" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Blog Title.
                                </div>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Blog Image</label>
                            <div>
                                <img id="old_image" style="width:150px;height: 100px;" src="{{URL::to($blog->blog_image)}}">
                            </div>
                            <br>
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
                            <textarea id="summernote" name="blog_description"><?php echo $blog->blog_description ?></textarea>
                        </div>
                    </div>
                    <hr>
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
