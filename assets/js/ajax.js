<script>
    // Fungsi untuk menampilkan modal
    function showTrxModal() {
        var modal = new bootstrap.Modal(document.getElementById("trxModal"));
        modal.show();
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
            timer: 3000, // Mengatur waktu tampil SweetAlert menjadi 5 detik
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
                    // Contoh reload halaman setelah 3 detik (3000 milidetik)
                    setTimeout(() => {
                        // Reload halaman
                        window.location.reload();
                    }, 3000); // Waktu tunda sebelum reload (dalam milidetik)
                }
            }
        };

        // Kirim data "laba" juga dalam permintaan AJAX jika bukan transaksi "bon"
        var params = "j_trx=" + encodeURIComponent(j_trx) + "&nama=" + encodeURIComponent(nama) + "&kategori=" + encodeURIComponent(kategori) + "&jml_trx=" + encodeURIComponent(jml_trx) + "&jml_byr=" + encodeURIComponent(jml_byr);

        if (j_trx !== 'bon') {
            // Hanya kirim data "laba" jika bukan transaksi "bon"
            params += "&laba=" + encodeURIComponent(jml_byr - jml_trx);
        }

        xhttp.open("POST", "<?php echo base_url('admin/trx/tambah_trx'); ?>", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(params);

        // xhttp.open("POST", "<?php echo base_url('admin/trx/tambah_trx'); ?>", true);
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // // Perhatikan tanda "=" pada parameter "jml_byr" dan tambahkan "j_trx"
        // xhttp.send("j_trx=" + encodeURIComponent(j_trx) + "&nama=" + encodeURIComponent(nama) + "&kategori=" + encodeURIComponent(kategori) + "&jml_trx=" + encodeURIComponent(jml_trx) + "&jml_byr=" + encodeURIComponent(jml_byr));
    }

    // Fungsi untuk mengirim AJAX request ketika form di-submit
    document.getElementById("formTambahTrx").onsubmit = function(event) {
        event.preventDefault(); // Mencegah form untuk submit secara default
        tambahTrx(); // Panggil fungsi untuk mengirim AJAX request
    };

    // // Event listener untuk tombol Bayar
    // document.querySelectorAll('.btn-bayar').forEach(button => {
    //     button.addEventListener('click', function() {
    //         // Ambil ID transaksi dari atribut data-id pada tombol
    //         const idTransaksi = this.getAttribute('data-id');

    //         // Ambil data jml_trx dari kolom tersembunyi
    //         const jmlTrxElem = document.querySelector(`#jmlTrx_${idTransaksi}`);
    //         const jmlTrx = jmlTrxElem ? jmlTrxElem.value : '';

    //         // Ambil data jml_byr dari kolom tersembunyi
    //         const jmlByrElem = document.querySelector(`#jmlByr_${idTransaksi}`);
    //         const jmlByr = jmlByrElem ? jmlByrElem.value : '';

    //         // Tampilkan modal bayar transaksi
    //         const bayarModal = new bootstrap.Modal(document.getElementById('bayarModal'));
    //         bayarModal.show();

    //         // Simpan data ID transaksi ke input hidden di dalam modal
    //         const modalIdTransaksiElem = document.getElementById('modalIdTransaksi');
    //         modalIdTransaksiElem.value = idTransaksi;

    //         // Set nilai input modalJmlByr dengan data jml_byr
    //         const modalJmlByrElem = document.getElementById('modalJmlByr');
    //         modalJmlByrElem.value = jmlByr;
    //     });
    // });
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
            url: '<?php echo base_url("admin/trx/bayar_transaksi"); ?>',
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


                // // Calculate laba and update the table (make sure to adjust the actual column names accordingly)
                // const laba = parseInt(jmlByr) - parseInt(jmlTrx);
                // $.ajax({
                //     url: '<?php echo base_url("admin/trx/update_laba"); ?>',
                //     type: 'POST',
                //     data: {
                //         id: idTransaksi,
                //         laba: laba
                //     },
                //     dataType: 'json'
                // }).done(function(updateResponse) {
                //     console.log('Laba update status: ', updateResponse);
                // }).fail(function(xhr, status, error) {
                //     console.log('Error updating laba: ', error);
                // });


                setTimeout(function() {
                    window.location.reload();
                }, 3000);
            }
        }).fail(function(xhr, status, error) {
            console.log('Error: ', error);
            showSweetAlert('error', 'Terjadi kesalahan saat melakukan pembayaran');
        });

        // Sembunyikan modal setelah pembayaran selesai
        const bayarModal = new bootstrap.Modal(document.getElementById('bayarModal'));
        bayarModal.hide();
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
            timer: 3000, // Set the duration of the timer in milliseconds (e.g., 3000ms = 5 seconds)
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
            url: '<?php echo base_url("admin/trx/hapusTrx"); ?>', // Ganti dengan URL yang sesuai untuk menghapus data
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
</script>
