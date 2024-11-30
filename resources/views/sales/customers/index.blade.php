@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Tüm Müşteriler</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Satış Yönetimi</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-500">Müşteriler</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                    <a href="{{route('user.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4"><i class="fa-solid fa-rotate-left"></i> Geri Dön</a>
                </div>
                <a href="{{route('customer.create')}}" class="btn btn-flex btn-center btn-dark px-4"><i class="fa-solid fa-floppy-disk"></i> Yeni Müşteri Ekle</a>
            </div>
        </div>
      <div class="card shadow-sm mt-7">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-filter fs-2 me-1"></i> Müşteri Filtrele
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Kodu</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-code" name="search-customer-code" placeholder="Müşteri Kodu Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Tipi</label>
                <select class="form-select form-select-solid" id="search-customer-type-id" name="search-customer-type-id" data-control="select2" data-placeholder="Seçiniz...">
                  <option></option>
                  <option value="1">Bireysel Müşteri</option>
                  <option value="2">Kurumsal Müşteri</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Adı Soyadı</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-fullname" name="search-customer-fullname" placeholder="Müşteri Adı Soyadı Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Telefon Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-phone" name="search-customer-phone" placeholder="Telefon Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Alternatif Telefon Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-alternavite_phone" name="search-customer-alternavite_phone" placeholder="Alternatif Telefon Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">E-Posta Adresi</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-email" name="search-customer-email" placeholder="E-Posta Adresi Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Fax Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-fax-number" name="search-fax-number" placeholder="Faks Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <label for="form-label" class="required form-label">Oluşturma Tarihi</label>
              <div class="input-group mb-3">
                <input type="date" class="form-control form-control-solid" id="search-customer-created-date" aria-describedby="basic-addon1">
                <input type="date" class="form-control form-control-solid" id="search-customer-end-date" aria-describedby="basic-addon2">
              </div>
            </div>
            <div class="col-md-12">
              <button type="button" id="filterButton" class="btn btn-warning btn-md float-end">
                <i class="fa-solid fa-filter fs-2"></i> Detaylı Filtrele </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card shadow-sm mt-10">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-book fs-2 me-1"></i> Müşteri Listesi
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="kt_datatable_zero_configuration" class="table table-hover table-rounded table-striped border gy-7 gs-7">
              <thead>
                <tr class="fw-semibold fs-6 text-muted">
                  <th>Müşteri Kodu</th>
                  <th>Müşteri Tipi</th>
                  <th>Müşteri Adı</th>
                  <th>Telefon Numarası</th>
                  <th>Alternatif Telefon Numarası</th>
                  <th>E-Posta</th>
                  <th>Oluşturma Tarihi</th>
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
                url: "{{ route('customer.fetch') }}",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.search_customer_code = $('#search-customer-code').val();
                    d.search_customer_type_id = $('#search-customer-type-id').val();
                    d.search_customer_fullname = $('#search-customer-fullname').val();
                    d.search_customer_phone = $('#search-customer-phone').val();
                    d.search_customer_alternavite_phone = $('#search-customer-alternavite_phone').val();
                    d.search_customer_email = $('#search-customer-email').val();
                    d.search_customer_fax_number = $('#search-fax-number').val();
                    d.search_customer_created_date = $('#search-customer-created-date').val();
                    d.search_customer_end_date = $('#search-customer-end-date').val();
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'customer_type_id',
                    render: function(data, type, row) {
                        if (row.customer_type_id == 1) {
                            return '<span class="badge badge-warning">Bireysel Müşteri</span>';

                        } else if (row.customer_type_id == 2) {

                            return '<span class="badge badge-info">Kurumsal Müşteri</span>';
                        }
                    }
                },
                {
                    data: 'name',
                    render: function(data, type, row) {
                        if (row.status_id == 1) {
                            return `${row.name} - <span class="badge badge-success">Aktif</span> `;
                        } else if (row.status_id == 2) {
                            return `${row.name} - <span class="badge badge-danger">Pasif</span> `;
                        }
                    }
                },
                {
                    data: 'phone'
                },
                {
                    data: 'alternative_phone'
                },
                {
                    data: 'email'
                },
                {
                    data: 'created_at',
                    render: function(data, type, row) {
                        return moment(data).format('DD/MM/YYYY HH:mm:ss');
                    }
                },
                {
                    data: 'action',
                    render: function(data, type, row) {
                        return `<span class="badge badge-primary">Görüntüle</span>
                        <span class="badge badge-secondary">Sms Gönder</span>
                        <span class="badge badge-danger">Spama Ekle</span>`;
                    }
                }
            ]
        });

        $('#filterButton').click(function(e) {
            e.preventDefault();
            table.draw();
        });

    })
</script>
