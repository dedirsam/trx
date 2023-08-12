<style>
    .modal-options {
        display: flex;
        justify-content: space-between;
    }

    .modal-option {
        width: 48%;
        /* Atur lebar sesuai kebutuhan Anda */
    }

    .divider {
        border-top: 3px solid blue;
        /* Mengatur tebal dan warna garis */
        margin: 10px 0;
        /* Menambahkan jarak di atas dan bawah garis */
    }
</style>
<!--begin::Post-->
<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Index-->
    <div class="card card-page">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xxl-12">
                    <!--begin::Table Widget 1-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5 pb-3" style="display: flex; align-items: center;">
                            <!--begin::Card title-->
                            <img src="<?php echo base_url('assets/media/logos/bri.png'); ?>" alt="BRI Logo" style="width: 150px;">
                            <h6 class="card-title fw-bolder text-blue-500 fs-2"><?php if ($saldo_cash > 0) : ?>
                                    <small class="text-blue-500"> Saldo Cash: Rp <?php echo number_format($saldo_cash, 0, ',', '.'); ?></small>
                                <?php else : ?>
                                    <p>Saldo Anda kosong.</p>
                                <?php endif; ?>
                            </h6>
                            <h6 class="card-title fw-bolder text-blue-500 fs-2"><?php if ($saldo_bank > 0) : ?>
                                    <small class="text-blue-500"> Saldo Bank: Rp <?php echo number_format($saldo_bank, 0, ',', '.'); ?></small>
                                <?php else : ?>
                                    <p>Saldo Anda kosong.</p>
                                <?php endif; ?>
                            </h6>
                            <!-- Tombol untuk tambah transaksi tunai -->
                            <h3 class="card-title fw-bolder text-center text-gray-800 fs-2">
                                <button type="button" class="btn btn-sm btn-primary" onclick="showTrxModal()">
                                    <span class="svg-icon svg-icon-1">
                                        <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 290.626 290.626" xml:space="preserve" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <circle style="fill:#F9BA48;" cx="145.314" cy="145.313" r="79.688"></circle>
                                                        </g>
                                                        <g>
                                                            <path style="fill:#fb0600;" d="M79.689,131.25c-43.941,0-79.688,35.747-79.688,79.688s35.747,79.688,79.687,79.688 s79.687-35.747,79.687-79.688S123.629,131.25,79.689,131.25z M79.689,281.25c-38.77,0-70.312-31.542-70.312-70.313 s31.542-70.313,70.312-70.313s70.312,31.543,70.312,70.314S118.459,281.25,79.689,281.25z"></path>
                                                            <path style="fill:#fb0600;" d="M86.72,164.063h-2.344V150h-9.375v14.063h-2.344c-14.212,0-25.781,11.569-25.781,25.781 s11.569,25.781,25.781,25.781h14.062c9.047,0,16.406,7.359,16.406,16.406s-7.359,16.406-16.406,16.406H72.657 c-9.047,0-16.406-7.359-16.406-16.406V225h-9.375v7.031c0,14.213,11.569,25.781,25.781,25.781h2.344v14.063h9.375v-14.063h2.344 c14.212,0,25.781-11.569,25.781-25.781S100.932,206.25,86.72,206.25H72.657c-9.047,0-16.406-7.359-16.406-16.406 s7.359-16.406,16.406-16.406h14.062c9.047,0,16.406,7.359,16.406,16.406v7.031h9.375v-7.031 C112.501,175.631,100.932,164.063,86.72,164.063z"></path>
                                                            <path style="fill:#fb0600;" d="M290.625,28.125h-26.283c4.575-2.63,7.533-7.495,7.533-13.031C271.875,6.769,265.107,0,256.781,0 c-6.441,0-12.764,2.217-17.794,6.244l-13.987,11.189L211.012,6.239C205.979,2.217,199.66,0,193.219,0 c-8.325,0-15.094,6.769-15.094,15.094c0,5.541,2.958,10.402,7.533,13.031h-26.283v37.5h14.062v79.688h37.5h28.125h37.5V65.625 h14.062L290.625,28.125L290.625,28.125z M229.688,37.5v18.75h-9.375V37.5h4.172l0.516,0.112l0.516-0.112H229.688z M244.848,13.561c3.375-2.7,7.612-4.186,11.934-4.186c3.155,0,5.719,2.564,5.719,5.719c0,2.7-1.842,4.992-4.477,5.578 l-30.548,6.787L244.848,13.561z M193.219,9.375c4.322,0,8.559,1.486,11.934,4.186l17.372,13.898l-30.548-6.787 c-2.634-0.586-4.477-2.883-4.477-5.578C187.501,11.939,190.064,9.375,193.219,9.375z M168.751,56.25V37.5h42.187v18.75h-37.5 H168.751z M182.813,135.938V65.625h28.125v70.313H182.813z M220.313,135.938V65.625h9.375v70.313H220.313z M267.188,135.938 h-28.125V65.625h28.125V135.938z M281.25,56.25h-4.687h-37.5V37.5h42.187V56.25z"></path>
                                                            <path style="fill:#fb0600;" d="M122.893,44.658l-2.034-9.15c-42.436,9.412-75.937,42.914-85.35,85.35l9.155,2.03 C53.289,83.995,83.996,53.287,122.893,44.658z"></path>
                                                            <path style="fill:#fb0600;" d="M167.734,245.962l2.034,9.155c42.436-9.417,75.933-42.914,85.35-85.35l-9.155-2.034 C237.338,206.63,206.631,237.337,167.734,245.962z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    Tambah Transaksi
                                </button>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <hr>
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table align-middle table-row-bordered table-row-dashed gy-5" style="width:100%">
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                            <th class="min-w-25px">No</th> <!-- Kolom nomor -->
                                            <th class="min-w-125px ">Nama</th>
                                            <th class="min-w-75px">Jenis Trx</th>
                                            <th class="min-w-125px">Belanja</th>
                                            <th class="min-w-75px">Harga</th>
                                            <th class="min-w-75px">Bayar</th>
                                            <th class="min-w-75px">Bayar</th>
                                            <th class="min-w-75px">Laba</th>
                                            <th class="text-center pe-2 min-w-70px">Date</th>
                                            <th class="text-center pe-2 min-w-25px">act</th>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <?php foreach ($trx_data as $index => $trx) : ?>
                                            <tr>
                                                <td class="p-0"><?php echo $index + 1; ?></td> <!-- Menampilkan nomor pada kolom -->
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <p class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1"><?php echo $trx['nama']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <!-- <a href="#" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1"> -->
                                                            <span class="text-gray-400 me-2 fw-boldest mb-2">
                                                                <?php echo ($trx['j_trx'] == 0) ? 'Bon' : 'Tunai'; ?>
                                                            </span>
                                                            <!-- </a> -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2"><?php echo $trx['kategori']; ?></span>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                                            Rp <?php echo number_format($trx['jml_trx'], 0, ',', '.'); ?>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                                            Rp <?php echo number_format($trx['jml_byr'], 0, ',', '.'); ?>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <?php if ($trx['jml_byr'] == 0) : ?>
                                                            <button type="button" class="btn btn-sm btn-danger btn-bayar badge badge-danger" data-id="<?php echo $trx['id']; ?>" data-jml-trx="<?php echo $trx['jml_trx']; ?>" data-bs-toggle="modal" data-bs-target="#bayarModal">Belum Bayar</button>
                                                        <?php else : ?>
                                                            <span class="badge badge-success">Lunas</span>
                                                        <?php endif; ?>
                                                        <input type="hidden" id="jmlTrx_<?php echo $trx['id']; ?>" value="<?php echo $trx['jml_trx']; ?>">
                                                    </div>
                                                </td>
                                                <td class="p-0"><?php echo $trx['laba']; ?></td>
                                                <td class="p-0">
                                                    <div class="d-flex flex-column w-100 me-2 mt-2">
                                                        <span class="text-gray-400 me-2 fw-boldest mb-2">
                                                            <?php echo date('d-m-Y', strtotime($trx['created_at'])); ?>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <span class="svg-icon svg-icon-1" data-id="<?php echo $trx['id']; ?>" onclick="konfirmasiBatalkan(this)" title="Refund / Batal">
                                                                <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 505.6 505.6" xml:space="preserve" fill="#000000">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path style="fill:#7ed559;" d="M494.4,301.6c-4.4-4.4-10-8.8-16.4-8.8H339.6c-13.2,0-26.4,14.4-26.4,27.6V344 c0,13.2,13.6,21.2,26.4,21.2h48.8c-33.2,40-82.8,64.4-136,64.4c-98,0-178-79.2-178-177.2S154,74.8,252.4,74.8 c73.6,0,140.4,46.4,166.4,114.8c6.8,18.4,27.6,27.6,46,20.8c18.4-6.8,27.6-27.6,20.8-46C449.2,68.4,355.6,4,252.8,4 C115.6,4,4,115.6,4,252.8s110.8,248.8,248,248.8c68,0,129.2-28,177.2-75.2v32c0,13.2,12.4,22.4,25.6,22.4h23.6 c13.2,0,23.2-9.6,23.2-22.4V344.8V320C501.2,313.6,498.8,306,494.4,301.6z"></path>
                                                                        <path style="fill:#fa1d49;" d="M252.8,23.6c54.4,0,106,19.6,146.4,53.2c0.4,0.4,1.2,0.8,1.6,1.6c0,0,16.8,14.4,28.4,28.4 c16,19.2,28.8,40.8,38,64.8c1.6,4,1.2,8.4-0.4,12c-1.6,4-4.8,6.8-8.8,8.4c-2,0.8-3.6,1.2-5.6,1.2c-6.4,0-12.4-4-14.8-10 C408.8,106.8,334.4,55.6,252.8,55.6C144,55.6,55.2,144.4,55.2,253.2c0,108.8,88.8,197.6,197.6,197.6c58.4,0,113.2-25.6,151.2-70.4 c4.8-6,6-14,2.8-21.2c-3.2-6.8-10.4-11.6-18-11.6h-50.4c-2,0-5.2-2-5.2-4V320c0-1.2,2-4,2.4-4.4s2.8-2.8,4-2.8H478 c1.2,0,1.6,2.4,2.4,2.8c0.4,0.4,0.8,3.2,0.8,4.4v24.8V458c0,2-0.8,2.4-3.2,2.4h-23.6c-2,0-5.6-0.4-5.6-2.4v-32c0-8-4-15.2-11.6-18.4 c-2.4-0.8-4.4-1.6-7.2-1.6c-5.2,0-10,2-14,6c-43.2,44-102.8,69.2-164,69.2C125.6,481.2,22.8,378.4,22.8,252 C23.6,126.4,126.4,23.6,252.8,23.6"></path>
                                                                        <path style="fill:#7ed559;" d="M326.4,298.4l-45.6-45.6l67.6-67.6c4.4-4.4,4.4-12,0-16.4l-11.2-11.2c-4.4-4.4-12-4.4-16.4,0 l-67.6,67.6l-67.6-67.6c-4.4-4.4-12-4.4-16.4,0L158,168.8c-4.4,4.4-4.4,12,0,16.4l67.6,67.6L158,320.4c-4.4,4.4-4.4,12,0,16.4 l11.2,11.2c4.4,4.4,12,4.4,16.4,0l67.6-67.2l62.4,62.4"></path>
                                                                        <path d="M252,505.6C113.2,505.6,0,392,0,252.8C0,113.2,113.6,0,252.8,0c104.4,0,199.6,65.6,236.4,163.2c7.6,20.4-2.4,43.2-22.8,51.2 c-20.4,7.6-43.2-2.4-51.2-22.8c-25.6-67.2-90.8-112-162.4-112c-96,0-174,78-174,174s78,174.4,174,174.4c49.2,0,94.8-19.6,127.2-54.4 h-40c-15.6,0-30.4-14-30.4-29.2v-23.6c0-16,16-27.6,30.4-27.6h138.4c7.2,0,14,2.8,19.2,8s8,12,8,19.6v138 c0,14.4-11.2,30.4-27.2,30.4h-23.6c-14.8,0-29.6-15.2-29.6-30.4v-22.4C375.6,481.6,316,505.6,252,505.6z M252.8,8 C117.6,8,8,118,8,252.8C8,388,117.6,497.6,252,497.6c64.8,0,125.2-25.6,174.4-74c1.2-1.2,2.8-1.6,4.4-0.8c1.6,0.8,2.4,2,2.4,3.6v32 c0,11.2,10.8,22.4,21.6,22.4h23.6c10.8,0,19.2-12,19.2-22.4v-138c0-5.6-2-10.4-5.6-14l0,0c-3.6-3.6-8.4-5.6-13.6-5.6H340 c-10.4,0-22.4,8.4-22.4,19.6V344c0,10.4,11.2,21.2,22.4,21.2h48.8c1.6,0,2.8,0.8,3.6,2.4s0.4,3.2-0.4,4.4c-34,40.8-84.8,64-139.2,64 c-100.4,0-182-81.6-182-182.4c0-100.4,81.6-182,182-182c75.2,0,143.6,47.2,170,117.2c6,16.4,24.4,24.4,40.8,18.4 s24.4-24.4,18.4-40.8C446,71.2,354,8,252.8,8z"></path>
                                                                        <path d="M252.8,486C124.4,486,19.6,381.2,19.6,252.8S124.4,19.6,252.8,19.6l0,0c54,0,106.8,19.2,148.8,54l1.6,1.6 c1.6,1.6,2,4,0.4,5.6s-4,2-5.6,0.4l-1.6-1.2c-40.8-33.6-91.6-52-143.6-52l0,0c-124,0-225.2,101.2-225.2,225.2 s101.2,225.2,225.2,225.2c60,0,118.8-24.8,161.2-68c4.4-4.8,10.4-7.2,16.8-7.2c2.8,0,5.6,0.4,8.4,1.6c8.8,3.6,14,12,14,22v33.6 l0.4,0.8h23.6v-0.4v-140H339.6c-0.4,0-1.2,0-2,0.4c-0.4,0-0.4,0.4-0.8,0.4v21.6c0.4,0.4,0.8,0.4,1.2,0.4h50.4 c9.2,0,17.6,5.2,21.6,13.6s2.4,18.4-3.6,25.2C368,428,311.6,454,252.4,454c-111.2,0-201.6-90.4-201.6-201.6 C50.8,198.8,71.6,148,110,110c38-38,88.8-59.2,142.4-59.2l0,0c83.2,0,158.8,52.4,188.4,130c1.6,4.4,6,7.6,11.2,7.6 c1.6,0,2.8-0.4,4-0.8c2.8-1.2,5.2-3.2,6.4-6.4c1.2-2.8,1.2-6,0.4-9.2c-8.8-23.2-21.2-44.4-37.2-63.6c-1.6-1.6-1.2-4.4,0.4-5.6 c1.6-1.6,4.4-1.2,5.6,0.4c16.4,20,29.6,42,38.8,66c2,4.8,1.6,10.4-0.4,15.2s-6,8.4-11.2,10.4c-2.4,0.8-4.8,1.2-7.2,1.2 c-8,0-15.6-5.2-18.4-12.8C404.8,108.4,332,58.4,252,58.4c-51.6,0-100.4,20-136.8,56.8C78.4,152,58.4,200.4,58.4,252 c0,106.8,86.8,193.6,193.6,193.6c57.2,0,110.8-25.2,148-68.8c4-4.8,4.8-11.2,2.4-16.8c-2.4-5.6-8-9.2-14.4-9.2h-50.4 c-3.6,0-9.2-3.2-9.2-8v-23.6c0-3.2,2.8-4.8,3.6-5.6c2-2,6-2,6.8-2h138.4c2.8,0,4,1.2,5.2,2c1.6,1.6,2,3.6,2,5.2v140 c0,4.8-2.8,8.4-7.2,8.4h-24.8c-4.8,0-8-4.8-8-8.8v-33.6c0-6.8-3.2-12.4-9.2-14.4c-2-0.8-3.6-1.2-5.6-1.2c-4,0-8,1.6-11.2,4.8 C375.6,460.4,314.8,486,252.8,486z"></path>
                                                                        <path d="M177.2,356L177.2,356c-4,0-8-1.6-11.2-4.4l-11.2-11.2c-2.8-2.8-4.4-6.8-4.4-11.2c0-4,1.6-8,4.4-11.2l64.8-64.8l-64.8-64.8 c-2.8-2.8-4.4-6.8-4.4-11.2c0-4,1.6-8,4.4-11.2l11.2-11.2c6-6,16-6,22,0l64.8,64.8l64.8-64.8c6-6,16-6,22,0l11.2,11.2 c2.8,2.8,4.4,6.8,4.4,11.2c0,4-1.6,8-4.4,11.2L286,253.2l42.8,42.8c1.6,1.6,1.6,4,0,5.6s-4,1.6-5.6,0L277.6,256 c-0.8-0.8-1.2-1.6-1.2-2.8s0.4-2,1.2-2.8l67.6-67.6c1.6-1.6,2.4-3.2,2.4-5.6s-0.8-4-2.4-5.6L334,160.4c-2.8-2.8-8-2.8-10.8,0 L255.6,228c-1.6,1.6-4,1.6-5.6,0l-67.6-67.6c-2.8-2.8-8-2.8-10.8,0l-11.2,11.2c-1.6,1.6-2.4,3.2-2.4,5.6s0.8,4,2.4,5.6l67.6,67.6 c0.8,0.8,1.2,1.6,1.2,2.8s-0.4,2-1.2,2.8l-67.6,67.6c-1.6,1.6-2.4,3.2-2.4,5.6c0,2,0.8,4,2.4,5.6l11.2,11.2c1.6,1.6,3.2,2.4,5.6,2.4 l0,0c2,0,4-0.8,5.6-2.4l67.6-67.6c1.6-1.6,4-1.6,5.6,0l60,60c1.6,1.6,1.6,4,0,5.6s-4,1.6-5.6,0l-57.2-57.2l-64.8,64.8 C185.2,354.4,181.6,356,177.2,356z"></path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!-- Tampilkan pagination di bawah tabel -->
                                <div class="pagination-links">
                                    <?php echo $this->pagination->create_links('?' . $this->uri->uri_string()); ?>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Table Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Modal - New Product-->
            <!--end::Modals-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Index-->
