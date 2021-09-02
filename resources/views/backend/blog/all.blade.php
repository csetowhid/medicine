@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-md-12 col-sm-6">
        <div class="ms-panel">
            <div class="ms-panel-header">
                <h6>All Medicine Name</h6>
            </div>
            <div class="ms-panel-body">
                <div class="table-responsive">
                    <table id="data_table" class="table table-striped thead-primary w-100">
                        <thead>
                        <tr>
                            <th class="text-center">Title</th>
{{--                            <th class="text-center">Image</th>--}}
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function (){
            iss()
        })
        function iss(){
            $('#data_table').DataTable({
                serverSide:true,
                responsive: true,
                ajax : {
                    url : "{{route('blog.all')}}"
                },
                columns:[
                    // {
                    //     "data" :null, "sortable": false,
                    //     render : function (data, type, row, meta) {
                    //         return meta.row + meta.settings._iDisplayStart + 1
                    //     }
                    // },
                    {data: 'medicine_name', name: 'blog_title'},
                    {data: 'medicine_generic_name', name: 'medicine_generic_name'},
                    {data: 'medicine_brand_name', name: 'medicine_brand_name'},
                    {data: 'medicine_drug_class', name: 'medicine_drug_class'},
                    {data: 'status', name: 'blog_status'},
                    {data: 'Actions', name: 'Actions'},
                ]
            })
        }
    </script>
@endsection
