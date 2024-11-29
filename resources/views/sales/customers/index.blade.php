@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div class="col-md-12 mt-5">
      <a href="" class="btn btn-primary float-end" type="button">
        <i class="fa-solid fa-floppy-disk fs-2"></i> Yeni Müşteri Oluştur </a>
    </div>
    <div id="kt_app_content" class="app-content pb-0">
      <div class="card shadow-sm">
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
                  <th>E-Posta</th>
                  <th>Oluşturma Tarihi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="fs-7">
                <tr>
                  <td>1</td>
                  <td>
                    <span class="badge badge-warning">Bireysel Müşteri</span>
                  </td>
                  <td>Selimcan Gürsu - <span class="badge badge-success">Aktif</span>
                  </td>
                  <td>05550162190</td>
                  <td>selimcangursu@yandex.com</td>
                  <td>2011/04/25 14/12/2024 13:45</td>
                  <td class="text-center">
                    <span class="badge badge-primary">Görüntüle</span>
                    <span class="badge badge-secondary">Sms Gönder</span>
                    <span class="badge badge-danger">Spama Ekle</span>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <span class="badge badge-info">Kurumsal Müşteri</span>
                  </td>
                  <td>Selimcan Gürsu - <span class="badge badge-success">Aktif</span>
                  </td>
                  <td>05550162190</td>
                  <td>selimcangursu@yandex.com</td>
                  <td>2011/04/25 14/12/2024 13:45</td>
                  <td class="text-center">
                    <span class="badge badge-primary">Görüntüle</span>
                    <span class="badge badge-secondary">Sms Gönder</span>
                    <span class="badge badge-danger">Spama Ekle</span>
                  </td>
                </tr>
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
        $("#kt_datatable_zero_configuration").DataTable();
    })
</script>
