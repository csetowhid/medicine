@extends('backend.layouts.admin')
@section('admin_content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <h6>Add New Medicine</h6>
            </div>
            <div class="ms-panel-body">
                <form action="{{route('medicine.add')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$medicine->id}}">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom006">Medicine name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$medicine->medicine_name}}" name="medicine_name" id="validationCustom006" placeholder="Medicine name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Medicine Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom007">Generic name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$medicine->medicine_generic_name}}" name="medicine_generic_name" id="validationCustom007" placeholder="Generic name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Generic Name.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom008">Brand Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$medicine->medicine_brand_name}}" name="medicine_brand_name" id="validationCustom008" placeholder="Brand Name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Brand Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom009">Drug Class</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$medicine->medicine_drug_class}}" name="medicine_drug_class" id="validationCustom009" placeholder="Drug Class" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Drug Class.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Medicine Image</label>
                            <div>
                                <img id="old_image" style="width:150px;height: 100px;" src="{{URL::to($medicine->medicine_image)}}">
                            </div>
                            <br>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="medicine_image">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <small>Picture Size Must be Less than 4000 kb</small>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Status</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="ms-checkbox-wrap ms-checkbox-success">
                                        <input type="radio" value="1" name="medicine_status" value="{{$medicine->medicine_status}}" <?php if($medicine->medicine_status == 1){ echo "checked";} ?>>
                                        <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> Active </span>
                                </div>
                                <div class="col-md-6">
                                    <label class="ms-checkbox-wrap ms-checkbox-danger">
                                        <input type="radio" value="0" name="medicine_status" value="{{$medicine->medicine_status}}" <?php if($medicine->medicine_status == 0){ echo "checked";} ?>>
                                        <i class="ms-checkbox-check"></i>
                                    </label>
                                    <span> InActive </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">Description</label>
                            <textarea id="summernote" name="medicine_description"><?php echo $medicine->medicine_description ?></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom009">Title</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{$medicine->medicine_seo_title}}" name="medicine_seo_title" id="validationCustom009" placeholder="SEO Title" required>
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
                                <input type="text" class="form-control" value="{{$medicine->medicine_seo_permalink}}" name="medicine_seo_permalink" id="validationCustom009" placeholder="SEO Permalink" required>
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
                                <textarea class="form-control" name="medicine_seo_description" id="validationCustom009" placeholder="SEO Description" required rows="3"><?php echo $medicine->medicine_seo_description ?></textarea>
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
