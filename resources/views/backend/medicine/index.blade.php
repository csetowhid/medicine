@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <h6>Add New Medicine</h6>
        </div>
        <div class="ms-panel-body">
            <form action="{{route('medicine.add')}}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom006">Medicine name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="medicine_name" id="validationCustom006" placeholder="Medicine name" required>
                            <div class="invalid-tooltip">
                                Please Provide a Medicine Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom007">Generic name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="medicine_generic_name" id="validationCustom007" placeholder="Generic name" required>
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
                            <input type="text" class="form-control" name="medicine_brand_name" id="validationCustom008" placeholder="Brand Name" required>
                            <div class="invalid-tooltip">
                                Please Provide a Brand Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom009">Drug Class</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="medicine_drug_class" id="validationCustom009" placeholder="Drug Class" required>
                            <div class="invalid-tooltip">
                                Please Provide a Drug Class.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom008">Alphabet</label>
                        <div class="input-group">
                            <select class="form-control" name="alpha_id" id="alpha_idds" required>
                                <option value="">Select</option>
                                @if(isset($alpha))
                                    @foreach($alpha as $al)
                                <option value="{{$al->id}}">{{$al->alpha_name}}</option>
                                    @endforeach
                                    @endif
                            </select>
                            <div class="invalid-tooltip">
                                Please Provide Alphabet.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom009">Sub Alphabet </label>
                        <div class="input-group">
                            <select class="form-control" name="subalpha_id" id="sub_idds" required>
                                <option value="">Select</option>
                                @if(isset($subalpha))
                                    @foreach($subalpha as $sub)
                                        <option value="{{$sub->id}}">{{$sub->sub_alpha_name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <div class="invalid-tooltip">
                                Please Provide Sub Alphabet.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Medicine Image</label>
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
                                       <input type="radio" value="1" name="medicine_status">
                                       <i class="ms-checkbox-check"></i>
                                   </label>
                                   <span> Active </span>
                           </div>
                           <div class="col-md-6">
                                   <label class="ms-checkbox-wrap ms-checkbox-danger">
                                       <input type="radio" value="0" name="medicine_status">
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
                        <textarea id="summernote" name="medicine_description"></textarea>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom009">Title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{ old('medicine_seo_title') }}" name="medicine_seo_title" id="validationCustom009" placeholder="SEO Title" required>
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
                            <input type="text" class="form-control" value="{{ old('medicine_seo_permalink') }}" name="medicine_seo_permalink" id="validationCustom009" placeholder="SEO Permalink" required>
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
                            <textarea class="form-control" name="medicine_seo_description" id="validationCustom009" placeholder="SEO Description" required rows="3"></textarea>
                            <div class="invalid-tooltip">
                                Please Provide a SEO Description.
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="form-row">--}}
{{--                    <div class="col-md-12 mb-3">--}}
{{--                        <label for="validationCustom009">Status</label>--}}
{{--                        <li>--}}
{{--                            <label class="ms-switch">--}}
{{--                                <input type="checkbox" checked>--}}
{{--                                <span class="ms-switch-slider ms-switch-success round"></span>--}}
{{--                            </label>--}}
{{--                            <span> </span>--}}
{{--                        </li>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        var a = <?php echo json_encode($subalpha, true); ?>;
        $('select[id="alphabet_idd"]').change(function () {
            var val = $(this).val();
            $('select[id="sub_idd"]').html('<option value="">Select</option>');
            a.forEach(function (data) {
                if (data.alpha_id == val) {
                    var html = '<option value="';
                    html += data.subalpha_id;
                    html += '">';
                    html += data.sub_alpha_name;
                    html += '</option>';
                    $('select[id="sub_idd"]').append(html);
                }
            });
        });

        $('select[id="alpha_idds"]').change(function () {
            var val = $(this).val();
            $('select[id="sub_idds"]').html('<option value="">Select</option>');
            a.forEach(function (data) {
                if (data.alpha_id == val) {
                    var html = '<option value="';
                    html += data.subalpha_id;
                    html += '">';
                    html += data.sub_alpha_name;
                    html += '</option>';
                    $('select[id="sub_idds"]').append(html);
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 350,
            });
        });
    </script>
@endsection
