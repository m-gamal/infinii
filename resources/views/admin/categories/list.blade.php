@extends('admin.layouts.master')
@section('title')
Categories List
@endsection
@section('custom_head_scripts')
<link href="{{URL::asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{URL::route('dashboard')}}">Dashboard</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="{{URL::route('categories')}}">Categories List</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-list font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Categories List</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        @if(Session::has('message'))
                            <div class="form-group">
                                <div class="alert alert-success alert-dismissable">
                                    <i class="fa fa-check"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <b> Success : </b> {{ Session::get('message') }}
                                </div>
                            </div>
                        @endif
                        
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{URL::route('add-category')}}" class="btn green"> Add New
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th class="text-center"> Name </th>
                                    <th class="text-center"> Static Name </th>
                                    <th class="text-center"> Number Of Product </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($categories) > 0)
                                @foreach($categories as $singleCategory)
                                <tr class="text-center">
                                    <td>{{$singleCategory->name}}</td>
                                    <td>{{$singleCategory->static_name}}</td>
                                    <td>0</td>
                                    <td>
                                        <a href="{{URL::route('do-edit-category', $singleCategory->id)}}" class="btn btn-info"> 
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                        <a class="btn btn-danger" data-toggle="modal" href="#delete_category_{{$singleCategory->id}}"> 
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="delete_category_{{$singleCategory->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            {!! 
                                            Form::open
                                            ([
                                                'route' =>  array('do-delete-category', $singleCategory->id),
                                                'class' =>  'form-horizontal',
                                                'role'  =>  'form'
                                            ])
                                            !!}
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Confirm the deletion</h4>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete category 
                                                {{$singleCategory->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn red">Yes</button>
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>   
@endsection

@section('custom_footer_plugins')
<script src="{{URL::asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
@endsection

@section('custom_footer_scripts')
<script src="{{URL::asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $('#categories').addClass('active');
</script>
@endsection