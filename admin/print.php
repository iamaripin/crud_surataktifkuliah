<?php
require('fpdf/fpdf.php');
include "../koneksi.php";
#ambil data di tabel   

if($_GET['id']){
$id=$_GET['id'];

$sql=mysqli_query($koneksi, "select * from surat_mhs where id='$id'");//order by
$surat=mysqli_fetch_array($sql);
//data surat

$nim=$surat['nim'];
$nama=$surat['nama'];
$tanggal=$surat['tanggal'];
$status=$surat['status'];
$file=$surat['file'];
$krs=$surat['krs'];
    
//deklarasi FPDF
class PDF extends FPDF {
	//inisialisasi Header DOkumen PDF
	function Header() {
		//load image logo
		//$this->Image('logo.png',10,10,20,25);
		//setting format font
		$this->SetFont('Arial','B',19);
		//header text
		$this->Cell(22,1.5,' (STMIK) HANG TUAH PEKANBARU ',0,0,'C');
		$this->Ln(0.6);
		$this->SetFont('Arial','I',8.9);
		$this->Cell(22,1.5,' Alamat : Jl. Raya Dukuhwaluh Purwokerto 53182 P.O. Box 202 (0281) 636751, 630463, 634424 Pesawat 130 Fax. 637239',0,0,'C');
		$this->Ln(0.2);
		$this->SetFont('Arial','B',12);
		$this->Cell(19,1.5,'________________________________________________________________________________________',0,0,'C');
		$this->Ln(0.1);
		$this->SetFont('Arial','B',12);
		$this->Cell(19,1.5,'________________________________________________________________________________________',0,0,'C');
		$this->SetFont('Arial','B',14);
		$this->Ln(0.6);
		$this->Cell(0,2.5,' SURAT KETERANGAN AKTIF KULIAH ',0,0,'C');
		$this->Ln(0.5);
		$this->Cell(0,2.5,'Nomor : 08/Prodi-TI/STMIK-HTP/I/2020/241',0,0,'C');
		//ganti baris
		//$this->Ln();
		//setting format font
    }}

//deklarasi format kertas 
$pdf=new PDF('P','cm','A4');
$pdf->Open();
$pdf->AliasNbPages();
$pdf->AddPage();
//setting margin kertas
$pdf->SetMargins(1.5,1,1); 
$pdf->SetFont('Arial','',11);
 

//membuat kop tabel
$x=$pdf->GetY(); 
$pdf->SetY($x+1);

// menuliskan datanya
$pdf->Ln(2);
$pdf->Cell(6,0.5,'Ketua STMIK Hang Tuah Pekanbaru, dengan ini ',0,0,'L');
$pdf->Ln(0.7);
$pdf->Cell(6,0.5,'menerangkan bahwa :',0,0,'L');
$pdf->Ln(1.1);
$pdf->Cell(6,0.5,'Nama',0,0,'L');
$pdf->Cell(6,0.5,': '.$surat['nama'],0,1, 'L');
$pdf->Cell(6,0.5,'NIM',0,0,'L');
$pdf->Cell(6,0.5,': '.$surat['nim'],0,1, 'L');
$pdf->Cell(6,0.5,'Tanggal ',0,0,'L');
$pdf->Cell(6,0.5,': '.$surat['tanggal'],0,1, 'L');
$pdf->Cell(6,0.5,'Status',0,0,'L');
$pdf->Cell(6,0.5,': '.$surat['status'],0,1, 'L');
$pdf->Ln(1.3);
$pdf->Cell(6,0.5,'Adalah benar mahasiswa STMIK Hang Tuah Pekanbaru Program Studi Teknik Informatika',0,0,'J'); 
$pdf->Ln();  
$thn=date("Y");
$thn_sblmnya=date('Y',strtotime('-1 Year',strtotime($thn)));
$pdf->Cell(6,0.5,'dan aktif kuliah pada semester IV (Tiga) pada Tahun Akademik '.$thn_sblmnya.'/'.$thn,0,0,'J'); 
$pdf->Ln(1);
$pdf->Cell(6,0.5,'Demikian surat pernyataan ini dibuat dengan sesungguhnya untuk di gunakan',0,0,'J');
$pdf->Ln(0.7);
$pdf->Cell(6,0.5,'sebagaimana mestinya.',0,0,'L');
$pdf->SetFont('Arial','B',12);
$pdf->Ln(3);
$pdf->Cell(19,0.5,'Pekanbaru,  '.$surat['tanggal'],0,0,'R');
$pdf->Ln(1);
$pdf->Cell(19.5,0.5,'Ketua Prodi TeknikInformatika,',0,0,'R');
$pdf->SetFont('Arial','B',13.8);
$pdf->Ln(3);
$pdf->Cell(19,0.5,'YudaIrawan,S.Kom,M.Ti',0,0,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Ln(0.5);
$pdf->Cell(19,0.5,'No. Reg 1031230514008',0,0,'R');

//Menjadikan dalam bentuk PDF
$pdf->Output('surat.pdf','I');
} else echo "NIM harus terisi";
?>
