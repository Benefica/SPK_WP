<?php 
require('vendor/fpdf.php');
include('configdb.php');
// Fungsi untuk header surat
class PDF extends FPDF{
    function Header()
    {
        // Logo surat (ganti dengan path/logo yang sesuai)
        $this->Image('img/ERBAMA.png', 10, 5, 25);
        
        // Judul surat
        $this->SetFont('Arial', 'B', 18);
        $this->Cell(280, 5, 'PT. ERBAMA KONSULTINDO RAYA', 0, 0, 'C');
        
        $this->SetFont('Arial', '', 10);
        $this->Cell(-280, 20, 'Jalan Gading Serpong Boulevard No. 3, Curug Sangereng,', 0, 0, 'C');
        $this->Cell(0, 30, 'Kecamatan Kelapa Dua, Kabupaten Tangerang, Banten 15810',0,0,'C');

        
        // Garis atas judul surat
        $this->Line(10, 32, 287, 32);
        
        // Garis bawah judul surat
        $this->Line(10, 33, 287, 33);
        
        // Memberikan jarak antara judul surat dengan isi surat
        $this->Ln(30);
    }
    
    // Fungsi untuk footer surat
    function Footer()
    {
        // Posisi di bawah
        $this->SetY(-15);
        
        // Teks keterangan footer
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Halaman ' . $this->PageNo() . ' dari {nb}', 0, 0, 'C');
    }
}

function addSignatureColumn($pdf, $nama) {
    // Mendapatkan tanggal sekarang dalam format Indonesia
    $tanggal = date_create()->format('Y-m-d');

    // Mendapatkan nama bulan dalam Bahasa Indonesia
    $namaBulan = array(
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );

    // Menentukan bulan dalam Bahasa Indonesia
    $bulanIndo = $namaBulan[intval(date_format(date_create($tanggal), 'm')) - 1];

    // Menentukan tanggal dan tahun
    $tanggalIndo = date_format(date_create($tanggal), 'd');
    $tahunIndo = date_format(date_create($tanggal), 'Y');

     // Posisi di bawah
     
    // Tampilkan kolom tanda tangan
    $pdf->SetY(134);
    $pdf->Ln(5);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, 'Jakarta, ' . $tanggalIndo . ' ' . $bulanIndo . ' ' . $tahunIndo, 0, 1, 'L');
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(0, 0, 'PT ERBAMA KONSULTINDO RAYA', 0, 1, 'L');
    $pdf->SetFont('Arial', 'U', 10);
    $pdf->Cell(0, 40, $nama, 0, 1, 'L');
}

// Membuat objek PDF
$pdf = new PDF('L');

// Menambahkan halaman baru
$pdf->AddPage();


$alternatif = $mysqli->query("SELECT * FROM alternatif ORDER BY id ASC");
if(!$alternatif){
    echo $mysqli->connect_errno." - ".$mysqli->connect_error;
    exit();
}

// Isi surat
$count = 0; // Variabel untuk menghitung jumlah baris
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'DATA INSPEKSI MOBIL BEKAS', 0, 1, 'C');
$pdf->LN(5);

// Menampilkan data dalam tabel
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 10, 'Kode', 1, 0, 'C');
$pdf->Cell(60, 10, 'Nama Mobil', 1, 0, 'C');
$pdf->Cell(35, 10, 'Nopol', 1, 0, 'C');
$pdf->Cell(47, 10, 'Harga', 1, 0, 'C');
$pdf->Cell(25, 10, 'Tahun', 1, 0, 'C');
$pdf->Cell(30, 10, 'Kondisi Mesin', 1, 0, 'C');
$pdf->Cell(30, 10, 'Kondisi Body', 1, 0, 'C');
$pdf->Cell(30, 10, 'Kondisi Interior', 1, 1, 'C');

while ($row = $alternatif->fetch_assoc()) {
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(20, 10, $row['kode'], 1, 0, 'C');
    $pdf->Cell(60, 10, $row['alternatif'], 1, 0, 'C');
    $pdf->Cell(35, 10, $row['nopol'], 1, 0, 'C');
    $pdf->Cell(47, 10, 'Rp ' . number_format($row['k1'], 0, ',', '.'), 1, 0, 'C');
    $pdf->Cell(25, 10, $row['k2'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['k3'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['k4'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['k5'], 1, 1, 'C');

    $count++; // Increment jumlah baris
    
    // Cek apakah jumlah baris sudah mencapai batas (10 baris)
    if ($count >= 8) {
        $count = 0; // Reset jumlah baris

        
        // Tambah halaman baru
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'DATA INSPEKSI MOBIL BEKAS', 0, 1, 'C');
        $pdf->LN(5);
        // Menampilkan data dalam tabel
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 10, 'Kode', 1, 0, 'C');
        $pdf->Cell(60, 10, 'Nama Mobil', 1, 0, 'C');
        $pdf->Cell(35, 10, 'Nopol', 1, 0, 'C');
        $pdf->Cell(47, 10, 'Harga', 1, 0, 'C');
        $pdf->Cell(25, 10, 'Tahun', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Kondisi Mesin', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Kondisi Body', 1, 0, 'C');
        $pdf->Cell(30, 10, 'Kondisi Interior', 1, 1, 'C');
                // Isi sura
        
    }
}

// Panggil fungsi addSignatureColumn untuk menampilkan kolom tanda tangan
addSignatureColumn($pdf, 'Zulfikar Mada Suksena');
// Men-generate nomor halaman otomatis
$pdf->AliasNbPages();

// Menampilkan surat dalam bentuk PDF
$pdf->Output('Data_Inspeksi.pdf','I');
?>
