<?php

class MahlukHidup {

    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}

class Manusia extends Mahlukhidup{

    public function biodata($umur, $jeniskelamin)
    {
        echo "
        MANUSIA <br>
        # $this->nama <br>
        - $umur Tahun<br>
        - $jeniskelamin <br>
        - Makanan Kesukaan <br>";
        
    }    
    public function makananKesukaan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}
class Hewan extends Mahlukhidup{

    public function biodataHewan($umur, $jenishewan ,$jeniskelamin)
    {
        echo "
        HEWAN <br>
        # $this->nama <br>
        - $umur Bulan <br>
        - $jenishewan <br>
        - $jeniskelamin <br>
        - Makanan Kesukaan Hewan <br>";
        
    }    
    public function makananKesukaanHewan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}

class BendaMati{
    public $namabenda;
  
    function __construct($namabenda) {
      $this->namabenda = $namabenda;
    }
    public function ambilNamabenda()
    {
      return $this->namabenda;
    }
}

class Kendaraan extends BendaMati{
    public function jenisKendaraan($merek, $tipe ,$jenis)
    {
        echo "
        Kendaraan <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Kendaraan <br>";
        
    }    
    public function banyakKendaraan($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah
        <br>
        ";
    }    
}
class Lainnya extends BendaMati{
    public function jenisbenda($merek, $tipe ,$jenis)
    {
        echo "
        Benda Lainnya <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Benda <br>";
        
    }    
    public function banyakbenda($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah unit
        <br>
        ";
    }    
}


echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Usman");
$new->biodata(19, "Laki Laki");
$new->makananKesukaan("Pempek");
$new->makananKesukaan("Siomay");
$new->makananKesukaan("Ayam Goyeng");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Kucing");
$hewan->biodataHewan(19, "Mamalia" ,"Laki Laki");
$hewan->makananKesukaanHewan("Ikan Asin");
$hewan->makananKesukaanHewan("Wishkas");
$hewan->makananKesukaanHewan("Ayam Goyeng");


echo "<br><br><br>++CLASS PARENT KEDUA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$benda1 = New Kendaraan("Mobil");
$benda1->jenisKendaraan("HONDA", "Matic", "SPORT");
$benda1->banyakKendaraan("Merah", 10);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Biru", 17);
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$benda1 = New Kendaraan("Kursi");
$benda1->jenisKendaraan("INOAC", "Kursi kantor", "tipe kursi singel");
$benda1->banyakKendaraan("Kuning", 90);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Hitam", 177);







 <?php

class MahlukHidup {

    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}

class Manusia extends Mahlukhidup{

    public function biodata($umur, $jeniskelamin)
    {
        echo "
        MANUSIA <br>
        # $this->nama <br>
        - $umur Tahun<br>
        - $jeniskelamin <br>
        - Makanan Kesukaan <br>";
        
    }    
    public function makananKesukaan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}
class Hewan extends Mahlukhidup{

    public function biodataHewan($umur, $jenishewan ,$jeniskelamin)
    {
        echo "
        HEWAN <br>
        # $this->nama <br>
        - $umur Bulan <br>
        - $jenishewan <br>
        - $jeniskelamin <br>
        - Makanan Kesukaan Hewan <br>";
        
    }    
    public function makananKesukaanHewan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}

class BendaMati{
    public $namabenda;
  
    function __construct($namabenda) {
      $this->namabenda = $namabenda;
    }
    public function ambilNamabenda()
    {
      return $this->namabenda;
    }
}

class Kendaraan extends BendaMati{
    public function jenisKendaraan($merek, $tipe ,$jenis)
    {
        echo "
        Kendaraan <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Kendaraan <br>";
        
    }    
    public function banyakKendaraan($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah
        <br>
        ";
    }    
}
class Lainnya extends BendaMati{
    public function jenisbenda($merek, $tipe ,$jenis)
    {
        echo "
        Benda Lainnya <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Benda <br>";
        
    }    
    public function banyakbenda($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah unit
        <br>
        ";
    }    
}


echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Usman");
$new->biodata(19, "Laki Laki");
$new->makananKesukaan("Pempek");
$new->makananKesukaan("Siomay");
$new->makananKesukaan("Ayam Goyeng");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Kucing");
$hewan->biodataHewan(19, "Mamalia" ,"Laki Laki");
$hewan->makananKesukaanHewan("Ikan Asin");
$hewan->makananKesukaanHewan("Wishkas");
$hewan->makananKesukaanHewan("Ayam Goyeng");


echo "<br><br><br>++CLASS PARENT KEDUA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$benda1 = New Kendaraan("Mobil");
$benda1->jenisKendaraan("HONDA", "Matic", "SPORT");
$benda1->banyakKendaraan("Merah", 10);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Biru", 17);
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$benda1 = New Kendaraan("Kursi");
$benda1->jenisKendaraan("INOAC", "Kursi kantor", "tipe kursi singel");
$benda1->banyakKendaraan("Kuning", 90);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Hitam", 177);







 <?php

class MahlukHidup {

    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}

class Manusia extends Mahlukhidup{

    public function biodata($umur, $jeniskelamin)
    {
        echo "
        MANUSIA <br>
        # $this->nama <br>
        - $umur Tahun<br>
        - $jeniskelamin <br>
        - Makanan Kesukaan <br>";
        
    }    
    public function makananKesukaan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}
class Hewan extends Mahlukhidup{

    public function biodataHewan($umur, $jenishewan ,$jeniskelamin)
    {
        echo "
        HEWAN <br>
        # $this->nama <br>
        - $umur Bulan <br>
        - $jenishewan <br>
        - $jeniskelamin <br>
        - Makanan Kesukaan Hewan <br>";
        
    }    
    public function makananKesukaanHewan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}

class BendaMati{
    public $namabenda;
  
    function __construct($namabenda) {
      $this->namabenda = $namabenda;
    }
    public function ambilNamabenda()
    {
      return $this->namabenda;
    }
}

class Kendaraan extends BendaMati{
    public function jenisKendaraan($merek, $tipe ,$jenis)
    {
        echo "
        Kendaraan <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Kendaraan <br>";
        
    }    
    public function banyakKendaraan($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah
        <br>
        ";
    }    
}
class Lainnya extends BendaMati{
    public function jenisbenda($merek, $tipe ,$jenis)
    {
        echo "
        Benda Lainnya <br>
        # $this->namabenda <br>
        - $merek <br>
        - $tipe <br>
        - $jenis <br>
        - Detail Benda <br>";
        
    }    
    public function banyakbenda($warna, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $warna = jumlah $jumlah unit
        <br>
        ";
    }    
}


echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Usman");
$new->biodata(19, "Laki Laki");
$new->makananKesukaan("Pempek");
$new->makananKesukaan("Siomay");
$new->makananKesukaan("Ayam Goyeng");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Kucing");
$hewan->biodataHewan(19, "Mamalia" ,"Laki Laki");
$hewan->makananKesukaanHewan("Ikan Asin");
$hewan->makananKesukaanHewan("Wishkas");
$hewan->makananKesukaanHewan("Ayam Goyeng");


echo "<br><br><br>++CLASS PARENT KEDUA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$benda1 = New Kendaraan("Mobil");
$benda1->jenisKendaraan("HONDA", "Matic", "SPORT");
$benda1->banyakKendaraan("Merah", 10);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Biru", 17);
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$benda1 = New Kendaraan("Kursi");
$benda1->jenisKendaraan("INOAC", "Kursi kantor", "tipe kursi singel");
$benda1->banyakKendaraan("Kuning", 90);
$benda1->banyakKendaraan("Hijau", 190);
$benda1->banyakKendaraan("Hitam", 177);
