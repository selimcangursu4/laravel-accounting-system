@extends('partials.master')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content pb-0">
        <div class="d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column gap-3 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2x my-0">Tüm Müşteriler</h1>
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
                </ul>
            </div>
            <div class="d-flex align-items-center gap-3 gap-lg-5">
                <div class="m-0">
                    <a href="{{route('user.view')}}" class="btn btn-flex btn-color-gray-700 bg-body fw-bold px-4"><i class="fa-solid fa-rotate-left"></i> Geri Dön</a>
                </div>
                <a href="{{route('customer.create')}}" class="btn btn-flex btn-center btn-dark px-4"><i class="fa-solid fa-floppy-disk"></i> Yeni Müşteri Ekle</a>
            </div>
        </div>
      <div class="card shadow-sm mt-7">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-filter fs-2 me-1"></i> Müşteri Filtrele
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Kodu</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-code" name="search-customer-code" placeholder="Müşteri Kodu Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Tipi</label>
                <select class="form-select form-select-solid" id="search-customer-type-id" name="search-customer-type-id" data-control="select2" data-placeholder="Seçiniz...">
                  <option></option>
                  <option value="1">Bireysel Müşteri</option>
                  <option value="2">Kurumsal Müşteri</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Müşteri Adı Soyadı</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-fullname" name="search-customer-fullname" placeholder="Müşteri Adı Soyadı Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Telefon Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-phone" name="search-customer-phone" placeholder="Telefon Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Alternatif Telefon Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-alternavite_phone" name="search-customer-alternavite_phone" placeholder="Alternatif Telefon Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">E-Posta Adresi</label>
                <input type="text" class="form-control form-control-solid" id="search-customer-email" name="search-customer-email" placeholder="E-Posta Adresi Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-10">
                <label for="form-label" class="required form-label">Fax Numarası</label>
                <input type="text" class="form-control form-control-solid" id="search-fax-number" name="search-fax-number" placeholder="Faks Numarası Giriniz..." />
              </div>
            </div>
            <div class="col-md-3">
              <label for="form-label" class="required form-label">Oluşturma Tarihi</label>
              <div class="input-group mb-3">
                <input type="date" class="form-control form-control-solid" id="search-customer-created-date" aria-describedby="basic-addon1">
                <input type="date" class="form-control form-control-solid" id="search-customer-end-date" aria-describedby="basic-addon2">
              </div>
            </div>
            <div class="col-md-12">
              <button type="button" id="filterButton" class="btn btn-warning btn-md float-end">
                <i class="fa-solid fa-filter fs-2"></i> Detaylı Filtrele </button>
            </div>
          </div>
        </div>
      </div>
      <div class="card shadow-sm mt-10">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fa-solid fa-book fs-2 me-1"></i> Müşteri Listesi
          </h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="kt_datatable_zero_configuration" class="table table-hover table-rounded table-striped border gy-7 gs-7">
              <thead>
                <tr class="fw-semibold fs-6 text-muted">
                  <th>Müşteri Kodu</th>
                  <th>Müşteri Tipi</th>
                  <th>Müşteri Adı</th>
                  <th>Telefon Numarası</th>
                  <th>Alternatif Telefon Numarası</th>
                  <th>E-Posta</th>
                  <th>Oluşturma Tarihi</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="fs-7">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
    {{-- Sms Gönder Modal --}}
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Sms Gönder</h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>

                <div class="modal-body">
                   <form>
                     @csrf
                     <div class="mb-10">
                        <label for="form-label" class="required form-label">Telefon Numararsı</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control form-control-solid"/>
                    </div>
                    <div class="mb-10">
                        <label for="form-label" class="required form-label">Mesaj</label>
                        <textarea class="form-control form-control-solid" id="message" name="message" rows="5"></textarea>
                    </div>
                   </form>
                   <h6 for="">Hazır Mesajlar</h6>
                   <div class="col-md-12">
                       <div class="row">
                           <div class="col-md-3 mt-2">
                               <button type="button" id="smsHelpButton" class="btn btn-secondary btn-sm">Destek Hattı</button>
                           </div>
                           <div class="col-md-3 mt-2">
                               <button id="smsFaultButton" class="btn btn-secondary btn-sm">Arıza Bildirimi</button>
                           </div>
                           <div class="col-md-3 mt-2">
                            <button id="smsOrderButton" class="btn btn-secondary btn-sm">Sipariş Onay</button>
                           </div>
                           <div class="col-md-3 mt-2">
                               <button id="smsInvoiceButton" class="btn btn-secondary btn-sm">Fatura Gönderimi</button>
                           </div>
                           <div class="col-md-3 mt-2">
                            <button id="smsPaymentButton" class="btn btn-secondary btn-sm">Ödeme Hatırlatma</button>
                           </div>
                           <div class="col-md-3 mt-2">
                               <button id="smsReturnButton" class="btn btn-secondary btn-sm">Değişim & İade</button>
                           </div>
                           <div class="col-md-3 mt-2">
                            <button id="smsAddressButton" class="btn btn-secondary btn-sm">Adres Bilgisi</button>
                        </div>
                       </div>
                      </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                    <button type="button" id="sendSmsbutton" class="btn btn-dark">Gönder</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Spama Ekle Modal --}}
