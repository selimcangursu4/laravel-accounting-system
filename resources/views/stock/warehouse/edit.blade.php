@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
              <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Depo Detayı</h1>
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
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Depo Detayı</li>
              </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
              <div class="m-0">
                <a href="{{route('warehouse.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4">
                  <i class="fa-solid fa-rotate-left"></i> Geri Dön </a>
              </div>
              <div>
                <a type="button" id="deleteWarehouseButton" data-id="{{$warehouse->id}}" class="btn btn-danger fw-bold px-4">
                  <i class="fa-solid fa-trash"></i> Depoyu Sil </a>
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
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$warehouse->name}}</a>
                        <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{$warehouse->warehouseTypeName}}</a>
                      </div>
                      <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold"> Depo Profili </div>

                      </div>
                      <div class="separator separator-dashed my-3"></div>
                      <div class="pb-5 fs-6">
                        <div class="fw-bold mt-5">Depo Kodu</div>
                        <div class="text-gray-600">{{$warehouse->id}}</div>
                        <div class="fw-bold mt-5">Depo Durumu</div>
                        <div class="text-gray-600">
                            @if($warehouse->status_id == 1)
                            <span class="badge badge-success">Aktif</span>
                            @elseif($warehouse->status_id == 0)
                            <span class="badge badge-success">Pasif</span>
                            @endif
                        </div>
                        <div class="fw-bold mt-5">Depo Sorumlusu</div>
                        <div class="text-gray-600">{{$warehouse->managerName}}</div>
                        <div class="fw-bold mt-5">Depo Kapasitesi</div>
                        <div class="text-gray-600">{{$warehouse->capacity}}</div>
                        <div class="fw-bold mt-5">Depo Doluluk Oranı</div>
                        <div class="text-gray-600">{{$warehouse->current_stock}}</div>
                        <div class="fw-bold mt-5">Ülke / Şehir / İlçe</div>
                        <div class="text-gray-600">
                            {{$warehouse->countryName}} / {{$warehouse->cityName}} / {{$warehouse->districtName}}
                        </div>
                        <div class="fw-bold mt-5">Oluşturma Tarihi</div>
                        <div class="text-gray-600">{{$warehouse->created_at}}</div>
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-9">
                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                  <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">
                      <b>Depo Stok Durumu</b>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">
                      <b>Depo Hareketleri</b>
                    </a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                    <div class="card shadow-sm">
                      <div class="card-header">
                        <h3 class="card-title">Depo Stok Durumu</h3>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-row-bordered gy-5 kt_datatable_zero_configuration">
                            <thead>
                              <tr class="fw-semibold fs-6 text-muted">
                                <th>Ürün Kodu</th>
                                <th>Ürün Adı</th>
                                <th>Kategori</th>
                                <th>Stok Miktarı</th>
                                <th>Satış Fiyatı</th>
                                <th>Kritik Stok Durumu</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Wiky Watch 4 Plus</td>
                                <td>Akıllı Saat</td>
                                <td>60</td>
                                <td>5500 TL</td>
                                <td>10 Adet</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                    <div class="card shadow-sm">
                      <div class="card-header">
                        <h3 class="card-title">Depo Hareketleri</h3>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table table-row-bordered gy-5 kt_datatable_zero_configuration">
                            <thead>
                              <tr class="fw-semibold fs-6 text-muted">
                                <th>Ürün Adı</th>
                                <th>Hareket Tipi</th>
                                <th>Adet</th>
                                <th>Fiyat</th>
                                <th>Durum</th>
                                <th>Teslim Edilen Yer</th>
                                <th>Sevk Tarihi</th>
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
                                <td></td>
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
         </div>
      </div>
      {{-- Depo Bilgilerini Güncelle --}}
      <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Depo Bilgilerini Güncelle</h3>
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
                                    <label for="form-label" class="required form-label">Depo Id</label>
                                    <input type="text" class="form-control form-control-solid" id="warehouse_id" name="warehouse_id" value="{{$warehouse->id}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Depo Adı</label>
                                    <input type="text" class="form-control form-control-solid" id="warehouse_name" name="warehouse_name" value="{{$warehouse->name}}"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Depo Tipi</label>
                                    <select class="form-select form-select-solid" id="warehouse_type_id" name="warehouse_type_id" data-control="select2" data-placeholder="Select an option">
                                        @foreach ($warehouseType as $typeName )
                                        <option value="{{$typeName->id}}" {{$warehouse->warehouse_type_id == $typeName->id ? 'selected' : ''}}>{{$typeName->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Depo Durumu</label>
                                    <select class="form-select form-select-solid" id="status_id" name="status_id" data-control="select2" data-placeholder="Select an option">
                                        <option value="1" {{$warehouse->status_id == 1 ? 'selected' : ''}}>Aktif</option>
                                        <option value="0" {{$warehouse->status_id == 0 ? 'selected' : ''}}>Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Depo Yetkilisi</label>
                                    <select class="form-select form-select-solid" id="manager_id" name="manager_id" data-control="select2" data-placeholder="Select an option">
                                        @foreach ($users as $user )
                                        <option value="{{$user->id}}" {{$warehouse->manager_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Adres Bilgisi</label>
                                    <textarea class="form-control form-control-solid" id="address" name="address" rows="3">{{$warehouse->address}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Ülke</label>
                                    <select class="form-select form-select-solid" id="country_id" name="country_id" data-control="select2" data-placeholder="Select an option">
                                        @foreach ($countries as $country )
                                        <option value="{{$country->id}}" {{$warehouse->country_id == $country->id ? 'selected' : ''}}>{{$country->baslik}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">Şehir</label>
                                    <select class="form-select form-select-solid" id="city_id" name="city_id" data-control="select2" data-placeholder="Select an option">
                                        @foreach ($cities as $city )
                                        <option value="{{$city->id}}" {{$warehouse->city_id == $city->id ? 'selected' : ''}}>{{$city->baslik}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-10">
                                    <label for="form-label" class="required form-label">İlçe</label>
                                    <select class="form-select form-select-solid" id="district_id" name="district_id" data-control="select2" data-placeholder="Select an option">
                                        @foreach ($districts as $district )
                                        <option value="{{$district->id}}" {{$warehouse->district_id == $district->id ? 'selected' : ''}}>{{$district->baslik}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Depo Kapasitesi</label>
                                    <input type="text" class="form-control form-control-solid" id="capacity" name="capacity" value="{{$warehouse->capacity}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                            <button type="button" id="warehouseUpdateButton" class="btn btn-primary">Güncelle</button>
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

    $(".kt_datatable_zero_configuration").DataTable();

    // Depo Güncelleme
    $('#warehouseUpdateButton').click(function(e){
        e.preventDefault();

        let id                = $('#warehouse_id').val();
        let name              = $('#warehouse_name').val();
        let warehouse_type_id = $('#warehouse_type_id').val();
        let status_id         = $('#status_id').val();
        let manager_id        = $('#manager_id').val();
        let address           = $('#address').val();
        let country_id        = $('#country_id').val();
        let city_id           = $('#city_id').val();
        let district_id       = $('#district_id').val();
        let capacity          = $('#capacity').val();

        $.ajax({
            type:"POST",
            url:"{{route('warehouses.update')}}",
            data:{
                _token: "{{csrf_token()}}",
                id:id,
                name:name,
                warehouse_type_id:warehouse_type_id,
                status_id:status_id,
                manager_id:manager_id,
                address:address,
                country_id:country_id,
                city_id:city_id,
                district_id:district_id,
                capacity:capacity
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
                 window.location.reload();
                }
             });
            }else{
                console.log(response.message);
                Swal.fire({
                icon:"danger",
                title: response.message,
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: "Tamam",
                })
             }
            }
          })
        });
        // Depo Sil
    $('#deleteWarehouseButton').click(function(e) {
    e.preventDefault();

    Swal.fire({
        icon: "warning",
        title: "Depoyu Silmek İstediğinize Emin misiniz ?",
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: "Evet , sil !",
    }).then((result) => {
        if (result.isConfirmed) {
            let dataId = $(this).data('id');

            $.ajax({
                type: "POST",
                url: "{{route('warehouses.delete')}}",
                data: {
                    _token: "{{csrf_token()}}",
                    dataId: dataId
                },
                success: function(response) {
                    if (response.success) {
                        console.log(response.message);
                        Swal.fire({
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
                            title: response.message,
                            showDenyButton: false,
                            showCancelButton: true,
                            confirmButtonText: "Tamam",
                        })

                    }
                }
            })
        }
    });
})
})
</script>
