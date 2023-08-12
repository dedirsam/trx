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
                            <h3 class="card-title fw-bolder text-gray-800 fs-2">List Kategori </h3>
                            <h3 class="card-title fw-bolder text-center text-gray-800 fs-2"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategoriModal">
                                    Tambah Data
                                </button></h3>
                            <!--end::Card title-->
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
                                            <th class="min-w-25px">No</th>
                                            <th class="min-w-20px">ID</th>
                                            <th class="min-w-200px">Jenis</th>
                                            <th class="text-center pe-2 min-w-25px">Aksi</th>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <?php foreach ($kategori as $index => $kat) : ?>
                                            <tr>
                                                <!--begin::Author=-->
                                                <td class=" p-0"><?php echo $index + 1; ?></td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <p class="badge badge-success"><?php echo $kat['id']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <p class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1"><?php echo $kat['nama_kategori']; ?></p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ps-3">
                                                            <span class="svg-icon svg-icon-1" style="cursor: pointer;" onclick="hapusKategori(<?php echo $kat['id']; ?>)"> <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.995 511.995" xml:space="preserve" fill="#000000">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <circle style="fill:#ff8c8c;" cx="255.997" cy="255.997" r="255.997"></circle>
                                                                        <path style="fill:#66a84a;" d="M508.732,296.708C491.015,407.536,402.203,494.57,290.516,509.65L178.254,397.387l53.551-257.032 l6.364-14.907l17.487-5.103l25.112,5.618l64.387,64.387l28.61-28.61L508.673,296.65L508.732,296.708z"></path>
                                                                        <path style="fill:#E84F4F;" d="M366.599,180.433L351.29,374.798c-1.032,12.958-10.033,23.737-22.189,23.737H184.79 c-12.213,0-21.099-10.722-22.189-23.737l-16.913-194.365L366.599,180.433L366.599,180.433z"></path>
                                                                        <path style="fill:#fc2912;" d="M366.599,180.433l-15.251,194.365c-1.032,12.958-10.033,23.737-22.189,23.737H255.77V180.433h110.885 H366.599z"></path>
                                                                        <path style="fill:#F7F7F8;" d="M160.366,146.777h64.502c0-0.573-0.057-1.09-0.057-1.663l0,0c0-17.373,14.047-31.648,31.19-31.648 l0,0c17.144,0,31.19,14.219,31.19,31.648l0,0c0,0.573,0,1.09-0.057,1.663h64.502c12.843,0,24.482,10.779,23.392,23.737 l-0.975,11.868H138.005l-1.09-11.868c-1.204-13.015,10.549-23.737,23.392-23.737H160.366z M238.57,146.777h34.916 c0.057-0.516,0.057-1.09,0.057-1.663l0,0c0-9.804-7.912-17.774-17.545-17.774l0,0c-9.632,0-17.545,8.027-17.545,17.774l0,0 c0,0.573,0,1.09,0.057,1.663H238.57z"></path>
                                                                        <path style="fill:#E6E6E6;" d="M255.713,113.523h0.286l0,0c17.144,0,31.19,14.219,31.19,31.648l0,0c0,0.573,0,1.09-0.057,1.663 h64.502c12.843,0,24.482,10.779,23.392,23.737l-0.975,11.868H255.713v-35.605h17.774c0.057-0.516,0.057-1.09,0.057-1.663l0,0 c0-9.804-7.912-17.774-17.545-17.774l0,0h-0.286V113.58L255.713,113.523L255.713,113.523z"></path>
                                                                        <path style="fill:#F7F7F8;" d="M189.147,213.171L189.147,213.171c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529 c0-7.339,6.02-13.359,13.359-13.359L189.147,213.171L189.147,213.171z M323.082,213.171L323.082,213.171 c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529c0-7.339,6.02-13.359,13.359-13.359L323.082,213.171L323.082,213.171z M278.418,213.171L278.418,213.171c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529c0-7.339,6.02-13.359,13.359-13.359 L278.418,213.171L278.418,213.171z M233.754,213.171L233.754,213.171c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529 c0-7.339,6.02-13.359,13.359-13.359L233.754,213.171L233.754,213.171z"></path>
                                                                        <path style="fill:#E3E3E3;" d="M323.082,213.171L323.082,213.171c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529 c0-7.339,6.02-13.359,13.359-13.359L323.082,213.171L323.082,213.171z M278.418,213.171L278.418,213.171 c7.339,0,13.359,6.02,13.359,13.359v145.745h-26.66V226.529c0-7.339,6.02-13.359,13.359-13.359L278.418,213.171L278.418,213.171z"></path>
                                                                    </g>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
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
<!-- Modal Tambah Saldo -->
<div class="modal" id="kategoriModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formTambahKategori" method="post">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Jenis:</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk modal dan AJAX -->
<script>
    // Fungsi untuk menampilkan modal
    function showKategoriModal() {
        var modal = new bootstrap.Modal(document.getElementById("kategoriModal"));
        modal.show();
    }

    // Fungsi untuk menutup modal ketika user mengklik di luar modal
    window.addEventListener("click", function(event) {
        var modal = document.getElementById("kategoriModal");
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
    function tambahKategori() {
        var nama_kategori = document.getElementById("nama_kategori").value;
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = JSON.parse(this.responseText);
                showSweetAlert(response.status, response.message); // Tampilkan SweetAlert dengan pesan dari server
                if (response.status === 'success') {
                    var modal = document.getElementById("kategoriModal");
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

        xhttp.open("POST", "<?php echo base_url('admin/kategori/tambah_kategori'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("nama_kategori=" + nama_kategori);

    }

    // Fungsi untuk mengirim AJAX request ketika form di-submit
    document.getElementById("formTambahKategori").onsubmit = function(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default
        tambahKategori(); // Panggil fungsi untuk mengirim AJAX request
    };

    // Fungsi untuk mengirim data ke server menggunakan AJAX untuk hapus kategori
    function hapusKategori(id_kategori) {
        // Tampilkan SweetAlert sebagai konfirmasi
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Anda yakin ingin menghapus kategori ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var response = JSON.parse(this.responseText);
                        showSweetAlert(response.status, response.message); // Tampilkan SweetAlert dengan pesan dari server
                        if (response.status === 'success') {
                            // Jika berhasil dihapus, reload halaman setelah 3 detik (3000 milidetik)
                            setTimeout(() => {
                                // Reload halaman
                                window.location.reload();
                            }, 3000); // Waktu tunda sebelum reload (dalam milidetik)
                        }
                    }
                };

                xhttp.open("POST", "<?php echo base_url('admin/kategori/hapus_kategori'); ?>", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                // Mengirim data ID kategori dalam satu kali xhttp.send()
                xhttp.send("id=" + encodeURIComponent(id_kategori));
            }
        });
    }
</script>
<!--begin::Post-->