<div class="modal fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Müşteriyi Spama Ekle</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body">
               <form>
                @csrf
                <div class="mb-10" style="display:none">
                    <label for="form-label" class="required form-label">Müşteri Id Numarası</label>
                    <input type="text" id="spam_id" name="spam_id" class="form-control form-control-solid"/>
                </div>
                <div class="mb-10">
                    <label for="form-label" class="required form-label">Açıklama</label>
                    <textarea class="form-control form-control-solid" id="spamDescription" name="spamDescription" rows="5"></textarea>
                </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kapat</button>
                <button type="button" id="spamSaveButton" class="btn btn-dark">Spama Ekle</button>
            </div>
        </div>
    </div>
</div>
@endsection
@include('partials.script')
<script>
    $(document).ready(function() {
        let table = $("#kt_datatable_zero_configuration").DataTable({
            serverSide: true,
            processing: true,
            ajax: {
                url: "{{ route('customer.fetch') }}",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.search_customer_code = $('#search-customer-code').val();
                    d.search_customer_type_id = $('#search-customer-type-id').val();
                    d.search_customer_fullname = $('#search-customer-fullname').val();
                    d.search_customer_phone = $('#search-customer-phone').val();
                    d.search_customer_alternavite_phone = $('#search-customer-alternavite_phone').val();
                    d.search_customer_email = $('#search-customer-email').val();
                    d.search_customer_fax_number = $('#search-fax-number').val();
                    d.search_customer_created_date = $('#search-customer-created-date').val();
                    d.search_customer_end_date = $('#search-customer-end-date').val();
                }
            },
            columns: [{
                    data: 'id'
                },
                {
                    data: 'customer_type_id',
                    render: function(data, type, row) {
                        if (row.customer_type_id == 1) {
                            return '<span class="badge badge-warning">Bireysel Müşteri</span>';

                        } else if (row.customer_type_id == 2) {

                            return '<span class="badge badge-info">Kurumsal Müşteri</span>';
                        }
                    }
                },
                {
                    data: 'name',
                    render: function(data, type, row) {
                        if (row.status_id == 1) {
                            return `${row.name} - <span class="badge badge-success">Aktif</span> `;
                        } else if (row.status_id == 2) {
                            return `${row.name} - <span class="badge badge-danger">Pasif</span> `;
                        }
                    }
                },
                {
                    data: 'phone'
                },
                {
                    data: 'alternative_phone'
                },
                {
                    data: 'email'
                },
                {
                    data: 'created_at',
                    render: function(data, type, row) {
                        return moment(data).format('DD/MM/YYYY HH:mm:ss');
                    }
                },
                {
                    data: 'action',
                    render: function(data, type, row) {
                        return `<span class="badge badge-primary">Görüntüle</span>
                        <span type="button" class="badge badge-secondary" data-bs-toggle="modal" data-phone="${row.phone}" data-bs-target="#kt_modal_1">Sms Gönder</span>
                        <span type="button" class="badge badge-danger" data-id = "${row.id}" data-bs-toggle="modal" data-bs-target="#kt_modal_2">Spama Ekle</span>`;
                    }
                }
            ]
        });
        // Filtreleme Sonucu Tabloda Sonuçların Listelenmesi
        $('#filterButton').click(function(e) {
            e.preventDefault();
            table.draw();
        });
        // Sms Gönder Modal İçerisine Telefon Numarasını Gönderme
        $('#kt_modal_1').on('show.bs.modal', function(event) {
            let phone = $(event.relatedTarget).data('phone');
            $('#phone_number').val(phone);
        });
        // Destek Hattı Hazır Mesaj
        $('#smsHelpButton').click(function(e) {
            let helpMessage = "Merhaba,Scobject Muhasebe olarak size daha iyi hizmet verebilmek için buradayız. Müşteri hizmetleri numaramız: 5550162190. Herhangi bir sorunuz veya yardıma ihtiyacınız olursa bizimle iletişime geçebilirsiniz.İyi günler dileriz!"
            $('#message').val(helpMessage);
        });
        // Sistemsel Arıza Hazır Mesaj
        $('#smsFaultButton').click(function(e) {
            let FaultMessage = "Merhaba,Üzgünüz, şu an sistemimizde bir hata oluştu ve hizmetimizde geçici bir aksama yaşanıyor. Ekiplerimiz sorunu hızlı bir şekilde çözmek için çalışmaktadır. Sabır ve anlayışınız için teşekkür ederiz. Yardımcı olabileceğimiz bir şey olursa, lütfen bizimle iletişime geçmekten çekinmeyin.İyi günler dileriz!"
            $('#message').val(FaultMessage);
        });
        // Siparişinizi Aldık Hazır Mesaj
        $('#smsOrderButton').click(function(e) {
            let orderMessage = "Merhaba, siparişinizi aldık. Siparişiniz başarıyla onaylanmıştır ve en kısa sürede işleme alınacaktır. Sipariş numaranız: [Sipariş Numarası]. Takip numaranız ve teslimat bilgileri için size ayrıca bilgi vereceğiz.Herhangi bir sorunuz olursa, müşteri hizmetlerimizle iletişime geçebilirsiniz.Teşekkür eder, iyi günler dileriz!"
            $('#message').val(orderMessage);
        });
        // Fatura Bilgisi Hazır Mesaj
        $('#smsInvoiceButton').click(function(e) {
            let ınvoiceMessage = "Merhaba,Faturanızı başarıyla oluşturduk ve kayıtlı e-posta adresinize gönderdik. E-postanızı kontrol ederek faturanızın detaylarını inceleyebilirsiniz.Herhangi bir sorunuz olursa, müşteri hizmetlerimizle iletişime geçmekten çekinmeyin.Teşekkür ederiz!"
            $('#message').val(ınvoiceMessage);
        });
        // Ödeme Hatırlatma Hazır Mesaj
        $('#smsPaymentButton').click(function(e) {
            let paymentMessage = "Merhaba,[Şirket Adı] olarak, [Tarih] tarihli ödeme işleminizi hatırlatmak isteriz. Ödemenizi henüz almadık ve bu konuda herhangi bir sorun yaşamanızı istemeyiz. Lütfen ödeme işleminizi en kısa sürede gerçekleştirmenizi rica ederiz.Ödeme detaylarınız için bizimle iletişime geçebilirsiniz.Teşekkür ederiz!"
            $('#message').val(paymentMessage);
        });
        // Değişim İade Hakkında Hazır Mesaj
        $('#smsReturnButton').click(function(e) {
            let returnMessage = "Merhaba,değişim/iade talebiniz başarıyla onaylanmıştır. Talebinizin işleme alındığını ve en kısa sürede tarafınıza geri dönüş yapılacağını bildiririz.Herhangi bir sorunuz olursa, müşteri hizmetlerimizle iletişime geçebilirsiniz.Teşekkür ederiz!"
            $('#message').val(returnMessage);
        });
        // Adres Bilgisi Hazır Mesaj
        $('#smsAddressButton').click(function(e) {
            let addressMessage = "Merhaba,[Şirket Adı] olarak bize ulaşmak isterseniz, adresimiz şu şekildedir:[Firma Adresi]Sizleri ağırlamaktan memnuniyet duyarız. Herhangi bir sorunuz olursa, müşteri hizmetlerimizle iletişime geçebilirsiniz.Teşekkür ederiz!"
            $('#message').val(addressMessage);
        });
        // Sms Gönder Ve Log Kayıt
        $('#sendSmsbutton').click(function(e) {
            e.preventDefault();
            let phone = $('#phone_number').val();
            let message = $('#message').val();
            let url = "{{ route('send.sms')}}";
            const token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token,
                    phone: phone,
                    message: message
                },
                success: function(response) {
                    if (response.success) {
                        console.log(response.message);
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    } else {
                        console.log(response.message);
                        Swal.fire({
                            position: "top-center",
                            icon: "danger",
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    Swal.fire({
                        position: "top-center",
                        icon: "warning",
                        title: error,
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    // Spama ekle Modal İçerisine Telefon Numarasını Gönderme
    $('#kt_modal_2').on('show.bs.modal', function (event) {
      let spamId = $(event.relatedTarget).data('id');
      $('#spam_id').val(spamId);
    });
    // Spama Ekle Post
    $('#spamSaveButton').click(function(e){
        e.preventDefault();

        let spamId          = $('#spam_id').val();
        let spamDescription = $('#spamDescription').val();
        const token         = $('meta[name="csrf-token"]').attr('content');

        console.log(spamDescription);
        console.log(spamId);

        $.ajax({
            type:"POST",
            url:"{{route('customer.spam.create')}}",
            data:{
                _token: token,
                spamId:spamId,
                spamDescription:spamDescription
            },
            success: function(response) {
            if(response.success) {
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
            } else {
             console.log(response.message);
             Swal.fire({
             position: "top-center",
             icon: "error",
             title: response.message,
             showConfirmButton: false,
             timer: 1500
             });
            }
            }
        })
    })



    })
</script>
