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
                                <a style="cursor:pointer;" onclick="edit({{$key->id}})"><i class="fas fa-pencil-alt ms-text-primary" data-toggle="modal" data-target="#modal-edit"></i></a>
                                <a style="cursor:pointer;" href="{{URL::to('alpha/delete/'.$key->id)}}"><i class="far fa-trash-alt ms-text-danger"></i></a>
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
                <!----------Edit Modal Start--------->
                <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-3">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{route('alpha.create')}}" method="post" class="needs-validation" novalidate>
                                @csrf
                                <input type="hidden"  id="alpha_id" name="alpha_id">
                                <div class="modal-header">
                                    <h3 class="modal-title has-icon ms-icon-round "><i class="flaticon-share bg-primary text-white"></i>Edit Alphabet</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-row">
                                        <label for="validationCustom008">Alpha Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="alpha_name" name="alpha_name" placeholder="Alpha Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="validationCustom008">Description</label>
                                        <div class="input-group">
                                            <textarea class="form-control" name="alpha_description" id="alpha_description" placeholder="Description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary shadow-none">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!----------Edit Modal End--------->
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function edit(id)
        {
            $.ajax({
                type: "GET",
                url: "alpha/edit/" + id,
                dataType: 'JSON',
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText
                    alert(errorMessage);
                },
                success: function(data) {
                    // console.log(data);
                    var id = "",
                        name = "",
                        descriiption = "",

                    id = data.id;
                    name = data.alpha_name;
                    descriiption = data.alpha_description;

                    document.getElementById("alpha_id").value = id;
                    document.getElementById("alpha_name").value = name;
                    document.getElementById("alpha_description").value = descriiption;

                }
            });
        }
    </script>
@endsection
