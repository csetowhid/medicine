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
                            <th>Medicine Name</th>
                            <th>Generic Name</th>
                            <th>Brand</th>
                            <th>Class</th>
                            <th>Status</th>
                            <th>Action</th>
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
                    url : "{{route('medicine.all')}}"
                },
                columns:[
                    // {
                    //     "data" :null, "sortable": false,
                    //     render : function (data, type, row, meta) {
                    //         return meta.row + meta.settings._iDisplayStart + 1
                    //     }
                    // },
                    {data: 'medicine_name', name: 'medicine_name'},
                    {data: 'medicine_generic_name', name: 'medicine_generic_name'},
                    {data: 'medicine_brand_name', name: 'medicine_brand_name'},
                    {data: 'medicine_drug_class', name: 'medicine_drug_class'},
                    {data: 'status', name: 'status'},
                    {data: 'Actions', name: 'Actions'},
                ]
            })
        }
    </script>
@endsection
