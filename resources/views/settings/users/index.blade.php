@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Kullanıcılar</h1>
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
                    <li class="breadcrumb-item text-gray-500">Kullanıcılar</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                    <a href="{{route('settings.index')}}" class="btn btn-flex btn-sm btn-color-gray-700 bg-body fw-bold px-4"><i class="fa-solid fa-rotate-left"></i> Geri Dön</a>
                </div>
                <a href="{{route('user.create')}}" id="save" class="btn btn-flex btn-center btn-dark btn-sm px-4"><i class="fa-solid fa-floppy-disk"></i> Yeni Kullanıcı Oluştur</a>
            </div>
        </div>
      <div class="card shadow-sm mt-10">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-filter fs-2 me-1"></i> Kullanıcı Filtrele
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Kullanıcı Kodu</label>
                <input type="text" class="form-control form-control-solid" id="search-user-code" name="search-user-code" placeholder="Kullanıcı Kodu Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Cinsiyet</label>
                <select class="form-select form-select-solid" id="search-user-gender-id" name="search-user-gender-id" data-control="select2" data-placeholder="Seçiniz...">
                  <option></option>
                  <option value="1">Erkek</option>
                  <option value="2">Kadın</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Adı Soyadı</label>
                <input type="text" class="form-control form-control-solid" id="search-user-fullname" name="search-user-fullname" placeholder="Kullanıcı Adı Soyadı Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">E-Posta Adresi</label>
                <input type="text" class="form-control form-control-solid" id="search-user-email" name="search-user-email" placeholder="Kullanıcı E-Posta Adresi Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Telefon Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-user-phone" name="search-user-phone" placeholder="Telefon Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Departman Bilgisi</label>
                <select class="form-select form-select-solid" id="search-user-department-id" name="search-user-department-id" data-control="select2" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Erkek</option>
                    <option value="2">Kadın</option>
                  </select>
            </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Rol Bilgisi</label>
                <select class="form-select form-select-solid" id="search-user-role-id" name="search-user-role-id" data-control="select2" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Erkek</option>
                    <option value="2">Kadın</option>
                  </select>
            </div>
            </div>
            <div class="col-md-3">
              <label for="form-label" class="required form-label">Oluşturma Tarihi</label>
              <div class="input-group mb-3">
                <input type="date" class="form-control form-control-solid" id="search-user-created-date" aria-describedby="basic-addon1">
                <input type="date" class="form-control form-control-solid" id="search-user-end-date" aria-describedby="basic-addon2">
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
            <i class="fa-solid fa-book fs-2 me-1"></i> Kullanıcı Listesi
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="kt_datatable_zero_configuration" class="table table-hover table-rounded table-striped border gy-7 gs-7">
                <thead>
                  <tr class="fw-semibold fs-6 text-muted">
                    <th>Kullanıcı Kodu</th>
                    <th>Cinsiyet</th>
                    <th>Kullanıcı Adı</th>
                    <th>İsim Soyisim</th>
                    <th>E-Posta Adresi</th>
                    <th>Telefon Numarası</th>
                    <th>Departman Bilgisi</th>
                    <th>Rol Bilgisi</th>
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
$(document).ready(function(){
    let table =  $("#kt_datatable_zero_configuration").DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            type: "POST",
            url: "{{ route('user.fetch') }}",
            data: function(d) {
                d._token = "{{ csrf_token() }}";
                d.search_user_id = $("#search-user-id").val();
                d.search_user_gender_id = $("#search-user-gender-id").val();
                d.search_user_fullname = $("#search-user-fullname").val();
                d.search_user_email = $("#search-user-email").val();
                d.search_user_phone = $("#search-user-phone").val();
                d.search_user_department_id = $("#search-user-department-id").val();
                d.search_user_role_id = $("#search-user-role-id").val();
                d.search_user_created_date = $("#search-user-created-date").val();
                d.search_user_end_date = $("#search-user-end-date").val();
            }
        },
        columns: [
            { data: 'id' },
            { data: 'gender_id' },
            { data: 'username' },
            { data: 'name' },
            { data: 'email' },
            { data: 'phone' },
            { data: 'department_id' },
            { data: 'role_id' },
            { data: 'created_at' },
            { data: 'action', render: function(data, type, row) {
                return '<span class="badge badge-dark">Görüntüle</span> ' +
                       '<span class="badge badge-secondary">Sms Gönder</span> ' +
                       '<span class="badge badge-danger">Spama Ekle</span>';
            }},
        ]
    });

    $('#filterButton').click(function(e) {
        e.preventDefault();

        table.draw();

    })
});

</script>
