<div class="app-header-secondary">
    <div class="app-container container-xxl d-flex align-items-stretch">
        <div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
            <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                    <a href="{{route('dashboard')}}">
                    <span class="menu-link">
                        <span class="menu-title">Kontrol Paneli</span>
                        <span class="menu-arrow d-lg-none"></span>

                    </span>
                   </a>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Satış Yönetimi</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/account/overview.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Satış Faturaları</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/account/settings.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Siparişler</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('customer.view')}}" data-kt-page="pro">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Müşteriler
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">İadeler
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="#" data-kt-page="pro">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Raporlama
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Alış Yönetimi</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Alış Faturaları</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('suppliers.view')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Tedarikçiler</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Alış İadeleri</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Raporlar</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Gelir Gider Yönetimi</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Gelir Yönetimi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Gider Yönetimi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Raporlar</span>
                            </a>
                        </div>
                    </div>
                   </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Stok Yönetimi</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('warehouse.view')}}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Depolar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Stok Hareketleri</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">İrsaliyeler</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/contact.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ürünler</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/contact.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Toplu Fiyat Değişikliği</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/contact.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Raporlar</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Raporlama</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Finansal Raporlar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Satış Raporları</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Alış Raporları</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Stok Raporları</span>
                            </a>
                        </div>
                          <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Banka Raporları</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Banka ve Kasa</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kasa İşlemleri</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Banka İşlemleri</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Alış Raporları</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Cari Hesaplar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Borçlar ve Alacaklar</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">E-Fatura</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">E Fatura Gönderimi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">E-Fatura Listesi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">E-Arşiv Faturaları</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                    <span class="menu-link">
                        <span class="menu-title">Vergi Yönetimi</span>
                        <span class="menu-arrow d-lg-none"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/about.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Gelir Vergisi</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/team.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Kdv Hesaplaması</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../dist/pages/faq.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ödenecek Vergiler</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
