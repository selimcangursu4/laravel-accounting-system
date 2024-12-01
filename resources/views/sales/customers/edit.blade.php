@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
      <div class="d-flex flex-stack flex-wrap gap-4 w-100">
        <div class="page-title d-flex flex-column gap-3 me-3">
          <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Müşteri Bilgileri</h1>
          <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
              <a href="../dist/index.html" class="text-gray-500">
                <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
              </a>
            </li>
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Satış</li>
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Müşteriler</li>
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Müşteri Detayı</li>
            <li class="breadcrumb-item">
              <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center gap-3 gap-lg-5">
            <div class="m-0">
              <a href="{{route('customer.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
            </div>
            <a type="button" id="save" class="btn btn-flex btn-center btn-primary px-4">
              <i class="fa-solid fa-floppy-disk"></i> Excele İndir </a>
          </div>
      </div>
      <div class="row mt-7">
        <div class="col-md-3">
          <div class="card mb-5 mb-xl-8">
            <div class="card-body pt-15">
              <div class="d-flex flex-center flex-column mb-5">
                <div class="symbol symbol-150px symbol-circle mb-7">
                  <img src="{{asset('assets/media/avatars/no-name.webp')}}" alt="image" />
                </div>
                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$customer->name}}</a>
                <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{$customer->email}}</a>
              </div>
              <div class="d-flex flex-stack fs-4 py-3">
                <div class="fw-bold"> Müşteri Profili </div>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                    Güncelle
                </button>
              </div>
              <div class="separator separator-dashed my-3"></div>
              <div class="pb-5 fs-6">
                <div class="fw-bold mt-5">Müşteri Kodu</div>
                <div class="text-gray-600">{{$customer->id}}</div>
                <div class="fw-bold mt-5">Müşteri Tipi</div>
                <div class="text-gray-600">
                    @if ($customer->customer_type_id == 1 )
                    <span class="badge badge-success">Bireysel Müşteri</span>
                    @elseif ($customer->customer_type_id ==2)
                    <span class="badge badge-warning">Kurumsal Müşteri</span>
                    @endif
                </div>
                <div class="fw-bold mt-5">Telefon Numarası</div>
                <div class="text-gray-600">{{$customer->phone}}</div>
                <div class="fw-bold mt-5">Alternatif Cep Telefonu</div>
                <div class="text-gray-600">{{$customer->alternative_phone}}</div>
                <div class="fw-bold mt-5">TC Kimlik No</div>
                <div class="text-gray-600">{{$customer->tckn}}</div>
                <div class="fw-bold mt-5">Durum</div>
                <div class="text-gray-600">
                    @if($customer->status_id == 1)
                    <span class="badge badge-info">Aktif</span>
                    @elseif ($customer->status_id == 0)
                    <span class="badge badge-danger">Pasif</span>
                    @endif
                </div>
                <div class="fw-bold mt-5">Oluşturma Tarihi</div>
                <div class="text-gray-600">{{$customer->created_at}}</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="card shadow-sm">
            <div class="card-header">
              <h3 class="card-title">Adres Bilgisi</h3>
              <div class="card-toolbar">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_2">
                    Güncelle
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="row">
            <div class="col-md-3">
                <div class="fw-bold mt-5">Ülke</div>
                <div class="text-gray-600">{{$customer->country_name}}</div>
            </div>
            <div class="col-md-3">
                <div class="fw-bold mt-5">Şehir</div>
                <div class="text-gray-600">{{$customer->city_name}}</div>
            </div>
            <div class="col-md-3">
                <div class="fw-bold mt-5">İlçe</div>
                <div class="text-gray-600">{{$customer->district_name}}</div>
            </div>
            <div class="col-md-3">
                <div class="fw-bold mt-5">Posta Kodu</div>
                <div class="text-gray-600">{{$customer->postal_code}}</div>
            </div>
            <div class="col-md-12">
                <div class="fw-bold mt-5">Adres Bilgisi</div>
                <div class="text-gray-600">{{$customer->address}}</div>
            </div>
            </div>
            </div>
              </div>
          <div class="card shadow-sm mt-5">
            <div class="card-header">
              <h3 class="card-title">Bakiye Bilgisi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th>İşlem Tarihi</th>
                                <th>İşlem Tutarı</th>
                                <th>Ödeme Yöntemi</th>
                                <th>Durum</th>
                                <th>Vade Tarihi</th>
                                <th>Açıklama</th>
                                <th>Kullanıcı</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($balances as $balance )
                            <tr>
                                <td>{{$balance->transaction_date}}</td>
                                <td>{{$balance->amount}}</td>
                                <td>
                                    @if ($balance->payment_method_id == 1)
                                        Kredi Kartı
                                    @elseif ($balance->payment_method_id == 2)
                                        Nakit Ödeme
                                    @elseif($balance->payment_method_id == 3)
                                        Mobil Ödeme
                                    @elseif($balance->payment_method_id == 4)
                                       Havale Eft
                                    @elseif($balance->payment_method_id == 5)
                                       Çek & Senet
                                       @elseif($balance->payment_method_id == 6)
                                       Kripto Para
                                    @endif
                                </td>
                                <td>
                                    @if ($balance->status_id == 1)
                                     Borcu Var
                                    @elseif ($balance->status_id == 0)
                                     Alacağı Var
                                     @elseif ($balance->status_id == 2)
                                     Ödeme Tamamlandı
                                    @endif
                                </td>
                                <td>{{$balance->due_date}}</td>
                                <td>{{$balance->description}}</td>
                                <td>{{$balance->user_name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
          <div class="card shadow-sm mt-5">
            <div class="card-header">
              <h3 class="card-title">Diğer Bilgiler</h3>
              <div class="card-toolbar">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_3">
                    Güncelle
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Vergi Numarası</div>
                        <div class="text-gray-600">{{$customer->tax_number}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Vergi Ofisi</div>
                        <div class="text-gray-600">{{$customer->tax_office}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Faks Numarası</div>
                        <div class="text-gray-600">{{$customer->fax_number}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">IBAN Bilgisi</div>
                        <div class="text-gray-600">{{$customer->iban}}</div>
                    </div>
                </div>
            </div>
          </div>
          <div class="card shadow-sm mt-5">
            <div class="card-header">
              <h3 class="card-title">Firma Temsilcisi</h3>
              <div class="card-toolbar">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_4">
                    Güncelle
                </button>
              </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Temsilci Adı Soyadı</div>
                        <div class="text-gray-600">{{$representative->name}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Temsilci E-Posta</div>
                        <div class="text-gray-600">{{$representative->email}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Temsilci Telefon Numarası</div>
                        <div class="text-gray-600">{{$representative->phone}}</div>
                    </div>
                    <div class="col-md-3">
                        <div class="fw-bold mt-5">Temsilci Notu</div>
                        <div class="text-gray-600">{{$representative->note}}</div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Profil Detay Modal --}}
  <div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Müşteri Profilini Güncelle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
               <form>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-10" style="display: none">
                            <label for="form-label" class="required form-label">Müşteri Id</label>
                            <input type="text" class="form-control form-control-solid" id="profile_id" name="profile_id" value="{{$customer->id}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Müşteri Adı</label>
                            <input type="text" class="form-control form-control-solid" id="name" name="name" value="{{$customer->name}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">E-Posta Adresi</label>
                            <input type="email" class="form-control form-control-solid" id="email" name="email" value="{{$customer->email}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Müşteri Tipi</label>
                            <select class="form-select form-select-solid" data-control="select2" id="customer_type_id" name="customer_type_id" data-placeholder="Seçiniz">
                                <option></option>
                                <option value="1" {{$customer->customer_type_id == 1 ? 'selected' : ''}}>Bireysel Müşteri</option>
                                <option value="2" {{$customer->customer_type_id == 2 ? 'selected' : ''}}>Kurumsal Müşteri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Telefon Numarası</label>
                            <input type="text" class="form-control form-control-solid" id="phone" name="phone" value="{{$customer->phone}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Alternatif Cep Telefonu</label>
                            <input type="text" class="form-control form-control-solid" id="alternative_phone" name="alternative_phone" value="{{$customer->alternative_phone}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Tc Kimlik Numarası</label>
                            <input type="email" class="form-control form-control-solid" id="tckn" name="tckn" value="{{$customer->tckn}}"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-10">
                            <label for="form-label" class="required form-label">Durum</label>
                            <select class="form-select form-select-solid" data-control="select2" id="status_id" name="status_id" data-placeholder="Seçiniz">
                                <option></option>
                                <option value="1" {{$customer->status_id == 1 ? 'selected' : ''}}>Aktif</option>
                                <option value="0" {{$customer->status_id == 0 ? 'selected' : ''}}>Pasif</option>
                            </select>
                        </div>
                    </div>
                </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" id="customerProfileUpdateButton" class="btn btn-primary">Güncelle</button>
                 </div>
               </form>
            </div>
        </div>
    </div>
</div>
{{-- Adres Bilgisi Modal --}}
<div class="modal fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Adres Bilgisi Güncelle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Müşteri Id</label>
                                <input type="text" class="form-control form-control-solid" id="address_id" name="address_id" value="{{$customer->id}}"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Ülke</label>
                                <select class="form-select form-select-solid" id="country_id" name="country_id" data-control="select2" data-placeholder="Seçiniz...">
                                    @foreach ($countries as $country )
                                    <option value="{{$country->id}}" {{$customer->country_id == $country->id ? 'selected' : ''}} >{{$country->baslik}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Şehir</label>
                                <select class="form-select form-select-solid" id="city_id" name="city_id" data-control="select2" data-placeholder="Seçiniz..">
                                    @foreach ($cities as $city )
                                    <option value="{{$city->id}}" {{$customer->city_id == $city->id ? 'selected' : ''}}>{{$city->baslik}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">İlçe</label>
                                <select class="form-select form-select-solid" id="district_id" name="district_id" data-control="select2" data-placeholder="Select an option">
                                    @foreach ($districts as $district )
                                    <option value="{{$district->id}}" {{$customer->district_id == $district->id ? 'selected' : ''}}>{{$district->baslik}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Posta Kodu</label>
                                <input type="text" class="form-control form-control-solid" id="postal_code" name="postal_code" value="{{$customer->postal_code}}"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-10">
                                <label for="form-label" class="required form-label">Adres</label>
                                <textarea class="form-control form-control-solid" id="address" name="address" rows="3">{{$customer->address}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                        <button type="button" id="customerAddressUpdateButton" class="btn btn-primary">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Firma Temsilcisi Modal --}}
<div class="modal fade" tabindex="-1" id="kt_modal_3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Firma Temsilcisi Düzenle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Müşteri Id</label>
                        <input type="text" class="form-control form-control-solid" id="orderInfo_id" name="orderInfo_id" value="{{$customer->id}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Vergi Numarası</label>
                        <input type="text" class="form-control form-control-solid" id="tax_number" name="tax_number" value="{{$customer->tax_number}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Vergi Dairesi</label>
                        <input type="text" class="form-control form-control-solid" id="tax_office" name="tax_office" value="{{$customer->tax_office}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Faks Numarası</label>
                        <input type="text" class="form-control form-control-solid" id="fax_number" name="fax_number" value="{{$customer->fax_number}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">IBAN Numarası</label>
                        <input type="text" class="form-control form-control-solid" id="iban" name="iban" value="{{$customer->iban}}"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="customerOrderInfoButton" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </div>
</div>
{{-- Diğer Bilgiler Modal --}}
<div class="modal fade" tabindex="-1" id="kt_modal_4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Müşteri Temsilcisi Bilgisini Güncelle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Müşteri Id</label>
                        <input type="text" class="form-control form-control-solid" id="representative_id" name="representative_id" value="{{$representative->customer_id}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Temsilci Adı</label>
                        <input type="text" class="form-control form-control-solid" id="representative_name" name="representative_name" value="{{$representative->name}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Temsilci E-Posta</label>
                        <input type="text" class="form-control form-control-solid" id="representative_email" name="representative_email" value="{{$representative->email}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Temsilci Telefon Numarası</label>
                        <input type="text" class="form-control form-control-solid" id="representative_phone" name="representative_phone" value="{{$representative->phone}}"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Temsilci Notu</label>
                        <input type="text" class="form-control form-control-solid" id="representative_note" name="representative_note" value="{{$representative->note}}"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="representativeUpdateButton" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
<script>
      $(document).ready(function() {
    	$("#kt_datatable_zero_configuration").DataTable();

    	// Profil Bilgisi Güncelle
    	$('#customerProfileUpdateButton').click(function(e) {
    		e.preventDefault();

    		let profile_id = $('#profile_id').val();
    		let name = $('#name').val();
    		let email = $('#email').val();
    		let customer_type_id = $('#customer_type_id').val();
    		let phone = $('#phone').val();
    		let alternative_phone = $('#alternative_phone').val();
    		let tckn = $('#ckn').val();
    		let status_id = $('#status_id').val();

    		$.ajax({
    			type: "POST",
    			url: "{{route('customer.profile.update')}}",
    			data: {
    				profile_id: profile_id,
    				name: name,
    				email: email,
    				customer_type_id: customer_type_id,
    				phone: phone,
    				alternative_phone: alternative_phone,
    				tckn: tckn,
    				status_id: status_id,
    				_token: '{{csrf_token()}}',
    			},
    			success: function(response) {
    				if (response.success) {
    					console.log(response.message);
    					Swal.fire({
    						icon: "success",
    						title: response.message,
    						showDenyButton: false,
    						showCancelButton: true,
    						confirmButtonText: "Tamam",
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
    						showCancelButton: false,
    						confirmButtonText: "Tamam",
    					});
    				}
    			}
    		})
    	})

    	// Adres Bilgisi Güncelle
    	$('#customerAddressUpdateButton').click(function(e) {
    		e.preventDefault();

    		let address_id = $('#address_id').val();
    		let country_id = $('#country_id').val();
    		let city_id = $('#city_id').val();
    		let district_id = $('#district_id').val();
    		let postal_code = $('#postal_code').val();
    		let address = $('#address').val();

    		$.ajax({
    			type: "POST",
    			url: "{{route('customer.address.update')}}",
    			data: {
    				address_id: address_id,
    				country_id: country_id,
    				city_id: city_id,
    				district_id: district_id,
    				postal_code: postal_code,
    				address: address,
    				_token: '{{csrf_token()}}',
    			},
    			success: function(response) {
    				if (response.success) {
    					console.log(response.message);
    					Swal.fire({
    						icon: "success",
    						title: response.message,
    						showDenyButton: false,
    						showCancelButton: true,
    						confirmButtonText: "Tamam",
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
    						showCancelButton: false,
    						confirmButtonText: "Tamam",
    					});
    				}
    			}
    		})
    	})

    	// Diğer Bilgileri Güncelle
    	$("#customerOrderInfoButton").click(function(e) {
    		e.preventDefault();

    		let orderInfo_id = $('#orderInfo_id').val();
    		let tax_number = $('#tax_number').val();
    		let tax_office = $('#tax_office').val();
    		let fax_number = $('#fax_number').val();
    		let iban = $('#iban').val();

    		$.ajax({
    			url: "{{ route('customer.order-info.update') }}",
    			method: 'POST',
    			data: {
    				orderInfo_id: orderInfo_id,
    				tax_number: tax_number,
    				tax_office: tax_office,
    				fax_number: fax_number,
    				iban: iban,
    				_token: '{{ csrf_token() }}'
    			},
    			success: function(response) {

    				if (response.success) {
    					console.log(response.message);
    					Swal.fire({
    						icon: "success",
    						title: response.message,
    						showDenyButton: false,
    						showCancelButton: true,
    						confirmButtonText: "Tamam",
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
    						showCancelButton: false,
    						confirmButtonText: "Tamam",
    					});
    				}
    			},
    			error: function(xhr, status, error) {
    				Swal.fire({
    					icon: "error",
    					title: "Bilinmeyen Bir Hata",
    					showDenyButton: false,
    					showCancelButton: false,
    					confirmButtonText: "Tamam",
    				});
    			}
    		});
    	});

        // Müşteri Temsilci Bilgisini Güncelle
        $('#representativeUpdateButton').click(function(e){
            e.preventDefault();

            let representative_id    = $('#representative_id').val();
            let representative_name  = $('#representative_name').val();
            let representative_phone = $('#representative_phone').val();
            let representative_email = $('#representative_email').val();
            let representative_note  = $('#representative_note').val();

            $.ajax({
    			url: "{{ route('customer.representative.update') }}",
    			method: 'POST',
    			data: {
    				representative_id: representative_id,
    				representative_name: representative_name,
    				representative_phone: representative_phone,
    				representative_email: representative_email,
    				representative_note: representative_note,
    				_token: '{{ csrf_token() }}'
    			},
    			success: function(response) {

    				if (response.success) {
    					console.log(response.message);
    					Swal.fire({
    						icon: "success",
    						title: response.message,
    						showDenyButton: false,
    						showCancelButton: true,
    						confirmButtonText: "Tamam",
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
    						showCancelButton: false,
    						confirmButtonText: "Tamam",
    					});
    				}
    			},
    			error: function(xhr, status, error) {
    				Swal.fire({
    					icon: "error",
    					title: "Bilinmeyen Bir Hata",
    					showDenyButton: false,
    					showCancelButton: false,
    					confirmButtonText: "Tamam",
    				});
    			}
    		});

        })

    })
</script>
