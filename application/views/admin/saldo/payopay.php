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
                        <div class="card-header border-0 pt-5 pb-3">
                            <!--begin::Card title-->
                            <!--begin::Title--><?php if (!empty($saldo_payopay)) : ?>
                                <h3 class="text-blue fw-bolder fs-2qx me-5">Saldo PayoPay Saat ini = Rp<?php echo $total_saldo_payopay; ?>
                                    <?php else : ?>Saldo PayoPay anda Tidak ada</h3>
                            <?php endif; ?>
                            <!--end::Card title-->
                        </div>
                        <!--end::Header-->
                        <hr>
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <!-- Button untuk membuka modal tambah saldo -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#saldoModal">
                                <svg width="50px" height="50px" viewBox="0 0 25.00 25.00" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#d9ecac" stroke-width="1.75">
                                        <path d="M12 2.96997C10.0222 2.96997 8.08881 3.55646 6.44432 4.65527C4.79983 5.75409 3.51809 7.31581 2.76121 9.14307C2.00434 10.9703 1.8063 12.9811 2.19215 14.9209C2.578 16.8607 3.53041 18.6425 4.92894 20.041C6.32746 21.4395 8.10931 22.392 10.0491 22.7778C11.9889 23.1637 13.9996 22.9656 15.8269 22.2087C17.6541 21.4519 19.2159 20.1701 20.3147 18.5256C21.4135 16.8811 22 14.9478 22 12.97" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.7003 17.1099V18.21C12.7003 18.3877 12.6296 18.5582 12.504 18.6838C12.3783 18.8095 12.2079 18.8799 12.0302 18.8799C11.8525 18.8799 11.6821 18.8095 11.5565 18.6838C11.4308 18.5582 11.3602 18.3877 11.3602 18.21V17.0801C10.9165 17.0072 10.4917 16.8468 10.1106 16.6082C9.72943 16.3695 9.39958 16.0573 9.14023 15.6899C9.04577 15.57 8.99311 15.4226 8.99023 15.27C8.99014 15.1834 9.00763 15.0975 9.04166 15.0178C9.07568 14.9382 9.12553 14.8662 9.18817 14.8064C9.25082 14.7466 9.32495 14.7 9.4061 14.6697C9.48724 14.6393 9.57371 14.6258 9.66025 14.6299C9.74612 14.6294 9.83102 14.648 9.90884 14.6843C9.98667 14.7206 10.0554 14.774 10.1102 14.8401C10.4301 15.258 10.8643 15.574 11.3602 15.75V13.21C10.0302 12.69 9.36023 11.9099 9.36023 10.8999C9.38027 10.3592 9.5928 9.84343 9.9595 9.44556C10.3262 9.04769 10.8229 8.79397 11.3602 8.72998V7.62988C11.3602 7.45219 11.4308 7.2819 11.5565 7.15625C11.6821 7.0306 11.8525 6.95996 12.0302 6.95996C12.2079 6.95996 12.3783 7.0306 12.504 7.15625C12.6296 7.2819 12.7003 7.45219 12.7003 7.62988V8.71997C13.0724 8.77828 13.4289 8.91103 13.7485 9.11035C14.0681 9.30967 14.3442 9.57137 14.5602 9.87988C14.6555 9.99235 14.7117 10.1329 14.7202 10.28C14.7229 10.3657 14.7084 10.451 14.6774 10.531C14.6464 10.611 14.5997 10.684 14.54 10.7456C14.4803 10.8072 14.4088 10.856 14.3299 10.8894C14.2509 10.9228 14.166 10.94 14.0802 10.9399C13.9906 10.9394 13.9022 10.9196 13.8211 10.8816C13.74 10.8436 13.668 10.7884 13.6102 10.72C13.3718 10.4221 13.0575 10.1942 12.7003 10.0601V12.3101L12.9503 12.4099C14.2203 12.9099 15.0103 13.63 15.0103 14.77C14.9954 15.3808 14.7481 15.9629 14.3189 16.3977C13.8897 16.8325 13.3108 17.0871 12.7003 17.1099ZM11.3602 11.73V10.0999C11.1988 10.1584 11.0599 10.2662 10.963 10.408C10.8662 10.5497 10.8162 10.7183 10.8203 10.8899C10.8186 11.0673 10.8688 11.2414 10.9647 11.3906C11.0607 11.5399 11.1981 11.6579 11.3602 11.73ZM13.5502 14.8C13.5502 14.32 13.2203 14.03 12.7003 13.8V15.8C12.9387 15.7639 13.1561 15.6427 13.3123 15.459C13.4685 15.2752 13.553 15.0412 13.5502 14.8Z" fill="#e89542"></path>
                                        <path d="M21.9998 2.91992L16.3398 8.57992" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20.8698 8.5798H16.3398V4.0498" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12 2.96997C10.0222 2.96997 8.08881 3.55646 6.44432 4.65527C4.79983 5.75409 3.51809 7.31581 2.76121 9.14307C2.00434 10.9703 1.8063 12.9811 2.19215 14.9209C2.578 16.8607 3.53041 18.6425 4.92894 20.041C6.32746 21.4395 8.10931 22.392 10.0491 22.7778C11.9889 23.1637 13.9996 22.9656 15.8269 22.2087C17.6541 21.4519 19.2159 20.1701 20.3147 18.5256C21.4135 16.8811 22 14.9478 22 12.97" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.7003 17.1099V18.21C12.7003 18.3877 12.6296 18.5582 12.504 18.6838C12.3783 18.8095 12.2079 18.8799 12.0302 18.8799C11.8525 18.8799 11.6821 18.8095 11.5565 18.6838C11.4308 18.5582 11.3602 18.3877 11.3602 18.21V17.0801C10.9165 17.0072 10.4917 16.8468 10.1106 16.6082C9.72943 16.3695 9.39958 16.0573 9.14023 15.6899C9.04577 15.57 8.99311 15.4226 8.99023 15.27C8.99014 15.1834 9.00763 15.0975 9.04166 15.0178C9.07568 14.9382 9.12553 14.8662 9.18817 14.8064C9.25082 14.7466 9.32495 14.7 9.4061 14.6697C9.48724 14.6393 9.57371 14.6258 9.66025 14.6299C9.74612 14.6294 9.83102 14.648 9.90884 14.6843C9.98667 14.7206 10.0554 14.774 10.1102 14.8401C10.4301 15.258 10.8643 15.574 11.3602 15.75V13.21C10.0302 12.69 9.36023 11.9099 9.36023 10.8999C9.38027 10.3592 9.5928 9.84343 9.9595 9.44556C10.3262 9.04769 10.8229 8.79397 11.3602 8.72998V7.62988C11.3602 7.45219 11.4308 7.2819 11.5565 7.15625C11.6821 7.0306 11.8525 6.95996 12.0302 6.95996C12.2079 6.95996 12.3783 7.0306 12.504 7.15625C12.6296 7.2819 12.7003 7.45219 12.7003 7.62988V8.71997C13.0724 8.77828 13.4289 8.91103 13.7485 9.11035C14.0681 9.30967 14.3442 9.57137 14.5602 9.87988C14.6555 9.99235 14.7117 10.1329 14.7202 10.28C14.7229 10.3657 14.7084 10.451 14.6774 10.531C14.6464 10.611 14.5997 10.684 14.54 10.7456C14.4803 10.8072 14.4088 10.856 14.3299 10.8894C14.2509 10.9228 14.166 10.94 14.0802 10.9399C13.9906 10.9394 13.9022 10.9196 13.8211 10.8816C13.74 10.8436 13.668 10.7884 13.6102 10.72C13.3718 10.4221 13.0575 10.1942 12.7003 10.0601V12.3101L12.9503 12.4099C14.2203 12.9099 15.0103 13.63 15.0103 14.77C14.9954 15.3808 14.7481 15.9629 14.3189 16.3977C13.8897 16.8325 13.3108 17.0871 12.7003 17.1099ZM11.3602 11.73V10.0999C11.1988 10.1584 11.0599 10.2662 10.963 10.408C10.8662 10.5497 10.8162 10.7183 10.8203 10.8899C10.8186 11.0673 10.8688 11.2414 10.9647 11.3906C11.0607 11.5399 11.1981 11.6579 11.3602 11.73ZM13.5502 14.8C13.5502 14.32 13.2203 14.03 12.7003 13.8V15.8C12.9387 15.7639 13.1561 15.6427 13.3123 15.459C13.4685 15.2752 13.553 15.0412 13.5502 14.8Z" fill="#e89542"></path>
                                        <path d="M21.9998 2.91992L16.3398 8.57992" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M20.8698 8.5798H16.3398V4.0498" stroke="#e89542" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                                Tambah Saldo
                            </button>&emsp;&emsp;&emsp;
                            <button type="button" class="btn btn-primary" onclick="showUpdateModal(<?php echo $total_saldo_payopay; ?>)">
                                <svg width="50px" height="50px" viewBox="0 0 25.00 25.00" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#b3e6e6" stroke-width="1.4499999999999997">
                                        <path d="M12 22.9199C17.5228 22.9199 22 18.4428 22 12.9199C22 7.39707 17.5228 2.91992 12 2.91992C6.47715 2.91992 2 7.39707 2 12.9199C2 18.4428 6.47715 22.9199 12 22.9199Z" stroke="#ed955a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.7002 17.1099V18.21C12.7002 18.3877 12.6296 18.5582 12.504 18.6838C12.3783 18.8095 12.2079 18.8799 12.0302 18.8799C11.8525 18.8799 11.6821 18.8095 11.5565 18.6838C11.4308 18.5582 11.3602 18.3877 11.3602 18.21V17.0801C10.9165 17.0072 10.4917 16.8468 10.1106 16.6082C9.72943 16.3695 9.39958 16.0573 9.14023 15.6899C9.04577 15.57 8.99311 15.4226 8.99023 15.27C8.99014 15.1834 9.00762 15.0975 9.04164 15.0178C9.07566 14.9382 9.12551 14.8662 9.18816 14.8064C9.2508 14.7466 9.32494 14.7 9.40608 14.6697C9.48723 14.6393 9.5737 14.6258 9.66023 14.6299C9.74611 14.6294 9.83102 14.648 9.90884 14.6843C9.98667 14.7206 10.0554 14.774 10.1102 14.8401C10.4301 15.258 10.8643 15.574 11.3602 15.75V13.21C10.0302 12.69 9.36023 11.9099 9.36023 10.8999C9.38027 10.3592 9.59279 9.84343 9.95949 9.44556C10.3262 9.04769 10.8229 8.79397 11.3602 8.72998V7.62988C11.3602 7.45219 11.4308 7.2819 11.5565 7.15625C11.6821 7.0306 11.8525 6.95996 12.0302 6.95996C12.2079 6.95996 12.3783 7.0306 12.504 7.15625C12.6296 7.2819 12.7002 7.45219 12.7002 7.62988V8.71997C13.0723 8.77828 13.4289 8.91103 13.7485 9.11035C14.0681 9.30967 14.3442 9.57137 14.5602 9.87988C14.6555 9.99235 14.7117 10.1329 14.7202 10.28C14.7229 10.3657 14.7083 10.451 14.6774 10.531C14.6464 10.611 14.5997 10.684 14.54 10.7456C14.4803 10.8072 14.4088 10.856 14.3298 10.8894C14.2509 10.9228 14.166 10.94 14.0802 10.9399C13.9906 10.9394 13.9022 10.9196 13.8211 10.8816C13.74 10.8436 13.668 10.7884 13.6102 10.72C13.3718 10.4221 13.0574 10.1942 12.7002 10.0601V12.3101L12.9502 12.4099C14.2202 12.9099 15.0102 13.63 15.0102 14.77C14.9954 15.3808 14.7481 15.9629 14.3189 16.3977C13.8897 16.8325 13.3108 17.0871 12.7002 17.1099ZM11.3602 11.73V10.0999C11.1988 10.1584 11.0599 10.2662 10.963 10.408C10.8662 10.5497 10.8162 10.7183 10.8202 10.8899C10.8185 11.0673 10.8688 11.2414 10.9647 11.3906C11.0607 11.5399 11.1981 11.6579 11.3602 11.73ZM13.5502 14.8C13.5502 14.32 13.2202 14.03 12.7002 13.8V15.8C12.9387 15.7639 13.156 15.6427 13.3122 15.459C13.4684 15.2752 13.553 15.0412 13.5502 14.8Z" fill="#ed955a"></path>
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12 22.9199C17.5228 22.9199 22 18.4428 22 12.9199C22 7.39707 17.5228 2.91992 12 2.91992C6.47715 2.91992 2 7.39707 2 12.9199C2 18.4428 6.47715 22.9199 12 22.9199Z" stroke="#ed955a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12.7002 17.1099V18.21C12.7002 18.3877 12.6296 18.5582 12.504 18.6838C12.3783 18.8095 12.2079 18.8799 12.0302 18.8799C11.8525 18.8799 11.6821 18.8095 11.5565 18.6838C11.4308 18.5582 11.3602 18.3877 11.3602 18.21V17.0801C10.9165 17.0072 10.4917 16.8468 10.1106 16.6082C9.72943 16.3695 9.39958 16.0573 9.14023 15.6899C9.04577 15.57 8.99311 15.4226 8.99023 15.27C8.99014 15.1834 9.00762 15.0975 9.04164 15.0178C9.07566 14.9382 9.12551 14.8662 9.18816 14.8064C9.2508 14.7466 9.32494 14.7 9.40608 14.6697C9.48723 14.6393 9.5737 14.6258 9.66023 14.6299C9.74611 14.6294 9.83102 14.648 9.90884 14.6843C9.98667 14.7206 10.0554 14.774 10.1102 14.8401C10.4301 15.258 10.8643 15.574 11.3602 15.75V13.21C10.0302 12.69 9.36023 11.9099 9.36023 10.8999C9.38027 10.3592 9.59279 9.84343 9.95949 9.44556C10.3262 9.04769 10.8229 8.79397 11.3602 8.72998V7.62988C11.3602 7.45219 11.4308 7.2819 11.5565 7.15625C11.6821 7.0306 11.8525 6.95996 12.0302 6.95996C12.2079 6.95996 12.3783 7.0306 12.504 7.15625C12.6296 7.2819 12.7002 7.45219 12.7002 7.62988V8.71997C13.0723 8.77828 13.4289 8.91103 13.7485 9.11035C14.0681 9.30967 14.3442 9.57137 14.5602 9.87988C14.6555 9.99235 14.7117 10.1329 14.7202 10.28C14.7229 10.3657 14.7083 10.451 14.6774 10.531C14.6464 10.611 14.5997 10.684 14.54 10.7456C14.4803 10.8072 14.4088 10.856 14.3298 10.8894C14.2509 10.9228 14.166 10.94 14.0802 10.9399C13.9906 10.9394 13.9022 10.9196 13.8211 10.8816C13.74 10.8436 13.668 10.7884 13.6102 10.72C13.3718 10.4221 13.0574 10.1942 12.7002 10.0601V12.3101L12.9502 12.4099C14.2202 12.9099 15.0102 13.63 15.0102 14.77C14.9954 15.3808 14.7481 15.9629 14.3189 16.3977C13.8897 16.8325 13.3108 17.0871 12.7002 17.1099ZM11.3602 11.73V10.0999C11.1988 10.1584 11.0599 10.2662 10.963 10.408C10.8662 10.5497 10.8162 10.7183 10.8202 10.8899C10.8185 11.0673 10.8688 11.2414 10.9647 11.3906C11.0607 11.5399 11.1981 11.6579 11.3602 11.73ZM13.5502 14.8C13.5502 14.32 13.2202 14.03 12.7002 13.8V15.8C12.9387 15.7639 13.156 15.6427 13.3122 15.459C13.4684 15.2752 13.553 15.0412 13.5502 14.8Z" fill="#ed955a"></path>
                                    </g>
                                </svg>
                                Update Saldo
                            </button>
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
<!--begin::Post-->

