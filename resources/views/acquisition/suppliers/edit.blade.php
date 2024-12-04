@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Alış Yönetimi</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                        <a href="../dist/index.html" class="text-gray-500">
                            <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Tedarikçiler</li>
                    <li class="breadcrumb-item">
                        <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Tedarikçi Detayı</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                  <a href="{{route('suppliers.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                    <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
                </div>
                <div>
                  <a type="button" id="deleteSupplierButton" data-id="{{$supplier->id}}" class="btn btn-danger fw-bold px-4">
                    <i class="fa-solid fa-trash"></i> Tedarikçiyi Sil </a>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                  <i class="fa-solid fa-floppy-disk"></i> Güncelle
               </button>
              </div>
        </div>
        <div class="row mt-7">
            <div class="col-md-3">
                <div class="card mb-5 mb-xl-8">
                    <div class="card-body pt-15">
                      <div class="d-flex flex-center flex-column mb-5">
                        <div class="symbol symbol-150px symbol-circle mb-7">
                          <img src="{{asset('assets/media/avatars/warehouses-image.png')}}" alt="image" />
                        </div>
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$supplier->name}}</a>
                        <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6"></a>
                      </div>
                      <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold"> Depo Profili </div>

                      </div>
                      <div class="separator separator-dashed my-3"></div>
                      <div class="pb-5 fs-6">
                        <div class="fw-bold mt-5">Depo Kodu</div>
                        <div class="text-gray-600">{{$supplier->id}}</div>
                        <div class="fw-bold mt-5">Depo Durumu</div>
                        <div class="text-gray-600">
                            @if($supplier->status_id == 1)
                            <span class="badge badge-success">Aktif</span>
                            @elseif($supplier->status_id == 0)
                            <span class="badge badge-success">Pasif</span>
                            @endif
                        </div>
                        <div class="fw-bold mt-5">Yetkili Kişi</div>
                        <div class="text-gray-600">{{$supplier->contact_person}}</div>
                        <div class="fw-bold mt-5">Tedarikçi E-Posta</div>
                        <div class="text-gray-600">{{$supplier->email}}</div>
                        <div class="fw-bold mt-5">Tedarikçi İletişim Numarası</div>
                        <div class="text-gray-600">{{$supplier->phone}}</div>
                        <div class="fw-bold mt-5">Adres Bilgisi</div>
                        <div class="text-gray-600">{{$supplier->address}}</div>
                        <div class="fw-bold mt-5">Vergi Numarası</div>
                        <div class="text-gray-600">{{$supplier->tax_number}}</div>
                        <div class="fw-bold mt-5">Ülke / Şehir / İlçe</div>
                        <div class="text-gray-600">
                            {{$supplier->country_id}} / {{$supplier->city_id}} / {{$supplier->district_id}}
                        </div>
                        <div class="fw-bold mt-5">Oluşturma Tarihi</div>
                        <div class="text-gray-600">{{$supplier->created_at}}</div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-9">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Tedarikçiden Alınan Ürünler</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-muted">
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tedarikçileri Düzenle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Tedarikçi Id</label>
                                <input type="text" class="form-control form-control-solid" id="supplier_id" name="supplier_id" value="{{$supplier->id}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Tedarikçi Adı</label>
                                <input type="text" class="form-control form-control-solid" id="supplier_name" name="supplier_name" value="{{$supplier->name}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Yetkili Kişi</label>
                                <input type="text" class="form-control form-control-solid" id="supplier_contact_name" name="supplier_contact_name" value="{{$supplier->contact_person}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">E-Posta Adresi</label>
                                <input type="email" class="form-control form-control-solid" id="supplier_email" name="supplier_email" value="{{$supplier->email}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Telefon Numarası</label>
                                <input type="text" class="form-control form-control-solid" id="supplier_phone" name="supplier_phone" value="{{$supplier->phone}}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Adres Bilgisi</label>
                                <textarea class="form-control form-control-solid" id="address" name="address" rows="3">{{$supplier->address}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Vergi Numarası</label>
                                <input type="text" class="form-control form-control-solid" id="supplier_tax_number" name="supplier_tax_number" value="{{$supplier->tax_number}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Durum</label>
                                <select class="form-select form-select-solid" data-control="select2" id="supplier_status_id" name="supplier_status_id" data-placeholder="Seçiniz..">
                                    <option></option>
                                    <option value="1" {{$supplier->status_id == 1 ? "selected" : ''}}>Aktif</option>
                                    <option value="0" {{$supplier->status_id == 0 ? "selected" : ''}}>Pasif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Ülke</label>
                                <select class="form-select form-select-solid" data-control="select2" id="supplier_country_id" name="supplier_country_id" data-placeholder="Seçiniz...">
                                    <option></option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $supplier->country_id == $country->id ? 'selected' : '' }}>
                                        {{ $country->baslik }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Şehir</label>
                                <select class="form-select form-select-solid" data-control="select2" id="supplier_city_id" name="supplier_city_id" data-placeholder="Select an option">
                                    <option></option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ $supplier->city_id == $city->id ? 'selected' : '' }}>
                                        {{ $city->baslik }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">İlçe</label>
                                <select class="form-select form-select-solid" data-control="select2" id="supplier_district_id" name="supplier_district_id" data-placeholder="Select an option">
                                    <option></option>
                                    @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $supplier->district_id == $district->id ? 'selected' : '' }}>
                                        {{ $district->baslik }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Not</label>
                                <textarea class="form-control form-control-solid" id="note" name="note" rows="3">{{$supplier->note}}</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="save" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
<script>
        $(document).ready(function() {
        $("#kt_datatable_zero_configuration").DataTable();

        // Tedarikçi Bilgilerini Güncelle
        $('#save').click(function(e) {
            e.preventDefault();
            let supplier_id = $('#supplier_id').val();
            let supplier_name = $('#supplier_name').val();
            let supplier_contact_name = $('#supplier_contact_name').val();
            let supplier_email = $('#supplier_email').val();
            let supplier_phone = $('#supplier_phone').val();
            let address = $('#address').val();
            let supplier_tax_number = $('#supplier_tax_number').val();
            let supplier_status_id = $('#supplier_status_id').val();
            let supplier_country_id = $('#supplier_country_id').val();
            let supplier_city_id = $('#supplier_city_id').val();
            let supplier_district_id = $('#supplier_district_id').val();
            let note = $('#note').val();

            $.ajax({
                type: "POST",
                url: "{{route('suppliers.update')}}",
                data: {
                    _token: "{{ csrf_token() }}",
                    supplier_id: supplier_id,
                    supplier_name: supplier_name,
                    supplier_contact_name: supplier_contact_name,
                    supplier_email: supplier_email,
                    supplier_phone: supplier_phone,
                    address: address,
                    supplier_tax_number: supplier_tax_number,
                    supplier_status_id: supplier_status_id,
                    supplier_country_id: supplier_country_id,
                    supplier_city_id: supplier_city_id,
                    supplier_district_id: supplier_district_id,
                    note: note,
                },
                success: function(response) {
                    if (response.success) {
                        console.log(response.message);
                        Swal.fire({
                            icon: "success",
                            title: response.message,
                            showDenyButton: false,
                            showCancelButton: true,
                            confirmButtonText: "Tamam ! ",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    } else {
                        console.log(response.message);
                        Swal.fire({
                            icon: "error",
                            title: response.message,
                            showDenyButton: false,
                            showCancelButton: true,
                            confirmButtonText: "Tamam ! ",
                        })
                    }
                }
            })
        })
        // Tedarikçiyi Sil

        $('#deleteSupplierButton').click(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Tedarikçiyi Silmek İstediğinize Emin misiniz ? ",
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: "Evet , sil !",
            }).then((result) => {
                if (result.isConfirmed) {
                    let data_id = $(this).data('id');

                    $.ajax({
                        type: "POST",
                        url: "{{route('suppliers.delete')}}",
                        data: {
                            _token: "{{csrf_token()}}",
                            data_id: data_id
                        },
                        success: function(response) {
                            if (response.success) {
                                console.log(response.message);
                                Swal.fire({
                                    icon: "success",
                                    title: response.message,
                                    showDenyButton: false,
                                    showCancelButton: true,
                                    confirmButtonText: "Tamam! ",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "{{route('suppliers.view')}}";
                                    }
                                });
                            } else {
                                console.log(response.message);
                                Swal.fire({
                                    icon: "error",
                                    title: response.message,
                                    showDenyButton: false,
                                    showCancelButton: true,
                                    confirmButtonText: "Tamam! ",
                                })

                            }
                        }
                    })
                }
            });
        })
    })
</script>
