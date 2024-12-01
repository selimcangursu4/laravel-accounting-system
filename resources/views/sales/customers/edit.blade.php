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
            <a type="button" id="save" class="btn btn-flex btn-center btn-success px-4">
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
                <button type="button" class="btn btn-sm btn-success"> Güncelle </button>
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
                <button type="button" class="btn btn-sm btn-success"> Güncelle </button>
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
                <button type="button" class="btn btn-sm btn-success"> Güncelle </button>
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
                <button type="button" class="btn btn-sm btn-success"> Güncelle </button>
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
@endsection
@include('partials.script')
<script>
    $(document).ready(function(){
        $("#kt_datatable_zero_configuration").DataTable();


    })
</script>
