@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Yeni Tedarikçi Ekle</h1>
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
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Tedarikçiler</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Yeni Tedarikçi Ekle</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                  <a href="{{route('suppliers.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                    <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
                </div>
                <a type="button" id="save" class="btn btn-flex btn-center btn-primary px-4">
                  <i class="fa-solid fa-floppy-disk"></i> Yeni Tedarikçi Ekle </a>
              </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Yeni Tedarikçi Ekleme Formu</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Tedarikçi Adı</label>
                            <input type="text" class="form-control form-control-solid" id="supplier_name" name="supplier_name" placeholder="Tedarikçi Adını Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Yetkili Kişi</label>
                            <input type="text" class="form-control form-control-solid" id="supplier_contact_name" name="supplier_contact_name" placeholder="Yetkili Kişi Adını Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">E-Posta Adresi</label>
                            <input type="email" class="form-control form-control-solid" id="supplier_email" name="supplier_email" placeholder="Tedarikçi E-Posta Adresini Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Telefon Numarası</label>
                            <input type="text" class="form-control form-control-solid" id="supplier_phone" name="supplier_phone" placeholder="Tedarikçi Telefon Numarasını Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Adres Bilgisi</label>
                            <textarea class="form-control form-control-solid" id="address" name="address" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Vergi Numarası</label>
                            <input type="text" class="form-control form-control-solid" id="supplier_tax_number" name="supplier_tax_number" placeholder="Vergi Numarası Giriniz..."/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Durum</label>
                            <select class="form-select form-select-solid" data-control="select2" id="supplier_status_id" name="supplier_status_id" data-placeholder="Seçiniz..">
                                <option></option>
                                <option value="1">Aktif</option>
                                <option value="2">Pasif</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Ülke</label>
                            <select class="form-select form-select-solid" data-control="select2" id="supplier_country_id" name="supplier_country_id" data-placeholder="Select an option">
                                <option></option>
                                @foreach ($countries as $country )
                                {
                                    <option value="{{$country->id }}">{{ $country->baslik }}</option>
                                }
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Şehir</label>
                            <select class="form-select form-select-solid" data-control="select2" id="supplier_city_id" name="supplier_city_id" data-placeholder="Select an option">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">İlçe</label>
                            <select class="form-select form-select-solid" data-control="select2" id="supplier_district_id" name="supplier_district_id" data-placeholder="Select an option">
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Not</label>
                            <textarea class="form-control form-control-solid" id="note" name="note" rows="3"></textarea>
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
        // ülkeye göre illerin listelenmesi
        $('#supplier_country_id').change(function(e) {
            e.preventDefault();

            let country_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "{{route('suppliers.getCity')}}",
                data: {
                    country_id: country_id
                },
                success: function(response) {
                    $('#supplier_city_id').empty();
                    response.forEach(element => {
                        $('#supplier_city_id').append(`<option value="${element.id}">${element.baslik}</option>`)
                    });
                }
            })
        });
        // İle Göre İlçeleri Listeleme
        $(document).on('change', '#supplier_city_id', function(e) {
            e.preventDefault();

            let city_id = $('#supplier_city_id').val();

            $.ajax({
                type: "GET",
                url: "{{route('suppliers.getDistrict')}}",
                data: {
                    city_id: city_id
                },
                success: function(response) {
                    $('#supplier_district_id').empty();
                    response.forEach(function(data) {
                        $('#supplier_district_id').append(`<option value="${data.id}">${data.baslik}</option>`)
                    })
                }
            })
        });
        // Yeni Tedarikçi Kaydetme

        $('#save').click(function(e){
            e.preventDefault();

            let name         = $('#supplier_name').val();
            let contact_name = $('#supplier_contact_name').val();
            let email        = $('#supplier_email').val();
            let phone        = $('#supplier_phone').val();
            let address      = $('#address').val();
            let tax_number   = $('#supplier_tax_number').val();
            let status_id    = $('#supplier_status_id').val();
            let country_id   = $('#supplier_country_id').val();
            let city_id      = $('#supplier_city_id').val();
            let district_id  = $('#supplier_district_id').val();
            let note         = $('#note').val();

            console.log(name)
            console.log(contact_name)
            console.log(email)
            console.log(phone)
            console.log(address)
            console.log(tax_number)
            console.log(status_id)
            console.log(country_id)
            console.log(city_id)
            console.log(district_id)
            console.log(note)

            $.ajax({
                type:"POST",
                url:"{{route('suppliers.store')}}",
                data:{
                    _token: "{{csrf_token()}}",
                    name: name,
                    contact_name: contact_name,
                    email: email,
                    phone: phone,
                    address: address,
                    tax_number: tax_number,
                    status_id: status_id,
                    country_id: country_id,
                    city_id: city_id,
                    district_id: district_id,
                    note: note
                },
                success:function(response)
                {
                if(response.success)
                {
                    console.log(response.message);
                    Swal.fire({
                    icon:"success",
                    title: response.message,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Tamam",
                    }).then((result) => {
                    if (result.isConfirmed) {
                     window.location.href = "{{route('suppliers.view')}}";
                    }
                   });
                }else{
                    console.log(response.message);
                    Swal.fire({
                    icon:"error",
                    title: response.message,
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: "Tamam",
                    })
                }
                }
            })
        })
    })
</script>
