@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div class="col-md-12">
        <button id="save" class="btn btn-primary float-end mt-3">Yeni Kullanıcıyı Kaydet</button>
    </div>
    <div id="kt_app_content" class="app-content pb-0">
      <div class="card shadow-sm">
        <div class="card-header">
          <h3 class="card-title">Yeni Kullanıcı Ekleme Formu</h3>
        </div>
        <div class="card-body">
          <form id="createUserForm">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Adı Soyad</label>
                  <input type="text" class="form-control form-control-solid" id="fullname" name="fullname" placeholder="Personel Adı Soyadı Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Kullanıcı Adı</label>
                  <input type="text" class="form-control form-control-solid" id="username" name="username" placeholder="Personel Kullanıcı Adı Belirleyiniz.." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">E-Posta Adresi</label>
                  <input type="email" class="form-control form-control-solid" id="email" name="email" placeholder="Personel E-Posta Adresi Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Telefon Numarası</label>
                  <input type="text" class="form-control form-control-solid" id="phone" name="phone" placeholder="Personel Telefon Numarası Giriniz..." />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Cinsiyet</label>
                  <select class="form-select form-select-solid" data-control="select2" id="gender_id" name="gender_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Erkek</option>
                    <option value="2">Kadın</option>
                    <option value="3">Belirtilemedi</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Doğum Tarihi</label>
                  <input type="date" class="form-control form-control-solid" id="birthday" name="birthday" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Departman Bilgisi</label>
                   <select class="form-select form-select-solid" data-control="select2" id="department_id" name="department_id" data-placeholder="Seçiniz...">
                    <option></option>
                     @foreach ($departments as $department )
                     <option value="{{$department->id}}">{{$department->name}}</option>
                     @endforeach
                   </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Kullanıcı Rolünü Seçiniz</label>
                  <select class="form-select form-select-solid" data-control="select2" id="role_id" name="role_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Adres Bilgisi</label>
                  <textarea class="form-control form-control-solid" id="address" name="address" rows="3"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Şehir</label>
                  <select class="form-select form-select-solid" data-control="select2" id="city_id" name="city_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">İlçe</label>
                  <select class="form-select form-select-solid" data-control="select2" id="district_id" name="district_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Uyruk</label>
                  <select class="form-select form-select-solid" data-control="select2" id="country_id" name="country_id" data-placeholder="Seçiniz...">
                    <option></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Parola Belirle</label>
                  <input type="password" class="form-control form-control-solid" id="password" name="password" />
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@include('partials.script')
