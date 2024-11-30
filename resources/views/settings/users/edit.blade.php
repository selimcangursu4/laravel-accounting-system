@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Kullanıcı Detayları</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Kullanıcılar</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Kullanıcı Detayları</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                    <a href="{{route('user.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4"><i class="fa-solid fa-rotate-left"></i> Geri Dön</a>
                </div>
                <button type="button" id="save" class="btn btn-flex btn-center btn-dark px-4"><i class="fa-solid fa-floppy-disk"></i> Güncelle</button>
            </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Kullanıcı Bilgileri</h3>
            </div>
            <div class="card-body">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-10">
                              <label for="form-label" class="required form-label">Kullanıcı Id</label>
                              <input type="text" class="form-control form-control-solid" id="user_id" name="user_id" value="{{$user->id}}"  />
                            </div>
                          </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Adı Soyad</label>
                            <input type="text" class="form-control form-control-solid" id="fullname" name="fullname" value="{{$user->name}}"  />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Kullanıcı Adı</label>
                            <input type="text" class="form-control form-control-solid" id="username" name="username" value="{{$user->username}}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">E-Posta Adresi</label>
                            <input type="email" class="form-control form-control-solid" id="email" name="email" value="{{$user->email}}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Telefon Numarası</label>
                            <input type="text" class="form-control form-control-solid" id="phone" name="phone" value="{{$user->phone}}" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Cinsiyet</label>
                            <select class="form-select form-select-solid" data-control="select2" id="gender_id" name="gender_id" data-placeholder="Seçiniz...">
                              <option></option>
                              <option value="1" {{ $user->gender_id == 1 ? 'selected' : '' }}>Erkek</option>
                              <option value="2" {{ $user->gender_id == 2 ? 'selected' : '' }}>Kadın</option>
                              <option value="3" {{ $user->gender_id == 3 ? 'selected' : '' }}>Belirtilemedi</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Doğum Tarihi</label>
                            <input type="date" class="form-control form-control-solid" id="birthday" name="birthday"  value="{{$user->date_of_birth}}"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Departman Bilgisi</label>
                             <select class="form-select form-select-solid" data-control="select2" id="department_id" name="department_id" data-placeholder="Seçiniz...">
                              <option></option>
                              @foreach ($departments as $department)
                               <option value="{{$department->id}}" {{ $user->department_id == $department->id ? 'selected' : '' }}>{{$department->name}}</option>
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
                              <option value="{{$role->id}}" {{$user->role_id == $role->id ? 'selected' : ''}}>{{$role->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Adres Bilgisi</label>
                            <textarea class="form-control form-control-solid" id="address" name="address" rows="3">{{$user->address}}</textarea>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Uyruk</label>
                            <select class="form-select form-select-solid" data-control="select2" id="country_id" name="country_id" data-placeholder="Seçiniz...">
                              <option></option>
                              @foreach ($countries as $country )
                              <option value="{{$country->id}}" {{$user->country_id == $country->id ? 'selected' : ''}}>{{$country->baslik}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Şehir</label>
                            <select class="form-select form-select-solid" data-control="select2" id="city_id" name="city_id" data-placeholder="Seçiniz...">
                              <option></option>
                              @foreach ($cities as $city )
                              <option value="{{$city->id}}" {{$user->city_id == $city->id ? 'selected' : ''}}>{{$city->baslik}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">İlçe</label>
                            <select class="form-select form-select-solid" data-control="select2" id="district_id" name="district_id" data-placeholder="Seçiniz...">
                              <option></option>
                              @foreach ($districts as $district )
                              <option value="{{$district->id}}" {{$user->district_id == $district->id ? 'selected' : ''}}>{{$district->baslik}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-10">
                            <label for="form-label" class="required form-label">Parola Belirle</label>
                            <input type="password" class="form-control form-control-solid" id="password" name="password" value="{{$user->password}}"/>
                          </div>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
<script>
    $(document).ready(function(){
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

    // Bilgileri Güncelle

    $('#save').click(function(e){
        e.preventDefault();

        let user_id       = $('#user_id').val();
        let fullname      = $('#fullname').val();
        let username      = $('#username').val();
        let email         = $('#email').val();
        let phone         = $('#phone').val();
        let gender_id     = $('#gender_id').val();
        let birthday      = $('#birthday').val();
        let department_id = $('#department_id').val();
        let role_id       = $('#role_id').val();
        let address       = $('#address').val();
        let country_id    = $('#country_id').val();
        let city_id       = $('#city_id').val();
        let district_id   = $('#district_id').val();
        let password      = $('#password').val();
        const token       = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            type:"POST",
            url:"{{route('users.update')}}",
            data:{
                _token        : token,
                user_id       : user_id,
                fullname      : fullname,
                username      : username,
                email         : email,
                phone         : phone,
                gender_id     : gender_id,
                birthday      : birthday,
                department_id : department_id,
                role_id       : role_id,
                address       : address,
                country_id    : country_id,
                city_id       : city_id,
                district_id   : district_id,
                password      :  password
            },
            success:function(response)
            {
                if(response.success)
                {
                    console.log(response.message);
                    Swal.fire({
                    title: response.message,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Tamam",
                    }).then((result) => {
                    if (result.isConfirmed) {
                     window.location.href = "{{route('user.view')}}";
                      }
                    });
                }else{
                    console.log(response.message);
                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: response.message,
                    confirmButtonText: "Tamam",
                    });
                }

            },
            error:function(jqXHR, textStatus, errorThrown)
            {
                console.log("Error: " + errorThrown);
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: errorThrown,
                    confirmButtonText: "Tamam",
                    });
            }
        })
    })


    })
</script>
