@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Tedarikçi Yönetimi</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Alış Yönetimi</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Tedarikçi Yönetimi</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                  <a href="{{route('warehouse.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                    <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
                </div>
                <a href="{{route('suppliers.create')}}" class="btn btn-flex btn-center btn-primary px-4">
                  <i class="fa-solid fa-floppy-disk"></i> Yeni Tedarikçi Ekle </a>
              </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Tedarikçi Filtreleme</h3>
            </div>
            <div class="card-body">
              <form>
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Tedarikçi Kodu</label>
                            <input type="text" class="form-control form-control-solid" id="search-supplier-id" name="search-supplier-id" placeholder="Tedarikçi Kodunu Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Yetkili Kişi</label>
                            <input type="text" class="form-control form-control-solid" id="search-contact-person" name="search-contant-person" placeholder="Yetkili Kişi Adı Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">E-Posta Adresi</label>
                            <input type="email" class="form-control form-control-solid" id="search-supplier-email" name="search-supplier-email" placeholder="Tedarikçi E-Posta Adresi Giriniz.."/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Tedarikçi Telefon Numarası</label>
                            <input type="text" class="form-control form-control-solid" id="search-supplier-phone" name="'search-supplier-phone" placeholder="Tedarikçi Telefon Numarasını Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Durum</label>
                            <select class="form-select form-select-solid" data-control="select2" id="search-status-id" name="search-status-id" data-placeholder="Seçiniz...">
                                <option></option>
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Ülke</label>
                            <select class="form-select form-select-solid" data-control="select2" id="search-country-id" name="search-country-id" data-placeholder="Seçiniz...">
                                <option></option>
                                 @foreach($countries as $country)
                                 <option value="{{$country->id}}">{{$country->baslik}}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Şehir</label>
                            <select class="form-select form-select-solid" data-control="select2" id="search-city-id" name="search-city-id" data-placeholder="Seçiniz...">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">İlçe</label>
                            <select class="form-select form-select-solid" data-control="select2" id="search-district-id" name="search-district-id" data-placeholder="Seçiniz...">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button id="suppliersFiltreButton" class="btn btn-warning float-end">Detaylı Filtrele</button>
                    </div>
                   </div>
              </form>
            </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Tedarikçi Listesi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>Tedarikçi Kodu</th>
                                <th>Tedarikçi Adı</th>
                                <th>Yetkili Kişi</th>
                                <th>Telefon Numarası</th>
                                <th>E-Posta Adresi</th>
                                <th>Durum</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="fs-5">
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
        $("#kt_datatable_zero_configuration").DataTable({
            serverSide: true,
            processing: true,
            ajax: {
                type: "get",
                url: "{{ route('suppliers.fetch') }}",
                data: function(d) {
                    d.search_supplier_id = $('#search-supplier-id').val();
                    d.search_contact_person = $('#search-contact-person').val();
                    d.search_supplier_email = $('#search-supplier-email').val();
                    d.search_supplier_phone = $('#search-supplier-phone').val();
                    d.search_status_id = $('#search-status-id').val();
                    d.search_supplier_country_id = $('#search-country-id').val();
                    d.search_supplier_city_id = $('#search-city-id').val();
                    d.search_supplier_district_id = $('#search-district-id').val();
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'name'
                },
                {
                    data: 'contact_person'
                },
                {
                    data: 'phone'
                },
                {
                    data: 'email'
                },
                {
                    data: 'status_id',
                    render: function(data, type, row) {

                        if (row.status_id == 1) {
                            return `<span class="badge bg-success">Aktif</span>`;
                        } else {
                            return `<span class="badge bg-danger">Pasif</span>`;
                        }
                    }
                },
                {
                    data: 'action',
                    render: function(data, type, row) {
                        return `
                    <a href="/acquisition/suppliers/edit/${row.id}" class="btn btn-sm btn-primary btn-icon-only">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button class="btn btn-sm btn-danger btn-icon-only delete-btn" data-id="${row.id}">
                        <i class="fas fa-trash"></i>
                    </button>
                `;
                    }
                }
            ]
        });

        //
        $('#suppliersFiltreButton').click(function(e) {
            e.preventDefault();
            $('#kt_datatable_zero_configuration').DataTable().ajax.reload();
        })


        // Ülkeye Göre Şehrin Listelenmesi
        $('#search-country-id').change(function(e) {
            e.preventDefault();

            let country_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "{{route('suppliers.getCity')}}",
                data: {
                    country_id: country_id
                },
                success: function(response) {
                    $('#search-city-id').empty();
                    response.forEach(element => {
                        $('#search-city-id').append(`<option value="${element.id}">${element.baslik}</option>`)
                    });
                }
            })
        });

        // İle Göre İlçeleri Listeleme
        $(document).on('change', '#search-city-id', function(e) {
            e.preventDefault();

            let city_id = $('#search-city-id').val();

            $.ajax({
                type: "GET",
                url: "{{route('suppliers.getDistrict')}}",
                data: {
                    city_id: city_id
                },
                success: function(response) {
                    $('#search-district-id').empty();
                    response.forEach(function(data) {
                        $('#search-district-id').append(`<option value="${data.id}">${data.baslik}</option>`)
                    })
                }
            })
        });
        // Tedarikçiyi Pasife Al

        $(document).on('click', '.delete-btn', function(e) {
            e.preventDefault();
            let id = $(this).data('id');

            Swal.fire({
                title: "Tedarikçiyi Pasife Almak İstediğinize Eminmisiniz ?",
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: "Tamam",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('suppliers.passive') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            id: id,
                            status_id: 0
                        },
                        success: function(response) {
                            Swal.fire("Pasif Alindi", "Tedarikçi pasif edildi", "success");
                            $('#kt_datatable_zero_configuration').DataTable().ajax.reload();
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Hata", "Bir hata oluştu: " + error, "error");
                        }
                    });
                }
            });
        });
    })
</script>
