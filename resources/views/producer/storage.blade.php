@extends('producer.master')

@section('header')
<style>
    body {
        background-color: #f8f9fa;
    }

    .form-container {
        /* max-width: 600px; */
        margin: 50px auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        margin-bottom: 30px;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .submit-btn {
        background-color: #007bff;
        border-color: #007bff;
    }

    .submit-btn:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

@endsection

@section('content')
<div class="content-page">
    <div class="container-fluid">


        <div class="card col-md-12">
            <div class="card-header d-flex justify-content-between border-none">
                <div class="iq-header-title">
                    <h4 class="card-title">My Folders</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Create Folder
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Folder</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <form method="post" action='/create-folder'>@csrf
                                    <input type='text' class='form-control' name='name' placeholder="Folder's name"/>
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add </button>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <a class='btn btn-warning' href='/create-beat'> Create Beat</a>
                    <p class='m-2 text-primary'><i>/Home</i></p>
                </div>
              
            </div>

            <div class="card-body">
                <div class="">


                    <table class="data-tables table table-borderless dataTable no-footer" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                            <tr role="row">
                                <th style="width: 123px;" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                                <th style="width: 65px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Modified: activate to sort column ascending">Last Modified</th>
                                <th style="width: 16px;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tbody>








                        @foreach($folders as $folder)
                            <tr role="row" class="odd">
                                <td class="sorting_1">
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href='/user-storage/{{$folder->uuid}}'>
                                                <div class="bg-primary-light bg-box-color mr-2">
                                                    <i class="ri-folder-fill text-primary"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <a href='/user-storage/{{$folder->uuid}}'><h6 class="font-weight-600 mb-0">{{$folder->name}}</h6></a>
                                        </div>
                                    </div>
                                </td>
                               
                                <td>
                                    <p class="mb-0">{{Date('d-m-Y',strtotime($folder->created_at))}}</p>
                                </td>
                              
                                <td>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary drop-idrive" id="dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                            <i class="ri-more-2-fill text-primary"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5" style="">
                                            <a class="dropdown-item" href='/user-storage/{{$folder->uuid}}' tabindex="0"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#" tabindex="0"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#" tabindex="0"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                            @foreach($beats as $beat)
                             
                            <tr role="row" class="even">
                                <td class="sorting_1">
                                    <div class="media align-items-center">
                                        <div class="iq-movie">
                                            <a href="javascript:void(0);">
                                                <div class="bg-warning-light bg-box-color mr-2">
                                                    <i class="ri-file-fill text-warning"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="media-body text-white text-left ml-3">
                                            <h6 class="font-weight-600 mb-0">{{$beat->title}}</h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>
                                    <p class="mb-0">{{Date('d-m-Y', strtotime($beat->created_at))}}</p>
                                </td>
                                
                                <td>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle text-primary drop-idrive" id="dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                            <i class="ri-more-2-fill text-primary"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6" style="">
                                            <a class="dropdown-item" href="#" tabindex="0"><i class="ri-eye-fill mr-2"></i>View</a>
                                            <a class="dropdown-item" href="#" tabindex="0"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#" tabindex="0"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>

</script>

@endsection