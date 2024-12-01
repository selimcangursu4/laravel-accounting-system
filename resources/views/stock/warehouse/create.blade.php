@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Yeni Depo Oluştur</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Stok</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Depolar</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Yeni Depo Oluştur</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                  <a href="{{route('customer.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                    <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
                </div>
                <a type="button" id="save" class="btn btn-flex btn-center btn-primary px-4">
                  <i class="fa-solid fa-floppy-disk"></i> Yeni Depo Ekle </a>
              </div>
        </div>
        <div class="card shadow-sm mt-7">
            <div class="card-header">
                <h3 class="card-title">Yeni Depo Oluşturma Formu</h3>
            </div>
            <div class="card-body">
               <form>
                @csrf
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Adı</label>
                    <input type="text" class="form-control form-control-solid" id="name" name="name" placeholder="Depo Adı Giriniz.."/>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Tipi</label>
                    <select class="form-select form-select-solid" data-control="select2" id="warehouse_type_id" name="warehouse_type_id" data-placeholder="Seçiniz...">
                        <option></option>
                        <option value="1">Ana Depo</option>
                        <option value="2">İkincil Depo</option>
                        <option value="2">Bölgesel Depo</option>
                        <option value="2">Geçici Depo</option>
                        <option value="2">Soğuk Depo</option>
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Durumu</label>
                    <select class="form-select form-select-solid" data-control="select2" id="status_id" name="status_id" data-placeholder="Seçiniz...">
                        <option></option>
                        <option value="1">Aktif</option>
                        <option value="0">Pasif</option>
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Sorumlusu</label>
                    <select class="form-select form-select-solid" data-control="select2" id="manager_id" name="manager_id" data-placeholder="Seçiniz...">
                        <option></option>
                        @foreach ($users as $user )
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Kapasitesi</label>
                    <input type="number" class="form-control form-control-solid" id="capacity" name="capacity" placeholder="Depo Kapasitesini Giriniz (Ürün Adet)"/>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Depo Doluluk Oranı</label>
                    <input type="number" class="form-control form-control-solid" id="current_stock" name="current_stock" placeholder="Depo Doluluk Oranı Giriniz (Ürün Adet)"/>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Ülke</label>
                    <select class="form-select form-select-solid" data-control="select2" id="country_id" name="country_id" data-placeholder="Seçiniz...">
                        <option></option>
                        @foreach ($countries as $country )
                        <option value="{{$country->id}}">{{$country->baslik}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Şehir</label>
                    <select class="form-select form-select-solid" data-control="select2" id="city_id" name="city_id" data-placeholder="Seçiniz...">
                        <option></option>
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">İlçe</label>
                    <select class="form-select form-select-solid" data-control="select2" id="district_id" name="district_id" data-placeholder="Seçiniz...">
                        <option></option>
                    </select>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Adres Bilgisi</label>
                    <textarea class="form-control form-control-solid" id="address" name="address" rows="3"></textarea>
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
               url: "{{ route('warehouse.country.change') }}",
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
               url: "{{route('warehouse.city.change')}}",
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

    // Depoyu Kaydet
    $('#save').click(function(e){

        e.preventDefault();

        let name = $('#name').val();
        let warehouse_type_id = $('#warehouse_type_id').val();
        let status_id = $('#status_id').val();
        let manager_id = $('#manager_id').val();
        let capacity = $('#capacity').val();
        let current_stock = $('#current_stock').val();
        let country_id = $('#country_id').val();
        let city_id = $('#city_id').val();
        let district_id = $('#district_id').val();
        let address = $('#address').val();

        $.ajax({
            url: "{{route('warehouse.store')}}",
            type: "POST",
            data: {
                name: name,
                warehouse_type_id: warehouse_type_id,
                status_id: status_id,
                manager_id: manager_id,
                capacity: capacity,
                current_stock: current_stock,
                country_id: country_id,
                city_id: city_id,
                district_id: district_id,
                address: address,
               _token: '{{ csrf_token() }}'
            },
            success: function(response){
                if(response.success){
                    console.log(response.message);
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function(){
                        window.location.href = "{{route('warehouse.view')}}";
                    }, 1500);
                }else{

                    console.log(response.message);
                    Swal.fire({
                        position: "top-center",
                        icon: "error",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
            error: function(xhr, status, error) {
             console.log(xhr.responseText);
             Swal.fire({
             icon: "error",
             title: xhr.responseText,
             showDenyButton: false,
             timer: 1500
            });
            }
        })
    })

    })
</script>
