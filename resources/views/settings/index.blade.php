@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Tüm Ayarlar</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Ayarlar</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12 mt-10">
            <div class="row">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title">Kullanıcı Ayarları</h3>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="" class="text-dark">Departmanlar</a>
                                </li>
                                <br>
                                <li>
                                    <a href="" class="text-dark">Kullanıcı Rolleri</a>
                                </li>
                                <br>
                                <li>
                                    <a href="{{route('user.view')}}" class="text-dark">Kullanıcı İşlemleri</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
