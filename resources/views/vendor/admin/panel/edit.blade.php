@extends('admin::layouts.master')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="mb-0">
                {{ trans('admin.edit') }} <span class="text-lowercase">{!! $xPanel->entityName !!}</span>
            </h3>
        </div>
        <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <ol class="breadcrumb mb-0 p-0 bg-transparent float-right">
                <li class="breadcrumb-item"><a href="{{ admin_url() }}">{{ trans('admin.dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url($xPanel->route) }}" class="text-capitalize">{!! $xPanel->entityNamePlural !!}</a></li>
                <li class="breadcrumb-item active">{{ trans('admin.edit') }}</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="flex-row d-flex justify-content-center">
        <?php
        $colMd = config('settings.style.admin_boxed_layout') == '1' ? ' col-md-12' : ' col-md-9';
        $settingsClass = (
                (in_array(request()->segment(2), ['settings', 'homepage']) and request()->segment(4) == 'edit')
                or (in_array(request()->segment(4), ['settings', 'homepage']) and request()->segment(6) == 'edit')
        ) ? ' settings-edition' : '';
        ?>
        <div class="col-sm-12{{ $colMd }}">
            <!-- Default box -->
            @if ($xPanel->hasAccess('list'))
                <a href="{{ url($xPanel->route) }}" class="btn btn-primary shadow">
                    <i class="fa fa-angle-double-left"></i> {{ trans('admin.back_to_all') }}
                    <span class="text-lowercase">{{-- $xPanel->entityNamePlural --}}</span>
                </a>
                <br><br>
            @endif
            
            {!! Form::open([
                'url'    => $xPanel->route . '/' . $entry->getKey(),
                'method' => 'put',
                'files'  => $xPanel->hasUploadFields('update', $entry->getKey())
                ]) !!}
            <div class="card border-top border-primary{{ $settingsClass }}">
                
                @if (!in_array($xPanel->getModel()->getTable(), ['settings', 'home_sections', 'domain_settings', 'domain_home_sections']))
                <div class="card-header">
                    <h3 class="mb-0">{{ trans('admin.edit') }}</h3>
                </div>
				@endif
                <div class="card-body">
                    <!-- load the view from the application if it exists, otherwise load the one in the package -->
                    @if(view()->exists('vendor.admin.panel.' . $xPanel->entityName . '.form_content'))
                        @include('vendor.admin.panel.' . $xPanel->entityName . '.form_content', ['fields' => $xPanel->getFields('update', $entry->getKey())])
                    @elseif(view()->exists('vendor.admin.panel.form_content'))
                        @include('vendor.admin.panel.form_content', ['fields' => $xPanel->getFields('update', $entry->getKey())])
                    @else
                        @include('admin::panel.form_content', ['fields' => $xPanel->getFields('update', $entry->getKey())])
                    @endif
                </div>
                <div class="card-footer">
					@include('admin::panel.inc.form_save_buttons')
                </div>
                
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('after_styles')
@endsection

@section('after_scripts')
@endsection
