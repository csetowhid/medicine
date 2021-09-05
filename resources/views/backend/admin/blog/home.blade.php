@extends('backend.layouts.admin')
@section('admin_content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary">All Blog List</button>
                    </div>
{{--                    <div class="col-md-6 d-flex justify-content-end">--}}
{{--                        <a href="{{route('blog.index')}}"> <button class="btn btn-primary">Add New Blog </button></a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table class="table table-striped thead-primary">
                        <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Blogger Name</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Point</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($blog))
                            @php $i = 0 @endphp
                            @foreach($blog as $key)
                                <tr>
                                    <td class="text-center">{{$i+1}}</td>
                                    @php $i++;  @endphp
                                    <td class="text-center">{{$key->blogger_name->name}}</td>
                                    <td class="text-center" style="max-width: 200px;">{{$key->blog_title}}</td>
                                    <td class="text-center">
                                        <img src="{{URL::to($key->blog_image)}}" style="max-width: 80px;height: 50px;">
                                    </td>
                                    <td class="text-center">
                                        @if ($key->blog_status == '1')
                                            <button class="btn btn-sm btn-success" style="margin-top: 0;">Active</button>
                                        @elseif($key->blog_status == '2')
                                            <button class="btn btn-sm btn-danger" style="margin-top: 0;">Pending</button>
                                        @else
                                            <button class="btn btn-sm btn-danger" style="margin-top: 0;">Deactive</button>
                                        @endif
                                    </td>
                                    <td class="text-center">{{$key->blog_point}}</td>
                                    <td class="text-center">
{{--                                        <a style="cursor:pointer;" href="{{URL::to('/blog/edit/'.$key->id)}}"><i class="fas fa-pencil-alt ms-text-primary"></i></a>--}}
                                        <a style="cursor:pointer;" onclick="confirm('{{URL::to('blog/delete/'.$key->id)}}')"><i class="far fa-trash-alt ms-text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

