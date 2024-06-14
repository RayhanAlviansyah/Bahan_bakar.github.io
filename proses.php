<?php
class shell {
    protected $ppn;
    private $SSuper,
            $SVpower,
            $SVpowerDiesel,
            $SVpowerNitro;
    public $jumlah;
    public $jenis;

    function __construct() {
        $this->ppn = 0.1;
    }

public function setharga($tipe1, $tipe2, $tipe3, $tipe4) {
    $this->SSuper = $tipe1;
    $this->SVpower = $tipe2;
    $this->SVpowerDiesel = $tipe3;
    $this->SVpowerNitro = $tipe4;
    }

    public function getharga () {
        $data ["SSuper"] = $this->SSuper;
        $data ["SVpower"] = $this->SVpower;
        $data ["SVpowerDiesel"] = $this->SVpowerDiesel;
        $data ["SVpowerNitro"] = $this->SVpowerNitro;
        return $data;
    }
}

class beli extends shell {
    public function hargabeli() {
        $dataharga = $this->getharga();
        $hargaBeli = $this->jumlah * $dataharga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargabayar = $hargaBeli + $hargaPPN;
        return $hargabayar;
    }

    public function cetakpembeli () {
        echo "<center>";
        echo "-----------------------------------------------------" . "<br>";
        echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
        echo "Dengan jumlah : " . $this->jumlah . " Liter <br>";
        echo "Total yang harus anda bayar Rp. " . number_format($this -> hargabeli(), 0, '', '.') . "<br>";
        echo "-----------------------------------------------------";
        echo "</center>";
    }
}
?>