<!-- Modal Tambah Saldo -->
<div class="modal" id="saldoModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Saldo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahSaldo" method="post">
                    <div class="mb-3">
                        <label for="sal_in" class="form-label">Saldo In:</label>
                        <input type="number" class="form-control" name="sal_in" id="sal_in" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Saldo</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Update Saldo -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Saldo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Saldo Saat Ini: Rp<span id="saldoLamaLabel">0</span></p>
                <input type="number" id="saldoBaru" class="form-control" placeholder="Masukkan saldo baru">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="updateSaldo()">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- Script untuk modal dan AJAX -->
<script>
    // Fungsi untuk menampilkan modal
    function showSaldoModal() {
        var modal = new bootstrap.Modal(document.getElementById("saldoModal"));
        modal.show();
    }

    // Fungsi untuk menutup modal ketika user mengklik di luar modal
    window.addEventListener("click", function(event) {
        var modal = document.getElementById("saldoModal");
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
            timer: 5000, // Mengatur waktu tampil SweetAlert menjadi 5 detik
            showConfirmButton: false
        });
    }

    // Fungsi untuk mengirim data ke server menggunakan AJAX
    function tambahSaldo() {
        var sal_in = document.getElementById("sal_in").value;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message); // Tampilkan SweetAlert dengan pesan dari server
                if (response.status === 'success') {
                    var modal = document.getElementById("saldoModal");
                    var modalInstance = bootstrap.Modal.getInstance(modal);
                    modalInstance.hide();
                    // Contoh reload halaman setelah 5 detik (5000 milidetik)
                    setTimeout(() => {
                        // Reload halaman
                        window.location.reload();
                    }, 3000); // Waktu tunda sebelum reload (dalam milidetik)
                }
            }
        };

        xhttp.open("POST", "<?php echo base_url('admin/payopay/tambah_saldo'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("sal_in=" + sal_in);
    }

    // Fungsi untuk mengirim AJAX request ketika form di-submit
    document.getElementById("formTambahSaldo").onsubmit = function(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default
        tambahSaldo(); // Panggil fungsi untuk mengirim AJAX request
    };

    // Fungsi untuk menampilkan SweetAlert untuk update saldo
    function showUpdateSweetAlert(saldoLama) {
        Swal.fire({
            title: 'Update Saldo',
            html: '<div style="width: 300px;">' +
                '<p style="text-align: center; margin-bottom: 10px;">Saldo Saat Ini: Rp' + saldoLama.toFixed(2) + '</p>' +
                '<button type="button" class="btn btn-primary" onclick="showUpdateModal(' + saldoLama + ')">Update Saldo</button>' +
                '</div>',
            showCancelButton: false,
            showConfirmButton: false
        });
    }

    // Fungsi untuk menampilkan modal update dan mengisi nilai saldo lama ke dalam label
    function showUpdateModal(saldoLama) {
        document.getElementById("saldoLamaLabel").innerText = saldoLama.toFixed(2);
        var modal = new bootstrap.Modal(document.getElementById("updateModal"));
        modal.show();
    }

    // Fungsi untuk melakukan AJAX update
    function updateSaldo() {
        var saldoBaru = document.getElementById("saldoBaru").value;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message); // Tampilkan SweetAlert dengan pesan dari server
                if (response.status === 'success') {
                    // Contoh reload halaman setelah 3 detik (3000 milidetik)
                    setTimeout(() => {
                        // Reload halaman
                        window.location.reload();
                    }, 3000); // Waktu tunda sebelum reload (dalam milidetik)
                }
            }
        };

        xhttp.open("POST", "<?php echo base_url('admin/payopay/update_saldo_payopay'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("saldo_baru=" + saldoBaru);
    }

    // Fungsi untuk menampilkan SweetAlert
    function showSweetAlert(status, message) {
        Swal.fire({
            icon: status === 'success' ? 'success' : 'error',
            title: status === 'success' ? 'Berhasil' : 'Terjadi Kesalahan',
            text: message,
            timer: 5000, // Mengatur waktu tampil SweetAlert menjadi 5 detik
            showConfirmButton: false
        });
    }
</script>