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
        $this->Cell(-280, 20, 'Jalan Gading Serpong Boulevard No. 3, Curug Sangereng, ', 0, 0, 'C');
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

function jml_kriteria(){
    include 'configdb.php';
    $kriteria = $mysqli->query("select * from kriteria");
    return $kriteria->num_rows;
}

function jml_alternatif(){
    include 'configdb.php';
    $alternatif = $mysqli->query("select * from alternatif");
    return $alternatif->num_rows;
}

function get_kepentingan(){
    include 'configdb.php';
    $kepentingan = $mysqli->query("select * from kriteria");
    if(!$kepentingan){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $kepentingan->fetch_assoc()) {
        @$kep[$i] = $row["kepentingan"];
        $i++;
    }
    return $kep;
}

function get_costbenefit(){
    include 'configdb.php';
    $costbenefit = $mysqli->query("select * from kriteria");
    if(!$costbenefit){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $costbenefit->fetch_assoc()) {
        @$cb[$i] = $row["cost_benefit"];
        $i++;
    }
    return $cb;
}

function get_kd_name(){
    include 'configdb.php';
    $kode = $mysqli->query("select * from alternatif");
    if(!$kode){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $kode->fetch_assoc()) {
        @$kd[$i] = $row["kode"];
        $i++;
    }
    return $kd;
}


function get_alt_name(){
    include 'configdb.php';
    $alternatif = $mysqli->query("select * from alternatif");
    if(!$alternatif){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $alternatif->fetch_assoc()) {
        @$alt[$i] = $row["alternatif"];
        $i++;
    }
    return $alt;
}

function get_alt_nopol(){
    include 'configdb.php';
    $nopol = $mysqli->query("select * from alternatif");
    if(!$nopol){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $nopol->fetch_assoc()) {
        @$alt[$i] = $row["nopol"];
        $i++;
    }
    return $alt;
}

function get_alt_harga(){
    include 'configdb.php';
    $k1 = $mysqli->query("select * from alternatif");
    if(!$k1){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $k1->fetch_assoc()) {
        @$alt[$i] = $row["k1"];
        $i++;
    }
    return $alt;
}

function get_alt_tahun(){
    include 'configdb.php';
    $k2 = $mysqli->query("select * from alternatif");
    if(!$k2){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $k2->fetch_assoc()) {
        @$alt[$i] = $row["k2"];
        $i++;
    }
    return $alt;
}

function get_kd_alternatif(){
    include 'configdb.php';
    $kode = $mysqli->query("SELECT * FROM alternatif");
    if(!$kode){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $kode->fetch_assoc()){
        @$kd_alt[$i] = $row["kode"];
        $i++;
    }
    return $kd_alt;

}
function get_alternatif(){
    include 'configdb.php';
    $alternatif = $mysqli->query("select * from alternatif");
    if(!$alternatif){
        echo $mysqli->connect_errno." - ".$mysqli->connect_error;
        exit();
    }
    $i=0;
    while ($row = $alternatif->fetch_assoc()) {
        @$alt[$i][0] = $row["k1"];
        @$alt[$i][1] = $row["k2"];
        @$alt[$i][2] = $row["k3"];
        @$alt[$i][3] = $row["k4"];
        @$alt[$i][4] = $row["k5"];
        $i++;
    }
    return $alt;
}

function cmp($a, $b){
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}


function print_ar(array $x){	//just for print array
    echo "<pre>";
    print_r($x);
    echo "</pre></br>";
}
// Membuat objek PDF
$pdf = new PDF('L');

// Menambahkan halaman baru
$pdf->AddPage();

// Isi surat
$count = 0; // Variabel untuk menghitung jumlah baris
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'DATA HASIL PERHITUNGAN INSPEKSI MOBIL BEKAS', 0, 1, 'C');
$pdf->LN(5);

