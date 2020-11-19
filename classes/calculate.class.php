<?php

class Calculate {

  public $kalimat;

  public function tabelKata($kalimat) {

    //isi properti $this->kalimat dengan inputan user
    $this->kalimat = $kalimat;

    //rubah properti jadi sebuah array
    $kalimatToArray = explode(" ", $this->kalimat);

    //jadikan array huruf kecil semua
    $kalimatToArray = array_map('strtolower', $kalimatToArray);

    //hilangkan kata umum / stopword
    $kalimatToArray = $this->hilangkanKataUmum($kalimatToArray);

    //menjumlahkan kemunculan array ganda
    return $kalimatToArray = $this->JumlahkanArrayGanda($kalimatToArray);
  }

  //hilangkan array umum / stopword
  private function hilangkanKataUmum($arr){
    $arraystopwordOBJ = new StopWord;
    $arraystopwordOBJ->jadiArray();
    return array_diff($arr, $arraystopwordOBJ->arraystopword);
  }

  //menjumlahkan kemunculan array ganda
  private function JumlahkanArrayGanda($arr) {
    return $totalArrayGanda = array_count_values($arr);
  }


}




 ?>
