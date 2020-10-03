<?php

/** 
 *  
 *  poin 7
 *  
 *  - 1 || menu bisa berjalan sesuai dengan pilihan yang tersedia menggunakan perulangan
 *  - 1 || filter berdasarkan provinsi
 *  - 1 || tidak ada duplikasi data saat filter provinsi
 *  - 1 || filter berdasarkan kawasan
 *  - 1 || tidak ada duplikasi data saat filter kawasan
 *  - 2 || tidak ada duplikasi kode ( Penerapan DRY ) menggunakan function
 * 
 */

 $provinsi=[
     [
         "provinsi"=>"Aceh",
         "kota"=>"Banda Aceh",
         "kawasan"=>"Sumatra"
     ],
    [
        "provinsi" => "Aceh",
        "kota" => "Langsa",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Aceh",
        "kota" => "Lhokseumawe",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Bali",
        "kota" => "Denpasar",
        "kawasan" => "Bali dan Nusa Tenggara"
    ],
    [
        "provinsi" => "Bangka Belitung",
        "kota" => "Pangkalpinang",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Cilegon",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Serang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang Selatan",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Banten",
        "kota" => "Tangerang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Bengkulu",
        "kota" => "Bengkulu",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jambi",
        "kota" => "Jambi",
        "kawasan" => "Sumatra"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bandung",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bekasi",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Barat",
        "kota" => "Bogor",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Magelang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Semarang",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Tengah",
        "kota" => "Surakarta",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Batu",
        "kawasan" => "Jawa"
    ],
    [
        "provinsi" => "Jawa Timur",
        "kota" => "Blitar",
        "kawasan" => "Jawa"
    ],
];

function arrControl()
{
global $provinsi;
$menu=["all","provinsi","kawasan","exit"];

$berhenti=true;

while($berhenti)
{
    echo "==========================\n";
    echo "Daerah Otonom Di Indonesia\n";
    echo "---------------------------\n";

    $nomor=1;
    foreach($menu as $data)
    {
        echo "$nomor.$data \n";
        $nomor++;
    }
     $pilih_menu=readline("Pilih menu : ");

    if($pilih_menu==1)
    { 
        $no = 1;
    foreach ($provinsi as $value) {
        echo $no++ . ".". $value["provinsi"] ."  ".$value["kota"] ."  ".$value["kawasan"]."\n";
    }
    }
    elseif($pilih_menu==2)
    {
        $temp_arr=[];
        foreach ($provinsi as $key) {
           $temp_arr[]=$key["provinsi"];
        }
        $prov = array_unique($temp_arr);
        foreach ($prov as $result) {
            echo $result."\n";
        }

            $filter_provinsi=readline("Pilih Provinsi : ");
            foreach ($provinsi as $filter) {
                if ($filter["provinsi"]==$filter_provinsi) {
                    echo $filter["provinsi"]."  ".$filter["kota"]."  ".$filter["kawasan"]."\n";
                }
            }

        }elseif($pilih_menu==3)
        {
            $temp=[];
          foreach ($provinsi as $kawasan) {
              $temp[]=$kawasan["kawasan"];
          }
          $kwsn = array_unique($temp);
          foreach ($kwsn as $key) {
              echo $key."\n";
          }

          $filter_kawasan=readline("Pilih kawasan : ");
          foreach ($provinsi as $filter) {
              if ($filter["kawasan"]==$filter_kawasan) {
                  echo $filter["provinsi"]."  ".$filter["kota"]."  ".$filter["kawasan"]."\n";                  
              }
          }


         }elseif($pilih_menu==4)
        {
           echo "Terima Kasih";
        break;
        }else
        {
            echo "anda tidak memilih menu\n";
        }

}
}

arrControl();