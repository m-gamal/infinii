@extends('admin.layouts.master')
@section('title')
Partners List
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
                <a href="{{URL::route('partners')}}">Partners List</a>
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
                            <span class="caption-subject font-dark sbold uppercase">Partners List</span>
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

                        <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                            <thead>
                                <tr>
                                    <th class="text-center"> Name </th>
                                    <th class="text-center"> Email </th>
                                    <th class="text-center"> Partner with </th>
                                    <th class="text-center"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($partners) > 0)
                                @foreach($partners as $singlePartner)
                                <tr class="text-center">
                                    <td>{{$singlePartner->name}}</td>
                                    <td>{{$singlePartner->email}}</td>
                                    <td> [Publisher Name] </td>
                                    <td>
                                        <a data-toggle="modal" href="#delete_product_{{$singlePartner->id}}" class="btn btn-danger"> 
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="delete_product_{{$singlePartner->id}}" tabindex="-1" role="basic" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            {!! 
                                            Form::open
                                            ([
                                                'route' =>  array('do-delete-member', $singlePartner->id),
                                                'class' =>  'form-horizontal',
                                                'role'  =>  'form'
                                            ])
                                            !!}
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                <h4 class="modal-title">Confirm the deletion</h4>
                                            </div>
                                            <div class="modal-body"> 
                                                Are you sure to delete product 
                                                {{$singlePartner->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn dark btn-outline" data-dismiss="modal">No</button>
                                                <button type="submit" class="btn green">Yes</button>
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
    $('#partners').addClass('active');
</script>
@endsection