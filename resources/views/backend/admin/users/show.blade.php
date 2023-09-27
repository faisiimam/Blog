@extends('backend.admin.layouts.master')
@section('container')
<div class="container" style="width: fit-content;margin-left:auto;margin-top:20%;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.list') }}"> Back</a>
            </div>
        </div>
    </div>
@dd($user);
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>

            </div>
        </div>
    </div>
</div>

@endsection