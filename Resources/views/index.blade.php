@extends('sigesui::layouts.withsidebar')
@section('pageTitle')
    {{isset($pageTitle) ? $pageTitle : "Dashboard"}}
@endsection
@section('styles')

@endsection
@section('content-header-title')
    {{isset($pageTitle) ? $pageTitle : "Dashboard"}}
@endsection
@section('content-header')
    <h2><i class="fa fa-users"></i> Dashboard<small>En este dashboard se renderizan los widgets registrados en el grupo "demo"</small></h2>

@endsection

@section('content')
    <!-- top tiles -->
    <div class="row tile_count">
        {!! $widgets !!}
    </div>
    <!-- /top tiles -->
@endsection
@section('scripts')

@endsection