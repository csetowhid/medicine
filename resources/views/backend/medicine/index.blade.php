@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
    <div class="ms-panel">
        <div class="ms-panel-header">
            <h6>Add New Medicine</h6>
        </div>
        <div class="ms-panel-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom006">First name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom006" placeholder="First name" value="Anastasia">
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom007">Last name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom007" placeholder="Last name" value="Yenden" required>
                            <div class="valid-tooltip">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername1">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend1">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername1" placeholder="Username" aria-describedby="inputGroupPrepend1" required>
                            <div class="invalid-tooltip">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom008">City</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom008" placeholder="City" required>
                            <div class="invalid-tooltip">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom009">State</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom009" placeholder="State" required>
                            <div class="invalid-tooltip">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom100">Zip</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationCustom100" placeholder="Zip" required>
                            <div class="invalid-tooltip">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check pl-0">
                        <label class="ms-checkbox-wrap">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck1">
                            <i class="ms-checkbox-check"></i>
                        </label>
                        <span> Agree to terms and conditions </span>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>
    </div>
@endsection
