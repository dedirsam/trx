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
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title fw-bolder text-gray-800 fs-2">Cari Transaksi</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header border-0 pt-5 pb-3 text-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-1">
                                            <button class="btn btn-success w-100" onclick="reloadPage()" id="reload">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-select" id="id_saldo">
                                                <option aria-readonly="true" value="Pilih">-Pilih-</option>
                                                <option value="1">Cash</option>
                                                <option value="2">Bank</option>
                                                <option value="3">Payfazz</option>
                                                <option value="4">Payopay</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Tgl Awal" id="startDate" />
                                                <input class="form-control" placeholder="Tgl Akhir" id="endDate" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" placeholder="Laba ... ?" id="laba" data-laba="0" readonly />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end::Header-->
                        <hr>
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table id="example" class="table align-middle table-row-bordered table-row-dashed gy-5" style="width:100%; display: none;">
                                    <!--begin::Table body-->
                                    <tbody>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
                                            <th class="min-w-25px">No</th> <!-- Kolom nomor -->
                                            <th class="min-w-125px">Nama</th>
                                            <th class="min-w-75px">Jenis Trx</th>
                                            <th class="min-w-75px">Bayar</th>
                                            <th class="min-w-125px">Belanja</th>
                                            <th class="min-w-75px">Harga</th>
                                            <th class="min-w-75px">Bayar</th>
                                            <th class="min-w-75px">Admin</th>
                                            <th class="min-w-75px">Status</th>
                                            <th class="text-center pe-2 min-w-70px">Date</th>
                                            <th class="text-center pe-2 min-w-25px">act</th>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#startDate");
        flatpickr("#endDate");
        // Tambahkan event listener pada tombol reload
        document.getElementById("reload").addEventListener("click", reloadPage);
        // Tambahkan event listener pada select
        var idSaldoSelect = document.getElementById("id_saldo");
        idSaldoSelect.addEventListener("change", function() {
            filterByDate(); // Panggil filterByDate untuk mengupdate data
        });
        // Tambahkan event listener pada input tanggal
        document.getElementById("startDate").addEventListener("input", filterByDate);
        document.getElementById("endDate").addEventListener("input", filterByDate);
        // Tambahkan event listener pada select id_saldo
        filterByDate();

        function reloadPage() {
            document.getElementById("id_saldo").value = '';
            document.getElementById("startDate").value = '';
            document.getElementById("endDate").value = '';
            filterByDate(); // Panggil filterByDate untuk mengupdate data sesuai input kosong
        }
    });
</script>
<script>
    function filterByDate() {
        var id_saldo = document.getElementById("id_saldo").value; /* atur nilai id_saldo sesuai dengan kebutuhan */ ;
        var startDate = document.getElementById("startDate").value;
        var endDate = document.getElementById("endDate").value;

        if (startDate === '' || endDate === '') {
            return;
        }
        var requestData = {
            startDate: startDate,
            endDate: endDate,
        };

        var id_saldo = document.getElementById("id_saldo").value;

        // Jika id_saldo tidak kosong dan bukan "Pilih", tambahkan ke data permintaan
        if (id_saldo !== '' && id_saldo !== 'Pilih') {
            requestData.id_saldo = id_saldo;
        }

        $.ajax({
            url: "<?php echo base_url('admin/laporan/lap_data'); ?>",
            type: "POST",
            data: {
                id_saldo: id_saldo,
                startDate: startDate,
                endDate: endDate,
            },
            success: function(response) {
                // console.log(response); // Tampilkan respons di konsol
                var responseData = JSON.parse(response);

                // Hitung total laba dari responseData
                var totalLaba = 0;
                responseData.forEach(function(trx) {
                    totalLaba += parseInt(trx.laba);
                });
                // Ubah total laba menjadi format rupiah
                var formattedTotalLaba = formatRupiah(totalLaba.toString(), 'Rp ');

                // Tampilkan total laba di input laba
                var labaInput = document.getElementById("laba");
                labaInput.value = formattedTotalLaba;

                var tbody = document.querySelector("#example tbody");
                tbody.innerHTML = "";
                if (responseData.length === 0) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Tidak Ditemukan',
                        text: 'Data tidak ditemukan...',
                    });
                } else {
                    responseData.forEach(function(trx, index) {
                        var jenisTrx = ''; // Variabel untuk menyimpan jenis transaksi

                        switch (trx.id_saldo) {
                            case '1':
                                jenisTrx = 'Cash';
                                break;
                            case '2':
                                jenisTrx = 'Bank';
                                break;
                            case '3':
                                jenisTrx = 'Payfazz';
                                break;
                            case '4':
                                jenisTrx = 'Payopay';
                                break;
                            default:
                                jenisTrx = 'Lainnya';
                                break;
                        }
                        var newRow = ` <tr>
                <td class="p-0">${index + 1}</td>
                <td class="p-0">
                    <div class="d-flex align-items-center">
                    <div class="ps-3 text-gray-800 fw-boldest fs-5 text-hover-primary mb-1"> ${trx.nama} 
                    </div>
                    </div>
                </td>
                <td class="p-0">${jenisTrx}</td>
                <td class="p-0">${trx.j_trx === '0' ? 'Bon' : 'Tunai'}</td>
                <td class="p-0">${trx.kategori}</td>
                <td class="p-0">Rp ${trx.jml_trx}</td>
                <td class="p-0">Rp ${trx.jml_byr}</td>
                <td class="p-0">Rp ${trx.laba}</td>
                <td class="p-0">
                    ${trx.jml_byr === '0' ? '<span class=" badge badge-danger" data-id="' + trx.id + '" data-jml-trx="' + trx.jml_trx + '" data-bs-toggle="modal" data-bs-target="#bayarModal">Belum Bayar</span>' : '<span class="badge badge-success">Lunas</span>'}
                    <input type="hidden" id="jmlTrx_${trx.id}" value="${trx.jml_trx}">
                </td>
                <td class="p-0">${trx.created_at}</td>
                <td class="p-0">
                    <span class="svg-icon svg-icon-1" data-id="${trx.id}" onclick="konfirmasiHapus(this)">
                        <!-- Tambahkan ikon trash menggunakan elemen <i> dengan kelas "fa" (Font Awesome) -->
                        <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.995 511.995" xml:space="preserve" fill="#000000">
                            <!-- ... Isi SVG ikon trash ... -->
                        </svg>
                    </span>
                </td>
            </tr> `;
                        tbody.insertAdjacentHTML("beforeend", newRow);
                    });
                }
                $("#example").show();
                $(".pagination-links").show();
            }
        });
    }

    // Fungsi untuk mengubah angka menjadi format rupiah
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : 'Laba : ' + (rupiah ? 'Rp ' + rupiah : '');
    }

    function reloadPage() {
        document.getElementById("id_saldo").value = '';
        document.getElementById("startDate").value = '';
        document.getElementById("endDate").value = '';

        // Mengosongkan hasil tabel
        var tbody = document.querySelector("#example tbody");
        tbody.innerHTML = '';

        filterByDate(); // Panggil filterByDate untuk mengupdate data sesuai input kosong
    }
</script>
<!-- Modal Bayar Transaksi -->

<!-- Script untuk modal dan AJAX -->

<!--begin::Post-->