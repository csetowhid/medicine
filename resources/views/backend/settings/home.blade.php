@extends('backend.layouts.admin')
@section('admin_content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="col-md-3 col-sm-6">
                <button class="btn btn-primary">Home Settings</button>
            </div>

            <div class="ms-panel-header">
                <h6>Most Popular</h6>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table class="table table-striped thead-primary">
                        <thead>
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Medicine Name</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($medicine))
                            @php $i = 0 @endphp
                            @foreach($medicine as $key)
                                <tr>
                                    <td class="text-center">{{$i+1}}</td>
                                    @php $i++;  @endphp
                                    <td class="text-center">{{$key->medicine_name}}</td>
                                    <td class="text-center">
                                        @if(!empty($key->medicine_image))
                                        <img src="{{URL::to($key->medicine_image)}}" style="max-width: 50px;height: 50px;">
                                        @else
                                            <img src="{{asset('upload/no_image.jpg')}}" style="max-width: 50px;height: 50px;">
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($key->medicine_most_popular == 0)
                                            <a style="cursor:pointer;margin-top: 0;" href="{{URL::to('admin/settings/popular/'.$key->id.'/'.'0')}}" class="btn btn-sm btn-pill btn-gradient-light">UnPopular</a>
                                        @else
                                        <a style="cursor:pointer;margin-top: 0;" href="{{URL::to('admin/settings/popular/'.$key->id.'/'.'1')}}" class="btn btn-sm btn-pill btn-gradient-dark">Popular</a>
                                        @endif
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
