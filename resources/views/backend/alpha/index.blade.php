@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <div class="row">
                    <div class="col-md-6">
                        <h6>All Alpha List</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                         <button class="btn btn-primary" data-toggle="modal" data-target="#modal-3">Add Alpha </button>
                    </div>
                </div>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table class="table table-striped thead-primary">
                        <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Alpha Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($alpha))
                            @php $i = 0 @endphp
                            @foreach($alpha as $key)
                        <tr>
                            <td class="text-center">{{$i+1}}</td>
                            @php $i++;  @endphp
                            <td class="text-center">{{$key->alpha_name}}</td>
                            <td class="text-center">{{$key->alpha_description}}</td>
                            <td class="text-center">
                                <a href="#"><i class="fas fa-pencil-alt ms-text-primary" data-toggle="modal" data-target="#modal-3"></i></a>
                                <a href="a"><i class="far fa-trash-alt ms-text-danger"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!----------Add Modal Start--------->
                    <div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{route('alpha.create')}}" method="post" class="needs-validation" novalidate>
                                    @csrf
                                <div class="modal-header">
                                    <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i> Add New Alphabet</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <label for="validationCustom008">Alpha Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="alpha_name" id="validationCustom008" placeholder="Alpha Name" required>
                                                <div class="invalid-tooltip">
                                                    Please Provide a Alphabet Name.
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="validationCustom008">Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="alpha_description" id="validationCustom009" placeholder="Description" required rows="3"></textarea>
                                            <div class="invalid-tooltip">
                                                Please Provide a Description.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary shadow-none">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!----------Add Modal End--------->
            </div>
        </div>





{{--        <div class="ms-panel">--}}
{{--            <div class="ms-panel-header">--}}
{{--                <h6>Add New Medicine</h6>--}}
{{--            </div>--}}
{{--            <div class="ms-panel-body">--}}
{{--                <form action="{{route('medicine.add')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="validationCustom006">Medicine name</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" name="medicine_name" id="validationCustom006" placeholder="Medicine name" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a Medicine Name.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="validationCustom007">Generic name</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" name="medicine_generic_name" id="validationCustom007" placeholder="Generic name" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a Generic Name.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="validationCustom008">Brand Name</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" name="medicine_brand_name" id="validationCustom008" placeholder="Brand Name" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a Brand Name.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="validationCustom009">Drug Class</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" name="medicine_drug_class" id="validationCustom009" placeholder="Drug Class" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a Drug Class.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label>Medicine Image</label>--}}
{{--                            <div class="custom-file">--}}
{{--                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="medicine_image">--}}
{{--                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>--}}
{{--                                <small>Picture Size Must be Less than 4000 kb</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label>Status</label>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="ms-checkbox-wrap ms-checkbox-success">--}}
{{--                                        <input type="radio" value="1" name="medicine_status">--}}
{{--                                        <i class="ms-checkbox-check"></i>--}}
{{--                                    </label>--}}
{{--                                    <span> Active </span>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label class="ms-checkbox-wrap ms-checkbox-danger">--}}
{{--                                        <input type="radio" value="0" name="medicine_status">--}}
{{--                                        <i class="ms-checkbox-check"></i>--}}
{{--                                    </label>--}}
{{--                                    <span> InActive </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-12 mb-3">--}}
{{--                            <label for="validationCustom009">Description</label>--}}
{{--                            <textarea id="summernote" name="medicine_description"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-12 mb-3">--}}
{{--                            <label for="validationCustom009">Title</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" value="{{ old('medicine_seo_title') }}" name="medicine_seo_title" id="validationCustom009" placeholder="SEO Title" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a SEO Title.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <small>SEO Title can't be More Than 60 Words</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-12 mb-3">--}}
{{--                            <label for="validationCustom009">Permalink</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" value="{{ old('medicine_seo_permalink') }}" name="medicine_seo_permalink" id="validationCustom009" placeholder="SEO Permalink" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a SEO Permalink.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <small>SEO Permalink can't be More Than 160 Words</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-md-12 mb-3">--}}
{{--                            <label for="validationCustom009">Description</label>--}}
{{--                            <div class="input-group">--}}
{{--                                <textarea class="form-control" name="medicine_seo_description" id="validationCustom009" placeholder="SEO Description" required rows="3"></textarea>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a SEO Description.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button class="btn btn-primary" type="submit">Submit</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@endsection
