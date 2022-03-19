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
        - $umur Tahun <br>
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



////////////////////////////////


class Bangunan {
    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}
 
class Pribadi extends Bangunan {
    public function detailRuangan($luas, $harga)
    {
        echo "
        Bangunan Pribadi <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Ruangan <br>";
        
    }    
    public function jumlahRuangan($nama_ruangan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_ruangan $jumlah ruangan.
        <br>
        ";
    }    
    
}
class Umum extends Bangunan {
    public function detailBangunan($luas, $harga)
    {
        echo "
        Bangunan Umum <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Bangunan Ruangan <br>";
        
    }    
    public function jumlahBangunan($nama_bangunan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_bangunan $jumlah Ruang.
        <br>
        ";
    }   

}

echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Silvia Devi");
$new->biodata(19, "Perempuan");
$new->makananKesukaan("Ayam Goreng");
$new->makananKesukaan("Bubur Ayam");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Kocheng Oren");
$hewan->biodataHewan(19, "Mamalia" ,"Jantan Banget");
$hewan->makananKesukaanHewan("Ikan Pindang");
$hewan->makananKesukaanHewan("Ayam Goreng Punya Saya");




echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";

$pribadi = new Pribadi("Apart");
$pribadi->detailRuangan("2 Hektar", "Rp.200000000");
$pribadi->jumlahRuangan("kamar", 2);
$pribadi->jumlahRuangan("Ruang Meeting", 2);
$pribadi->jumlahRuangan("Kamar Mandi", 2);


echo "==CLASS CHILD KEDUA ==<br><br>";

$pribadi = new Umum("Rumah Sakit");
$pribadi->detailBangunan("1 Hektar", "Rp.300000000");
$pribadi->jumlahBangunan("Kamar Pasien", 250);
$pribadi->jumlahBangunan("Ruang Dokter", 4);
$pribadi->jumlahBangunan("Ruang Farmasi/Obat", 3    );