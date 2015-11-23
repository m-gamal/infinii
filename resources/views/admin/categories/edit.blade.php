@extends('admin.layouts.master')
@section('title')
Categories List
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
                <a href="{{URL::route('edit-category', $category->id)}}">Edit Category</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-plus font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Add New Category</span>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        {!! 
                        Form::open
                        ([
                            'route' =>  array('do-edit-category', $category->id),
                            'class' =>  'form-horizontal',
                            'role'  =>  'form'
                        ])
                        !!}
                            @if(Session::has('message'))
                                <div class="form-group">
                                    <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <b> Success : </b> {{ Session::get('message') }}
                                    </div>
                                </div>
                            @endif
                            
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <i class="fa fa-warning"></i>
                                                <strong>Error :</strong> {{$errors->first('name')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Submit</button>
                                        <button type="button" class="btn default">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection

@section('custom_footer_scripts')
<script src="{{URL::asset('assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $('#categories').addClass('active');
</script>
@endsection