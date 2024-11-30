@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
      <div class="d-flex flex-stack flex-wrap gap-4 w-100">
        <div class="page-title d-flex flex-column gap-3 me-3">
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Yeni Müşteri Ekle</h1>
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
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <li class="breadcrumb-item text-gray-500">Yeni Müşteri Ekle</li>
          </ul>
        </div>
        <div class="d-flex align-items-center gap-3 gap-lg-5">
          <div class="m-0">
            <a href="{{route('customer.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
              <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
          </div>
          <a type="button" id="save" class="btn btn-flex btn-center btn-dark px-4">
            <i class="fa-solid fa-floppy-disk"></i> Yeni Müşteri Ekle </a>
        </div>
      </div>
      <div class="card shadow-sm mt-7">
        <div class="card-header">
          <h3 class="card-title">Yeni Müşteri Ekleme Formu</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Müşteri Tipi</label>
                  <select class="form-select form-select-solid" data-control="select2" id="customer_type_id" name="customer_type_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Bireysel Müşteri</option>
                    <option value="2">Kurumsal Müşteri</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Ad Soyadı</label>
                  <input type="text" class="form-control form-control-solid" id="fullname" name="fullname" placeholder="Müşteri Adı Soyadı Giriniz.." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Telefon Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="phone" name="phone" placeholder="Müşteri Telefon Numarası Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Alternatif Telefon Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="alternative_phone" name="alternative_phone" placeholder="Müşteri Alternatif Telefon Numarası Giriniz.." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">E-Posta Adresi</label>
                  <input type="text" class="form-control form-control-solid" id="email" name="email" placeholder="Müşteri E-Posta Adresi Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Faks Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="fax_number" name="fax_number" placeholder="Müşteriye Ait Faks Numarasını Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Pazarlama Mesaj Onayı</label>
                  <select class="form-select form-select-solid" data-control="select2" id="marketing_consent_id" name="marketing_consent_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Pazarlama Mesajları Gönderilsin</option>
                    <option value="0">Pazarlama Mesajları Gönderilmesin</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Ülke</label>
                  <select class="form-select form-select-solid" data-control="select2" id="country_id" name="country_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Bireysel Müşteri</option>
                    <option value="2">Kurumsal Müşteri</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Şehir</label>
                  <select class="form-select form-select-solid" data-control="select2" id="city_id" name="city_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Bireysel Müşteri</option>
                    <option value="2">Kurumsal Müşteri</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">İlçe</label>
                  <select class="form-select form-select-solid" data-control="select2" id="district_id" name="district_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Bireysel Müşteri</option>
                    <option value="2">Kurumsal Müşteri</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Adres Bilgisi</label>
                  <textarea class="form-control form-control-solid" id="address" name="address" rows="5"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Posta Kodu</label>
                  <input type="text" class="form-control form-control-solid" id="postal_code" name="postal_code" placeholder="Müşteriye Ait Posta Kodunu Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">İban Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="iban" name="iban" placeholder="Müşteriye Ait İban Numarasını Giriniz.." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Vergi Dairesi</label>
                  <input type="text" class="form-control form-control-solid" id="tax_office" name="tax_office" placeholder="Müşterinin Bağlı Bulunduğu Vergi Dairesini Giriniz.." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Vergi Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="tax_number" name="tax_number" placeholder="Müşteriye Ait Vergi Numarasını Giriniz.." />
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Temsilci Personel Durumu</label>
                  <select class="form-select form-select-solid" data-control="select2" id="representavice_select" name="representavice_select" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Temsilci Var</option>
                    <option value="2">Temsilci Yok</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="display: none">
              <div class="table-responsive">
                <table class="table table-row-bordered gy-5">
                  <thead>
                    <tr class="fw-bold fs-6 text-gray-800">
                      <th>Temsilci Adı</th>
                      <th>Temsilci Telefon Numarası</th>
                      <th>Temsilci E-Posta Adresi</th>
                      <th>Temsilci Notu</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="representative_name" name="representative_name" placeholder="Temsilci Adını Giriniz..." />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="representative_phone" name="representative_phone" placeholder="Temsilci Telefon Numarası Giriniz..." />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="representative_email" name="representative_email" placeholder="Temsilci E-Posta Adresini Giriniz..." />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="representative_note" name="representative_name" placeholder="Temsilci Notu" />
                        </div>
                      </td>
                      <td>
                        <button class="btn btn-danger">Sil</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Cari Hesap Açılışı</label>
                <select class="form-select form-select-solid" data-control="select2" id="current_select" name="current_select" data-placeholder="Seçiniz...">
                  <option></option>
                  <option value="1">Cari Hesap Aç</option>
                  <option value="2">Cari Hesap Yok</option>
                </select>
              </div>
            </div>
            <div class="col-md-12" style="display: none">
              <div class="table-responsive">
                <table class="table table-row-bordered gy-5">
                  <thead>
                    <tr class="fw-bold fs-6 text-gray-800">
                      <th>Cari Hesap Adı</th>
                      <th>Tarih</th>
                      <th>Tutar</th>
                      <th>Durum</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="current_name" name="current_name" placeholder="Cari Hesap Adı Oluşturunuz..." />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <input type="date" class="form-control form-control-solid" id="current_date" name="current_date" />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <input type="text" class="form-control form-control-solid" id="current_amount" name="current_amount" placeholder="Cari Tutarını Giriniz..." />
                        </div>
                      </td>
                      <td>
                        <div class="mb-10">
                          <select class="form-select form-select-solid" data-control="select2" id="current_status_id" name="current_status_id" data-placeholder="Seçiniz...">
                            <option></option>
                            <option value="1">Borcu Var</option>
                            <option value="2">Alacağı Var</option>
                          </select>
                        </div>
                      </td>
                      <td>
                        <button class="btn btn-danger">Sil</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@include('partials.script')
