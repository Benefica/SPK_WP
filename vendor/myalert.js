//ALERT HAPUS
$('.hapus-user').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Ini ?',
        text: 'Data Akun ini akan dihapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href;
        }
    });
});

//ALERT DELETE ALTERNATIF
$('.hapus-alternatif').on('click', function (e) {
    e.preventDefault();
    const href1 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Ini ?',
        text: 'Data Alternatif / Inspeksi ini akan dihapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href1;
        }
    });
});

//Alert Clear All Data Alternatif
$('.hapus-all-alternatif').on('click', function (e) {
    e.preventDefault();
    const href2 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Seluruh Data Alternatif ?',
        text: 'Seluruh Data Alternatif / Inspeksi akan dihapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href2;
        }
    });
});

//Alert Hapus Data Mobil
$('.hapus-mobil').on('click', function (e) {
    e.preventDefault();
    const href3 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Mobil Ini ?',
        text: 'Data Mobil akan terhapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href3;
        }
    });
});

$('.hapus-mesin').on('click', function (e) {
    e.preventDefault();
    const href4 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Inspeksi Mesin ini ?',
        text: 'Data Inspeksi Mesin akan terhapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href4;
        }
    });
});

$('.hapus-body').on('click', function (e) {
    e.preventDefault();
    const href5 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Inspeksi Body Ini ?',
        text: 'Data Inspeksi Body akan terhapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href5;
        }
    });
});

$('.hapus-interior').on('click', function (e) {
    e.preventDefault();
    const href6 = $(this).attr('href');

    Swal.fire({
        title: 'Hapus Data Inspeksi Interior Ini ?',
        text: 'Data Inspeksi Interior akan terhapus dari sistem.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('deleteStatus', 'success');
            document.location.href = href6;
        }
    });
});
// Cek status penghapusan saat halaman dimuat
$(document).ready(function () {
    const deleteStatus = localStorage.getItem('deleteStatus');
    if (deleteStatus === 'success') {
        Swal.fire('Data Terhapus', 'Data berhasil dihapus dari sistem.', 'success');
        localStorage.removeItem('deleteStatus');
    }
});
