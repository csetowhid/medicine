@extends('backend.layouts.admin')
@section('admin_content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="col-md-3 col-sm-6">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modal-7"> Add Settings</button>
            </div>
            <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="modal-7">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{route('settings.add')}}" class="needs-validation" novalidate method="post">
                            @csrf
                        <div class="modal-header bg-primary">
                            <h3 class="modal-title has-icon text-white"><i class="flaticon-share"></i>Add New Settings</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom009">Settings Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="settings_title" id="validationCustom009" placeholder="Settings Name" required>
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
                                            <input type="text" class="form-control" name="settings_value" id="validationCustom009" placeholder="Settings Value" required>
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
                <h6>All Settings</h6>
            </div>
            <div class="ms-panel-body">
                <form action="{{route('settings.update')}}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom006"><b>Domain name</b></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="settings[domain_name]" value="{{getsettings('domain_name')}}" id="validationCustom006" placeholder="Domain name" required>
                                <div class="invalid-tooltip">
                                    Please Provide a Domain Name.
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="validationCustom006"><b>Domain name</b></label>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="text" class="form-control" name="settings[new_name]" value="{{getsettings('new_name')}}" id="validationCustom006" placeholder="Domain name" required>--}}
{{--                                <div class="invalid-tooltip">--}}
{{--                                    Please Provide a Domain Name.--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
