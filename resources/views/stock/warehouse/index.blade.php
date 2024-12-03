@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Stok Yönetimi</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Depolar</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Depo Yönetimi</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                  <a href="{{route('warehouse.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                    <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
                </div>
                <a href="{{route('warehouse.create')}}" class="btn btn-flex btn-center btn-primary px-4">
                  <i class="fa-solid fa-floppy-disk"></i> Yeni Depo Ekle </a>
              </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Depoları Filtrele</h3>
            </div>
            <div class="card-body">
               <div class="row">
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Depo Kodu</label>
                        <input type="text" class="form-control form-control-solid" id="search-warehouse-id" placeholder="Depo Kodunu Giriniz..."/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Depo Adı</label>
                        <input type="text" class="form-control form-control-solid" id="search-warehouse-name" id="search-warehouse-name" placeholder="Depo Adını Giriniz..."/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Depo Tipi</label>
                        <select class="form-select form-select-solid" id="search-warehouse-type-id" name="search-warehouse-type-id" data-control="select2" data-placeholder="Seçiniz...">
                            <option></option>
                            <option value="1">Ana Depo</option>
                            <option value="2">İkincil Depo</option>
                            <option value="3">Bölgesel Depo</option>
                            <option value="4">Geçiçi Depo</option>
                            <option value="5">Soğuk Depo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Depo Sorumlusu</label>
                        <select class="form-select form-select-solid" id="search-warehouse-manager-id" name="search-warehouse-manager-id" data-control="select2" data-placeholder="Seçiniz...">
                            <option></option>
                            @foreach ($users as $user )
                            {
                             <option value="{{$user->id}}">{{$user->name}}</option>
                            }
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Depo Durumu</label>
                        <select class="form-select form-select-solid" id="search-warehouse-status-id" name="search-warehouse-status-id" data-control="select2" data-placeholder="Seçiniz...">
                            <option></option>
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Deponun Bulunduğu Ülke</label>
                        <select class="form-select form-select-solid" id="search-warehouse-country-id" name="search-warehouse-country-id" data-control="select2" data-placeholder="Seçiniz...">
                            <option></option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->baslik}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Deponun Bulunduğu İl</label>
                        <select class="form-select form-select-solid" id="search-warehouse-city-id" name="search-warehouse-city-id" data-control="select2" data-placeholder="Seçiniz...">
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Deponun Bulunduğu İlçe</label>
                        <select class="form-select form-select-solid" id="search-warehouse-district-id" name="search-warehouse-district-id" data-control="select2" data-placeholder="Seçiniz...">
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button id="warehouseFilterButton" type="button" class="btn btn-warning float-end">Detaylı Filtrele</button>
                </div>
               </div>
            </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Depoları Listele</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>Depo Kodu</th>
                                <th>Depo Adı</th>
                                <th>Depo Tipi</th>
                                <th>Depo Sorumlusu</th>
                                <th>Bulunduğu Ülke</th>
                                <th>Bulunduğu Şehir</th>
                                <th>Bulunduğu İlçe</th>
                                <th>Depo Durumu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="fs-7">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
<script>
$(document).ready(function() {

let table = $("#kt_datatable_zero_configuration").DataTable({
    serverSide: true,
    processing: true,
    ajax: {
        type: "GET",
        url: "{{ route('warehouse.fetch') }}",
        data: function(d) {
            d.warehouse_id = $('#search-warehouse-id').val();
            d.warehouse_name = $('#search-warehouse-name').val();
            d.warehouse_type_id = $('#search-warehouse-type-id').val();
            d.warehouse_manager_id = $('#search-warehouse-manager-id').val();
            d.warehouse_status_id = $('#search-warehouse-status-id').val();
            d.warehouse_country_id = $('#search-warehouse-country-id').val();
            d.warehouse_city_id = $('#search-warehouse-city-id').val();
            d.warehouse_district_id = $('#search-warehouse-district-id').val();
        },
    },
    columns: [{
            data: "id"
        },
        {
            data: "name"
        },
        {
            data: "warehouse_type_id",
            render:function(data,type,row)
            {
            if(row.warehouse_type_id == 1)
            {
                return "Ana Depo";
            }
            else if(row.warehouse_type_id == 2){
                return "İkincil Depo";
            }
            else if(row.warehouse_type_id == 3){
                return "Bölgesel Depo";
            }
            else if(row.warehouse_type_id == 4){
                return "Geçiçi Depo";
            }
            else if(row.warehouse_type_id == 5){
                return "Soğuk Depo";
            }
            else{
                return "Belirsiz";
            }
            }
        },
        {
            data: "manager_name"
        },
        {
            data: "country_name"
        },
        {
            data: "city_name"
        },
        {
            data: "district_name"
        },
        {
            data: "status_id",
            render:function(data,type,row)
            {
                if(row.status_id == 1)
                {
                    return "Aktif";
                }
                else if(row.status_id == 0){
                    return "Pasif";
                }
                else{
                    return "Belirsiz";
                }
            }
        },
        {
            data: "action",
            render: function(data, type, row) {
                return `
                  <a href="/stock/warehouses/edit/${row.id}"><span class="badge badge-primary">Görüntüle</span></a>
                  <span class="badge badge-danger">Pasife Al</span>
              `;
            }
        }
    ]
});

$('#warehouseFilterButton').click(function(e){
    e.preventDefault();
    table.draw();
})


// Filtreleme alanında ülkeye göre ilin listelenmesi
$('#search-warehouse-country-id').change(function(e) {
    e.preventDefault();

    const country_id = $(this).val();

    $.ajax({
        type: "POST",
        url: "{{route('warehouse.country.change')}}",
        data: {
            country_id: country_id,
            _token: "{{csrf_token()}}"
        },
        success: function(response) {
            $('#search-warehouse-city-id').empty();
            response.forEach((data) => {

                $('#search-warehouse-city-id').append(`<option value="${data.id}">${data.baslik}</option>`);

            })
        }
    })
});

// Filtreleme alanında şehire göre ilçelerin listelenmesi
$(document).on('change', '#search-warehouse-city-id', function(e) {
    e.preventDefault();

    const city_id = $(this).val();
    const token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: "{{route('warehouse.city.change')}}",
        type: "POST",
        data: {
            _token: token,
            city_id: city_id
        },
        success: function(response) {
            $('#search-warehouse-district-id').empty();
            response.forEach(function(data) {
                $('#search-warehouse-district-id').append(`<option value="${data.id}">${data.baslik}</option>`);
            })
        }
    })
});

// Datatable üzerinden pasife alma işlemi
})
</script>
