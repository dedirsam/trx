<!--begin::Heaeder menu toggle-->
<div class="d-flex align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
  <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
    <span class="svg-icon svg-icon-2x">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
      </svg>
    </span>
    <!--end::Svg Icon-->
  </div>
</div>
<!--end::Heaeder menu toggle-->
<!--begin::Header Logo-->
<div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
  <a href="<?php echo base_url(); ?>">
    <img alt="Logo" src="<?php echo base_url('assets'); ?>/media/logos/logo-light.svg" class="h-15px h-lg-20px logo-default" />
    <img alt="Logo" src="<?php echo base_url('assets'); ?>/media/logos/logo-default.svg" class="h-15px h-lg-20px logo-sticky" />
    <?= $userdata->last_name; ?>
  </a>
</div>
<!--end::Header Logo-->
<!--begin::Wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
  <!--begin::Navbar-->
  <div class="d-flex align-items-stretch" id="kt_header_nav">
    <!--begin::Menu wrapper-->
    <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
      <!--begin::Menu-->
      <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
          <div class="menu-item">
            <a class="menu-link py-3" href="<?php echo base_url(); ?>">
              <span class="menu-icon">
                <svg height="20px" width="50px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path d="M896 832H128V490.666667L512 128l384 362.666667z" fill="#E8EAF6"></path>
                    <path d="M832 448l-106.666667-106.666667V192h106.666667zM128 832h768v106.666667H128z" fill="#C5CAE9"></path>
                    <path d="M512 91.733333L85.333333 488.533333l42.666667 46.933334L512 179.2l384 356.266667 42.666667-46.933334z" fill="#B71C1C"></path>
                    <path d="M384 597.333333h256v341.333334H384z" fill="#D84315"></path>
                    <path d="M448 362.666667h128v128h-128z" fill="#01579B"></path>
                    <path d="M586.666667 757.333333c-6.4 0-10.666667 4.266667-10.666667 10.666667v42.666667c0 6.4 4.266667 10.666667 10.666667 10.666666s10.666667-4.266667 10.666666-10.666666v-42.666667c0-6.4-4.266667-10.666667-10.666666-10.666667z" fill="#FF8A65"></path>
                  </g>
                </svg>
              </span>
            </a>
          </div>
        </div>
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
          <span class="menu-link py-3">
            <span class="menu-icon">
              <span class="svg-icon svg-icon-2">
                <svg viewBox="0 0 30 30" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#41A6F9">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path class="st6" d="M24.1,4h-9c-0.5,0-1,0.2-1.3,0.5L3.6,14.8c-0.7,0.7-0.7,1.9,0,2.6l9,9c0.7,0.7,1.9,0.7,2.6,0l10.3-10.3 c0.3-0.3,0.5-0.8,0.5-1.3v-9C26,4.8,25.2,4,24.1,4z M20,12c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C22,11.1,21.1,12,20,12z"></path>
                  </g>
                </svg>
              </span>
            </span>
            <span class="menu-title">Kategori TRX</span>
            <span class="menu-arrow d-lg-none"></span>
          </span>
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            <div class="menu-item">
              <a class="menu-link py-3" href="<?php echo base_url('admin/kategori'); ?>" title="Informasi & Managemen Kategori TRX" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <span class="svg-icon svg-icon-2">
                    <svg viewBox="0 0 30 30" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#41A6F9">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path class="st6" d="M24.1,4h-9c-0.5,0-1,0.2-1.3,0.5L3.6,14.8c-0.7,0.7-0.7,1.9,0,2.6l9,9c0.7,0.7,1.9,0.7,2.6,0l10.3-10.3 c0.3-0.3,0.5-0.8,0.5-1.3v-9C26,4.8,25.2,4,24.1,4z M20,12c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C22,11.1,21.1,12,20,12z"></path>
                      </g>
                    </svg>
                  </span>
                </span>
                <span class="menu-title">Manage Kategori</span>
              </a>
            </div>
          </div>
        </div>
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
          <span class="menu-link py-3">
            <span class="menu-title">Transaksi</span>
            <span class="menu-arrow d-lg-none"></span>
          </span>
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            <div class="menu-item">
              <a class="menu-link py-3" href="<?php echo base_url('admin/trx/trx_bank'); ?>" title="Transaksi Pembayaran" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <span class="svg-icon svg-icon-2">
                    <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.626 290.626" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#eab1ae" stroke-width="6.9750239999999994">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g id="SVGRepo_iconCarrier">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Trx Bank<span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">
                    oOo
                  </span></span>
              </a>
              <a class="menu-link py-3" href="<?php echo base_url('admin/trx/trx_payfazz'); ?>" title="Transaksi Pembayaran" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.626 290.626" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#eab1ae" stroke-width="6.9750239999999994">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g id="SVGRepo_iconCarrier">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Trx Pay Fazz<span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">
                    oOo
                  </span></span>
              </a>
              <a class="menu-link py-3" href="<?php echo base_url('admin/trx/trx_payopay'); ?>" title="Transaksi Pembayaran" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.626 290.626" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#eab1ae" stroke-width="6.9750239999999994">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g id="SVGRepo_iconCarrier">
                        <g>
                          <g>
                            <g>
                              <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                            </g>
                            <g>
                              <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                              <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                              <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                              <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                              <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Trx PayoPay<span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">
                    oOo
                  </span></span>
              </a>
            </div>
          </div>
        </div>

        <!-- <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
          <div class="menu-item">
            <a class="menu-link py-3" href="<?php echo base_url('admin/trx/trx_bank'); ?>" title="Transaksi Pembayaran" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
              <span class="menu-icon">
                <span class="svg-icon svg-icon-2">
                  <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.626 290.626" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#eab1ae" stroke-width="6.9750239999999994">
                      <g>
                        <g>
                          <g>
                            <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                          </g>
                          <g>
                            <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                            <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                            <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                            <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                            <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                    <g id="SVGRepo_iconCarrier">
                      <g>
                        <g>
                          <g>
                            <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                          </g>
                          <g>
                            <path style="fill:#247359;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                            <path style="fill:#247359;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                            <path style="fill:#247359;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                            <path style="fill:#247359;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                            <path style="fill:#247359;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </span>
              </span>
              <span class="menu-title">Trx Bank<span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">
                  oOo
                </span></span>
            </a>
          </div>
        </div> -->
      </div>
      <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
  </div>
  <!--end::Navbar-->
  <!--begin::Topbar-->
  <div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Toolbar wrapper-->
    <div class="topbar d-flex align-items-stretch flex-shrink-0">

      <!--begin::User-->
      <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
          <img alt="Pic" src="<?php echo base_url('assets'); ?>/media/avatars/<?= $userdata->photo; ?>" />
        </div>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
          <!--begin::Menu item-->
          <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
              <!--begin::Avatar-->
              <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="<?php echo base_url('assets'); ?>/media/avatars/<?= $userdata->photo; ?>" />
              </div>
              <!--end::Avatar-->
              <!--begin::Username-->
              <div class="d-flex flex-column">
                <div class="fw-bolder d-flex align-items-center fs-5"> <?= $userdata->last_name; ?>
                  <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"> <?= $userdata->first_name; ?></span>
                </div>
                <a href="#" class="fw-bold text-muted text-hover-primary fs-7"> <?= $userdata->email; ?></a>
              </div>
              <!--end::Username-->
            </div>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="../dist/account/overview.html" class="menu-link px-5">My Profile</a>
          </div>
          <!--end::Menu item-->

          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->

          <!--begin::Menu item-->
          <div class="menu-item px-5 my-1">
            <a href="#" class="menu-link px-5">Account Settings</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu item-->
          <div class="menu-item px-5">
            <a href="<?php echo base_url('auth/logout'); ?>" class="menu-link px-5">Sign Out</a>
          </div>
          <!--end::Menu item-->
          <!--begin::Menu separator-->
          <div class="separator my-2"></div>
          <!--end::Menu separator-->

        </div>
        <!--end::Menu-->
        <!--end::Menu wrapper-->
      </div>
      <!--end::User -->
      <!--begin::Aside mobile toggle-->
      <div class="d-flex align-items-center d-lg-none ms-4" title="Show header menu">
        <div class="btn btn-icon btn-custom w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
          <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
          <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
              <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
            </svg>
          </span>
          <!--end::Svg Icon-->
        </div>
      </div>
      <!--end::Aside mobile toggle-->
    </div>
    <!--end::Toolbar wrapper-->
  </div>
  <!--end::Topbar-->
</div>
<!--end::Wrapper-->