$pdf->SetFont('Arial', '', 10);
// Your existing code for calculation result table
$alt = get_alternatif();
$alt_name = get_alt_name();
$kd_alt = get_kd_alternatif();
$kd_name = get_kd_name();
$nopol = get_alt_nopol();
$tahun = get_alt_tahun();
$harga = get_alt_harga();
end($alt_name); $arl2 = key($alt_name)+1; //new
$kep = get_kepentingan();
$cb = get_costbenefit();
$k = jml_kriteria();
$a = jml_alternatif();
$tkep = 0;
$tbkep = 0;

for ($i = 0; $i < $k; $i++) {
    $tkep = $tkep + $kep[$i];
}
for ($i = 0; $i < $k; $i++) {
    $bkep[$i] = ($kep[$i] / $tkep);
    $tbkep = $tbkep + $bkep[$i];
}
for ($i = 0; $i < $k; $i++) {
    if ($cb[$i] == "cost") {
        $pangkat[$i] = (-1) * $bkep[$i];
    } else {
        $pangkat[$i] = $bkep[$i];
    }
}
for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $k; $j++) {
        $s[$i][$j] = pow(($alt[$i][$j]), $pangkat[$j]);
    }
    $ss[$i] = $s[$i][0] * $s[$i][1] * $s[$i][2] * $s[$i][3] * $s[$i][4];
}

// Calculation logic and table generation
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(32, 10, 'Kode', 1, 0, 'C');
$pdf->Cell(70, 10, 'Nama Mobil', 1, 0, 'C');
$pdf->Cell(40, 10, 'Nomor Polisi', 1, 0, 'C');
$pdf->Cell(55, 10, 'Harga', 1, 0, 'C');
$pdf->Cell(40, 10, 'Tahun', 1, 0, 'C');
$pdf->Cell(40, 10, 'V', 1, 1, 'C');

$total = 0;
for($i=0;$i<$a;$i++){
    $total = $total + $ss[$i];
}
for($i=0;$i<$a;$i++){
    $v[$i] = round($ss[$i]/$total,6);
}
array_multisort($v, SORT_DESC, $alt_name, $kd_name, $nopol, $harga, $tahun);
for($i=0;$i<$a;$i++){
    $pdf->SetFont('Arial', '', 11);
    $pdf->Cell(32, 10, $kd_name[$i], 1, 0, 'C');
    $pdf->Cell(70, 10, $alt_name[$i], 1, 0, 'C');
    $pdf->Cell(40, 10, $nopol[$i], 1, 0, 'C');
    $pdf->Cell(55, 10, 'Rp ' . number_format($harga[$i], 0, ',', '.'), 1, 0, 'C');
    $pdf->Cell(40, 10, $tahun[$i], 1, 0, 'C');
    $pdf->Cell(40, 10, $v[$i], 1, 1, 'C');

    $count++;

    // Cek apakah jumlah baris sudah mencapai batas (10 baris)
    if ($count >= 8) {
        $count = 0; // Reset jumlah baris

        // Tambah halaman baru
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(0, 10, 'DATA HASIL PERHITUNGAN INSPEKSI MOBIL BEKAS', 0, 1, 'C');
        $pdf->LN(5);

        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(32, 10, 'Kode', 1, 0, 'C');
        $pdf->Cell(70, 10, 'Nama Mobil', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Nomor Polisi', 1, 0, 'C');
        $pdf->Cell(55, 10, 'Harga', 1, 0, 'C');
        $pdf->Cell(40, 10, 'Tahun', 1, 0, 'C');
        $pdf->Cell(40, 10, 'V', 1, 1, 'C');
    }
}

// Panggil fungsi addSignatureColumn untuk menampilkan kolom tanda tangan
addSignatureColumn($pdf, 'Zulfikar Mada Suksena');

// Men-generate nomor halaman otomatis
$pdf->AliasNbPages();

// Menampilkan surat dalam bentuk PDF
$pdf->Output('Hasil_Perhitungan_Inspeksi.pdf','I');

?>
