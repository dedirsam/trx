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
          <span class="menu-link py-3">
            <span class="menu-title">Dashboard</span>
            <span class="menu-arrow d-lg-none"></span>
          </span>
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            <div class="menu-item">
              <a class="menu-link py-3" href="<?php echo base_url(); ?>">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
                      <path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Home</span>
              </a>
              <a class="menu-link py-3" href="<?php echo base_url('admin/kategori'); ?>">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                      <path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
                      <path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Kategori TRX</span>
              </a>
            </div>
          </div>
        </div>
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
          <span class="menu-link py-3">
            <span class="menu-title">Deposit</span>
            <span class="menu-arrow d-lg-none"></span>
          </span>
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            <div class="menu-item">
              <a class="menu-link py-3" href="<?php echo base_url('admin/saldo'); ?>">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Saldo</span>
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
            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-accordion mb-1">
              <span class="menu-link py-3">
                <span class="menu-bullet">
                  <span class="bullet bullet-dot"></span>
                </span>
                <span class="menu-title">Jenis</span>
                <!-- <span class="menu-arrow"></span> -->
              </span>
              <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                <div class="menu-item">
                  <a class="menu-link py-3" href="<?php echo base_url('admin/bon'); ?>" data-kt-page="pro">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">BON
                      <span class="badge badge-pro badge-light-success fw-bold fs-9 px-2 py-1 ms-1">
                        oOo
                      </span>
                  </a>
                </div>
                <div class="menu-item">
                  <a class="menu-link py-3" href="<?php echo base_url('admin/tunai'); ?>" data-kt-page="pro">
                    <span class="menu-bullet">
                      <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Tunai
                      <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">
                        oOo
                      </span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
          <span class="menu-link py-3">
            <span class="menu-title">Jenis Transaksi</span>
            <span class="menu-arrow d-lg-none"></span>
          </span>
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
            <div class="menu-item">
              <a class="menu-link py-3" href="../dist/documentation/base/utilities.html" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/layouts/lay009.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.3" d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z" fill="black" />
                      <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">Brimo</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link py-3" href="../dist/documentation/getting-started.html" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                      <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">PayFazz</span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link py-3" href="#" data-kt-page="pro" title="Build your layout, preview and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                      <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">PayoPay
                  <span class="badge badge-pro badge-light-danger fw-bold fs-9 px-2 py-1 ms-1">Pro</span></span>
              </a>
            </div>
            <div class="menu-item">
              <a class="menu-link py-3" href="../dist/documentation/getting-started/changelog.html">
                <span class="menu-icon">
                  <!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
                  <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black" />
                      <path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black" />
                    </svg>
                  </span>
                  <!--end::Svg Icon-->
                </span>
                <span class="menu-title">PosPay</span>
              </a>
            </div>
          </div>
        </div>
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