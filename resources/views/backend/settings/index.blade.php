@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="col-md-3 col-sm-6">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-7"> Add Settings</button>
            </div>
            <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="modal-7">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form class="needs-validation" novalidate>
                        <div class="modal-header bg-primary">
                            <h3 class="modal-title has-icon text-white"><i class="flaticon-share"></i>Add New Settings</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom009">Settings Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom009" placeholder="Settings Name" required>
                                            <div class="invalid-tooltip">
                                                Please Provide a Settings Name.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom009">Settings Value</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom009" placeholder="Settings Value" required>
                                            <div class="invalid-tooltip">
                                                Please Provide a Settings Value.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="ms-panel-header">
                <h6>Add New Medicine</h6>
            </div>
            <div class="ms-panel-body">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom006">Medicine name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom006" placeholder="Medicine name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Medicine Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom007">Generic name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom007" placeholder="Generic name" required>
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
                                <input type="text" class="form-control" id="validationCustom008" placeholder="Brand Name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Brand Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom009">Drug Class</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustom009" placeholder="Drug Class" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Drug Class.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <textarea id="summernote" name="editordata"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
@endsection
