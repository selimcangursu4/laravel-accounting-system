@extends('partials.master')
@section('content')

    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-column flex-column-fluid">
            <div class="d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column gap-3 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Yeni Kullanıcı Ekle</h1>
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
                        <li class="breadcrumb-item">
                            <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                        </li>
                        <li class="breadcrumb-item text-gray-500">Kullanıcı Ekle</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-3 gap-lg-5">
                    <div class="m-0">
                        <a href="{{route('user.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4"><i class="fa-solid fa-rotate-left"></i> Geri Dön</a>
                    </div>
                    <button type="button" id="save" class="btn btn-flex btn-center btn-dark px-4"><i class="fa-solid fa-floppy-disk"></i> Kaydet</button>
                </div>
            </div>
      <div class="card shadow-sm mt-10">
        <div class="card-header">
          <h3 class="card-title">Yeni Kullanıcı Ekleme Formu</h3>
        </div>
        <div class="card-body">
          <form id="createUserForm">
            @csrf
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
                    @foreach ($roles as $role )
                    <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
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
                  <label for="form-label" class="required form-label">Uyruk</label>
                  <select class="form-select form-select-solid" data-control="select2" id="country_id" name="country_id" data-placeholder="Seçiniz...">
                    <option></option>
                    @foreach ($countries as $country )
                    <option value="{{$country->id}}">{{$country->baslik}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">Şehir</label>
                  <select class="form-select form-select-solid" data-control="select2" id="city_id" name="city_id" data-placeholder="Seçiniz...">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-10">
                  <label for="form-label" class="required form-label">İlçe</label>
                  <select class="form-select form-select-solid" data-control="select2" id="district_id" name="district_id" data-placeholder="Seçiniz...">
                    <option></option>
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
<script>
$(document).ready(function() {

    // Ülkeye Göre Şehirlerin Filtrelenmesi
    $('#country_id').change(function(e) {
        e.preventDefault();

        const country_id = $('#country_id').val();
        const token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type: "POST",
            url: "{{ route('country.change') }}",
            data: {
                _token: token,
                country_id: country_id
            },
            success: function(response) {
                $('#city_id').empty();
                response.forEach(function(data) {
                    $('#city_id').append(`<option value="${data.id}">${data.baslik}</option>`);
                });
            },

        });
    });


    // Şehire Göre İlçelerin Filtrelenmesi
    $(document).on('change', '#city_id', function(e) {
        e.preventDefault();

        const city_id = $(this).val();
        const token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{route('city.change')}}",
            type: "POST",
            data: {
                _token: token,
                city_id: city_id
            },
            success: function(response) {
                $('#district_id').empty();
                response.forEach(function(data) {
                    $('#district_id').append(`<option value="${data.id}">${data.baslik}</option>`);
                })
            }
        })
    });

    // Yeni Kullanıcı Ekle
    $('#save').click(function(e){
        e.preventDefault();

        const fullname      = $('#fullname').val();
        const username      = $('#username').val();
        const email         = $('#email').val();
        const phone         = $('#phone').val();
        const gender_id     = $('#gender_id').val();
        const birthday      = $('#birthday').val();
        const department_id = $('#department_id').val();
        const role_id       = $('#role_id').val();
        const address       = $('#address').val();
        const country_id    = $('#country_id').val();
        const city_id       = $('#city_id').val();
        const district_id   = $('#district_id').val();
        const password      = $('#password').val();
        const token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type:"POST",
            url:"{{route('user.store')}}",
            data:{
                _token: token,
                fullname:fullname,
                username:username,
                email:email,
                phone:phone,
                gender_id:gender_id,
                birthday:birthday,
                department_id:department_id,
                role_id:role_id,
                address:address,
                country_id:country_id,
                city_id:city_id,
                district_id:district_id,
                password:password
            },
            success:function(response){
                if(response.success){
                console.log(response.message);
                Swal.fire({
                 icon:"success",
                 title: response.message,
                 showDenyButton: false,
                 showCancelButton: true,
                 confirmButtonText: "Tamam",
                }).then((result) => {
                 if (result.isConfirmed) {
                  window.location.reload();
                 }
                 });
               }
            },
            error:function(xhr,status,error){
                console.log(xhr.responseText);
                Swal.fire({
                 icon:"danger",
                 title: response.message,
                 showDenyButton: false,
                 showCancelButton: true,
                 confirmButtonText: "Tamam",
                })
            }
        })


    })


});
</script>