</div>
<!--end::Post-->

<!-- Modal Tambah TRX -->
<div class="modal fade" id="trxModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-image: url('<?php echo base_url('assets/media/logos/bri.png'); ?>'); background-size: 100px; background-repeat: no-repeat; background-position: center center;">
                <h5 class="modal-title">Tambah Trx</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahTrx" method="post">
                    <div class="mb-3">
                        <label for="j_trx" class="form-label mb-3">
                            <p class="badge badge-danger">Jenis Transaksi:</p>
                        </label> &nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="j_trx[]" id="tunai" value="1">
                            <label class="form-check-label" for="tunai">Tunai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="j_trx[]" id="bon" value="0">
                            <label class="form-check-label" for="bon">Bon</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Belanja:</label>
                        <select class="form-select" name="kategori" id="kategori">
                            <option value="" disabled selected>Pilih jenis Belanja</option>
                            <?php foreach ($kategori_data as $kategori) : ?>
                                <option value="<?php echo $kategori['nama_kategori']; ?>"><?php echo $kategori['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class=" ">
                        <label for="admin" class="form-label ">
                            <p class="badge badge-info">Admin:</p>
                        </label> &nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="admin[]" id="Cash" value="1">
                            <label class="form-check-label" for="cash">Bayar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="admin[]" id="Transfer" value="0">
                            <label class="form-check-label" for="transfer">Tranfer</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jml_trx" class="form-label">Jumlah:</label>
                        <input type="number" class="form-control" name="jml_trx" id="jml_trx">
                    </div>
                    <div class="mb-3">
                        <label for="jml_byr" class="form-label">Jumlah Bayar:</label>
                        <input type="number" class="form-control" name="jml_byr" id="jml_byr">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- bankModal -->
<div class="modal fade" id="modalBri" tabindex="-1" aria-labelledby="ModalBriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalBriLabel">Input Saldo Bank</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="inputSaldoForm">
                    <div class="mb-3">
                        <label for="sal_in">Jumlah Saldo</label>
                        <input type="number" class="form-control" id="sal_in" name="sal_in" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- payoModal -->
<div class="modal fade" id="modalPayo" tabindex="-1" aria-labelledby="modalPayoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPayoLabel">Input Saldo Payopay</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="inputSaldoPayoForm">
                    <div class="mb-3">
                        <label for="hargaPayo">Harga</label>
                        <input type="number" class="form-control" id="hargaPayo" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="sal_inPayo">Jumlah Saldo</label>
                        <input type="number" class="form-control" id="sal_inPayo" name="sal_in" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- fazzModal -->
<div class="modal fade" id="modalFazz" tabindex="-1" aria-labelledby="saldoFazzModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="saldoFazzModalLabel">Input Saldo Pay Fazz</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="inputSaldoFazzForm">
                    <div class="mb-3">
                        <label for="hargaFazz">Harga</label>
                        <input type="number" class="form-control" id="hargaFazz" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="sal_inFazz">Jumlah Saldo</label>
                        <input type="number" class="form-control" id="sal_inFazz" name="sal_in" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Bayar Transaksi -->
<div class="modal fade" id="bayarModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bayarModalLabel">Bayar Transaksi</h5>
            </div>
            <div class="modal-body">
                <input type="hidden" id="modalIdTransaksi">
                <div class="form-group">
                    <label for="modalJmlByr">Jumlah Bayar:</label>
                    <input type="number" class="form-control" id="modalJmlByr" placeholder="Masukkan jumlah bayar" required>
                </div>
                <p>Jumlah Transaksi : <span id="jmlTrxLabel" style="color: red;"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="prosesPembayaran()">Bayar</button>
            </div>
        </div>
    </div>
</div>
<!-- Script untuk modal dan AJAX -->
<script>
    // Fungsi untuk menampilkan modal
    function showTrxModal() {
        Swal.fire({
            title: 'Pilih Salah Satu',
            html: `
            <div class="radio">
                <label>
                    <input type="radio" name="modalOption" value="trxModal"> Transaksi  <img src="<?php echo base_url('assets/media/logos/bri.png'); ?>" alt="BRI Logo" style="width: 75px;">
                </label>
            </div>
           <div class="divider"></div>
            <div class="modal-options">
                <div class="modal-option">
                    <label>
                        <input type="radio" name="modalOption" value="modalBri"> Isi Saldo <img src="<?php echo base_url('assets/media/logos/bri.png'); ?>" alt="BRI Logo" style="width: 75px;">
                    </label>
                </div>
                <div class="modal-option">
                    <label>
                        <input type="radio" name="modalOption" value="modalPayo"> Isi Saldo <img src="<?php echo base_url('assets/media/logos/payopay.png'); ?>" alt="BRI Logo" style="width: 75px;">
                    </label>
                </div>
                <div class="modal-option">
                    <label>
                        <input type="radio" name="modalOption" value="modalFazz"> Isi Saldo <img src="<?php echo base_url('assets/media/logos/payfazz.png'); ?>" alt="BRI Logo" style="width: 75px;">
                    </label>
                </div>
            </div>
        `,
            // icon: 'info',
            // iconHtml: '<i class="fas fa-info " style="font-size: 24px;"></i>',
            showCancelButton: true,
            confirmButtonText: 'Lanjutkan',
            cancelButtonText: 'Batal',
            preConfirm: () => {
                const selectedOption = $("input[name='modalOption']:checked").val();
                if (!selectedOption) {
                    Swal.showValidationMessage('Pilih salah satu opsi modal.');
                }
            }
        }).then((result) => {
            if (result.isConfirmed) {
                const selectedOption = $("input[name='modalOption']:checked").val();
                if (selectedOption === "trxModal") {
                    showTrxModalFunction();
                } else if (selectedOption === "modalBri") {
                    showModalBriFunction();
                } else if (selectedOption === "modalPayo") {
                    showModalPayoFunction();
                } else if (selectedOption === "modalFazz") {
                    showModalFazzFunction();
                } else {
                    Swal.fire('Pilihan tidak valid.');
                }
            }
        });
    }

    function showTrxModalFunction() {
        var modal = new bootstrap.Modal(document.getElementById("trxModal"));
        $('#trxModal').modal('show');
    }

    function showModalBriFunction() {
        var modal = new bootstrap.Modal(document.getElementById("modalBri"));
        $('#modalBri').modal('show');
    }

    function showModalPayoFunction() {
        var modal = new bootstrap.Modal(document.getElementById("modalPayo"));
        $('#modalPayo').modal('show');
    }

    function showModalFazzFunction() {
        var modal = new bootstrap.Modal(document.getElementById("modalFazz"));
        $('#modalFazz').modal('show');
    }
    // Fungsi untuk menutup modal ketika user mengklik di luar modal
    window.addEventListener("click", function(event) {
        var modal = document.getElementById("trxModal");
        if (event.target === modal) {
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        }
    });
    // Fungsi untuk menutup modal ketika user mengklik di luar modal
    window.addEventListener("click", function(event) {
        var modal = document.getElementById("bayarModal");
        if (event.target === modal) {
            var modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        }
    });

    // Fungsi untuk menampilkan SweetAlert
    function showSweetAlert(status, message) {
        Swal.fire({
            icon: status === 'success' ? 'success' : 'error',
            title: status === 'success' ? 'Berhasil' : 'Terjadi Kesalahan',
            text: message,
            timerProgressBar: true,
            timer: 1500, // Mengatur waktu tampil SweetAlert menjadi 5 detik
            showConfirmButton: false
        });
    }

    const bonCheckbox = document.getElementById('bon');
    const tunaiCheckbox = document.getElementById('tunai');
    const jmlByrInput = document.getElementById('jml_byr'); // Ambil elemen input jml_byr

    bonCheckbox.addEventListener('change', function() {
        if (bonCheckbox.checked) {
            tunaiCheckbox.disabled = true;
            jmlByrInput.style.display = 'none'; // Sembunyikan input jml_byr
        } else {
            tunaiCheckbox.disabled = false;
            jmlByrInput.style.display = 'block'; // Tampilkan kembali input jml_byr
        }
    });

    tunaiCheckbox.addEventListener('change', function() {
        if (tunaiCheckbox.checked) {
            bonCheckbox.disabled = true;
            jmlByrInput.style.display = 'block'; // Tampilkan input jml_byr jika tunaiCheckbox dipilih
        } else {
            bonCheckbox.disabled = false;
        }
    });

    var cashCheckbox = document.getElementById("Cash");
    var transferCheckbox = document.getElementById("Transfer");

    transferCheckbox.addEventListener('change', function() {
        if (transferCheckbox.checked) {
            cashCheckbox.style.display = 'none'; // Sembunyikan checkbox Cash
            cashCheckbox.disabled = true; // Nonaktifkan checkbox Cash
        } else {
            cashCheckbox.style.display = 'block'; // Tampilkan kembali checkbox Cash
            cashCheckbox.disabled = false; // Aktifkan kembali checkbox Cash
        }
    });

    // Fungsi untuk mengirim data ke server menggunakan AJAX
    function tambahTrx() {
        var j_trx = '';
        // Mendapatkan nilai checkbox yang dipilih
        var checkboxes = document.getElementsByName('j_trx[]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                j_trx = checkboxes[i].value; // Ubah menjadi assignment langsung
                break; // Keluar dari loop setelah checkbox yang dipilih ditemukan
            }
        }

        var nama = document.getElementById("nama").value;
        var kategori = document.getElementById("kategori").value;
        var admin = '';
        // Mendapatkan nilai checkbox yang dipilih
        var checkboxes = document.getElementsByName('admin[]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                admin = checkboxes[i].value;
                break;
            }
        }
        var jml_trx = document.getElementById("jml_trx").value;
        var jml_byr = document.getElementById("jml_byr").value;

        // Validasi jml_byr lebih kecil dari jml_trx
        if (parseInt(jml_byr) < parseInt(jml_trx)) {
            showSweetAlert('error', 'Jumlah bayar tidak mencukupi. Anda rugi!');
            return; // Hentikan proses pembayaran jika jml_byr kurang dari jml_trx
        }

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message); // Tampilkan SweetAlert dengan pesan dari server
                if (response.status === 'success') {
                    var modal = document.getElementById("trxModal");
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    // Contoh reload halaman setelah 3 detik (1500 milidetik)
                    setTimeout(() => {
                        // Reload halaman
                        window.location.reload();
                    }, 1500); // Waktu tunda sebelum reload (dalam milidetik)
                }
            }
        };

        // Kirim data "laba" juga dalam permintaan AJAX jika bukan transaksi "bon"
        var params = "j_trx=" + encodeURIComponent(j_trx) + "&nama=" + encodeURIComponent(nama) + "&kategori=" + encodeURIComponent(kategori) + "&admin=" + encodeURIComponent(admin) + "&jml_trx=" + encodeURIComponent(jml_trx) + "&jml_byr=" + encodeURIComponent(jml_byr);

        if (j_trx !== 'bon') {
            // Hanya kirim data "laba" jika bukan transaksi "bon"
            params += "&laba=" + encodeURIComponent(jml_byr - jml_trx);
        }

        xhttp.open("POST", "<?php echo base_url('admin/trx/tambah_trx_bank'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(params);

    }

    // Fungsi untuk mengirim AJAX request ketika form di-submit
    document.getElementById("formTambahTrx").onsubmit = function(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default
        tambahTrx(); // Panggil fungsi untuk mengirim AJAX request
    };

    document.querySelectorAll('.btn-bayar').forEach(button => {
        button.addEventListener('click', function() {
            // Ambil ID transaksi dari atribut data-id pada tombol
            const idTransaksi = this.getAttribute('data-id');

            // Ambil data jml_trx dari kolom tersembunyi
            const jmlTrxElem = document.querySelector(`#jmlTrx_${idTransaksi}`);
            const jmlTrx = jmlTrxElem ? jmlTrxElem.value : '';

            // Ambil data jml_byr dari kolom tersembunyi
            const jmlByrElem = document.querySelector(`#jmlByr_${idTransaksi}`);
            const jmlByr = jmlByrElem ? jmlByrElem.value : '';

            // Tampilkan modal bayar transaksi
            const bayarModal = new bootstrap.Modal(document.getElementById('bayarModal'));
            bayarModal.show();

            // Simpan data ID transaksi ke input hidden di dalam modal
            const modalIdTransaksiElem = document.getElementById('modalIdTransaksi');
            modalIdTransaksiElem.value = idTransaksi;

            // Set nilai input modalJmlByr dengan data jml_byr
            const modalJmlByrElem = document.getElementById('modalJmlByr');
            modalJmlByrElem.value = jmlByr;

            // Tampilkan nilai jml_trx dalam elemen di modal
            const jmlTrxLabelElem = document.getElementById('jmlTrxLabel');
            jmlTrxLabelElem.textContent = `Rp ${jmlTrx}`;
        });
    });
    // Fungsi untuk memproses pembayaran
    function prosesPembayaran() {
        const modalIdTransaksiElem = document.getElementById('modalIdTransaksi');
        const idTransaksi = modalIdTransaksiElem.value;

        const modalJmlByrElem = document.getElementById('modalJmlByr');
        const jmlByr = modalJmlByrElem.value;

        // Check if "Jumlah Bayar" is empty
        if (jmlByr.trim() === '') {
            showSweetAlert('error', 'Jumlah bayar harus diisi.');
            return; // Hentikan proses pembayaran jika "Jumlah Bayar" kosong
        }

        // Lakukan validasi jmlByr lebih besar atau sama dengan jmlTrx
        const jmlTrxElem = document.querySelector(`#jmlTrx_${idTransaksi}`);
        const jmlTrx = jmlTrxElem ? jmlTrxElem.value : '';
        if (parseInt(jmlByr) < parseInt(jmlTrx)) {
            showSweetAlert('error', 'Jumlah bayar tidak mencukupi. Anda rugi!');
            return; // Hentikan proses pembayaran jika jml_byr kurang dari jml_trx
        }

        // Jika validasi berhasil, lanjutkan dengan pembayaran melalui AJAX
        $.ajax({
            url: '<?php echo base_url("admin/trx/bayar_trx_bank"); ?>',
            type: 'POST',
            data: {
                id: idTransaksi,
                jml_byr: jmlByr
            },
            dataType: 'json'
        }).done(function(response) {
            showSweetAlert(response.status, response.message);
            if (response.status === 'success') {
                // Update j_trx after successful payment
                if (jmlTrxElem) {
                    jmlTrxElem.value = jmlByr;
                }

                setTimeout(function() {
                    window.location.reload();
                }, 1500);
            }
        }).fail(function(xhr, status, error) {
            console.log('Error: ', error);
            showSweetAlert('error', 'Terjadi kesalahan saat melakukan pembayaran');
        });

        // Sembunyikan modal setelah pembayaran selesai
        const bayarModal = new bootstrap.Modal(document.getElementById('bayarModal'));
        bayarModal.hide();
    }

    function konfirmasiBatalkan(button) {
        const id = button.getAttribute('data-id');

        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin membatalkan transaksi ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                batalkanTransaksi(id);
            }
        });
    }

    function batalkanTransaksi(id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url("admin/trx/batalkan_trx_bank"); ?>",
            data: {
                idTrx: id
            },
            success: function(response) {
                console.log('Data berhasil dihapus:', response);
                Swal.fire({
                    icon: 'success',
                    title: 'Refund Berhasil, Saldo Telah dikembalikan!',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    customClass: {
                        timer: 'swal2-progress-blue',
                        progressBar: 'swal2-progress-blue'
                    },
                });
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            },
        });
    }

    function konfirmasiHapus(button) {
        const id = button.getAttribute('data-id');

        // Tampilkan SweetAlert dengan pesan konfirmasi
        Swal.fire({
            title: 'Konfirmasi Hapus',
            text: 'Apakah Anda yakin ingin menghapus item ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            timerProgressBar: true, // Enable timer progress bar
            timer: 1500, // Set the duration of the timer in milliseconds (e.g., 1500ms = 5 seconds)
            customClass: {
                timer: 'swal2-progress-blue', // Nama class untuk mengatur warna progres bar
                progressBar: 'swal2-progress-blue'
            },
            willOpen: () => {
                // Start the timer when the alert is opened
                Swal.showLoading();
            },
            didClose: () => {
                // Clear the timer when the alert is closed
                Swal.hideLoading();
            }
        }).then((result) => {
            if (result.isConfirmed) {
                prosesHapus(id);
            }
        });
    }

    function prosesHapus(id) {
        // Kirim permintaan AJAX ke server untuk menghapus data
        $.ajax({
            type: 'POST', // atau 'GET' tergantung implementasi server Anda
            url: '<?php echo base_url("admin/trx/hapus_trx_bank"); ?>', // Ganti dengan URL yang sesuai untuk menghapus data
            data: {
                id: id
            }, // Data yang akan dikirim ke server, jika diperlukan
            success: function(response) {
                // Tanggapan dari server setelah data terhapus
                // Di sini Anda dapat memperbarui tampilan halaman atau melakukan tindakan lain setelah penghapusan berhasil
                console.log('Data berhasil dihapus:', response);

                // Tampilkan SweetAlert success setelah data berhasil dihapus
                Swal.fire({
                    icon: 'success',
                    title: 'Data Berhasil Dihapus!',
                    showConfirmButton: false,
                    timer: 1500, // SweetAlert akan hilang setelah 1.5 detik (1500 ms)
                    timerProgressBar: true,
                    customClass: {
                        timer: 'swal2-progress-blue', // Nama class untuk mengatur warna progres bar
                        progressBar: 'swal2-progress-blue'
                    },
                });

                // Muat ulang halaman setelah SweetAlert success ditampilkan
                setTimeout(() => {
                    window.location.reload(); // Memuat ulang halaman
                }, 1500); // Setelah 1.5 detik (1500 ms)
            },
            error: function(xhr, status, error) {
                // Tanggapan dari server jika terjadi kesalahan
                console.error('Gagal menghapus data:', error);

                // Tampilkan SweetAlert error jika penghapusan gagal
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi Kesalahan',
                    text: 'Gagal menghapus data!',
                    showConfirmButton: false,
                    timer: 2000, // SweetAlert akan hilang setelah 2 detik (2000 ms)
                    timerProgressBar: true,
                    customClass: {
                        timer: 'swal2-progress-blue', // Nama class untuk mengatur warna progres bar
                        progressBar: 'swal2-progress-blue'
                    },
                });
            }
        });
    }

    // saldo bank ----------------------------------------------------------------------

    // Fungsi untuk mengirim data saldo ke server menggunakan AJAX
    function tambahSaldo() {
        var sal_in = document.getElementById("sal_in").value;
        // Validasi input saldo
        if (sal_in.trim() === '') {
            showSweetAlert('error', 'Jumlah saldo harus diisi.');
            return;
        }

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message);
                if (response.status === 'success') {
                    var ModalBri = document.getElementById("ModalBri");
                    var modalInstance = bootstrap.Modal.getInstance(modalBri);
                    modalInstance.hide();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                }
            }
        };

        var params = "sal_in=" + encodeURIComponent(sal_in);

        xhttp.open("POST", "<?php echo base_url('admin/Bank/add_saldo'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(params);
    }
    // Fungsi untuk mengirim AJAX request ketika form input saldo di-submit
    document.getElementById("inputSaldoForm").onsubmit = function(event) {
        event.preventDefault();
        tambahSaldo();
    };
    //------------------------------------------------------------------------------

    // saldo payo ----------------------------------------------------------------------

    // Fungsi untuk mengirim data saldo ke server menggunakan AJAX
    function tambahSaldoPayo() {
        var harga = document.getElementById("hargaPayo").value;
        var sal_in = document.getElementById("sal_inPayo").value;

        // Validasi input saldo
        if (sal_in.trim() === '') {
            showSweetAlert('error', 'Jumlah saldo harus diisi.');
            return;
        }

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message);
                if (response.status === 'success') {
                    var modalPayo = document.getElementById("modalPayo");
                    var modalInstance = bootstrap.Modal.getInstance(modalPayo);
                    modalInstance.hide();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                }
            }
        };

        var params = "hargaPayo=" + encodeURIComponent(harga) + "&sal_inPayo=" + encodeURIComponent(sal_in);

        xhttp.open("POST", "<?php echo base_url('admin/Payopay/add_saldo'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(params);
    }
    // Fungsi untuk mengirim AJAX request ketika form input saldo di-submit
    document.getElementById("inputSaldoPayoForm").onsubmit = function(event) {
        event.preventDefault();
        tambahSaldoPayo();
    };

    //------------------------------------------------------------------------------

    // saldo fazz ----------------------------------------------------------------------

    // Fungsi untuk mengirim data saldo ke server menggunakan AJAX
    function tambahSaldoFazz() {
        var harga = document.getElementById("hargaFazz").value;
        var sal_in = document.getElementById("sal_inFazz").value;

        // Validasi input saldo
        if (sal_in.trim() === '') {
            showSweetAlert('error', 'Jumlah saldo harus diisi.');
            return;
        }

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // console.log(this.responseText);
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message);
                if (response.status === 'success') {
                    var modalFazz = document.getElementById("modalFazz");
                    var modalInstance = bootstrap.Modal.getInstance(modalFazz);
                    modalInstance.hide();
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                }
            }
        };

        var params = "hargaFazz=" + encodeURIComponent(harga) + "&sal_inFazz=" + encodeURIComponent(sal_in);

        xhttp.open("POST", "<?php echo base_url('admin/Payfazz/add_saldo'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(params);
    }

    // Fungsi untuk mengirim AJAX request ketika form input saldo di-submit
    document.getElementById("inputSaldoFazzForm").onsubmit = function(event) {
        event.preventDefault();
        tambahSaldoFazz();
    };
    //------------------------------------------------------------------------------
</script>

<!--begin::Post-->