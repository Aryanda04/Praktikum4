<?php
     abstract class pegawai {
        public $no;
        public $nama;
        public $tempat_tanggal;
        public $JK;
        public $level;
        public $status;
        public $gaji;
    

    abstract public function get_name();
    abstract public function set_name($nama);

    }

    class parttime extends pegawai{
        public $status = "Parttime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $JK, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->JK = $JK;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000/2;
            }
            else{
                $this->gaji = 5000000/2;
            }
        }
    }

    class fulltime extends pegawai{
        public $status = "Fulltime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $JK, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->JK = $JK;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000;
            }
            else{
                $this->gaji = 5000000;
            }
        }

        


    }
    
    $arr = array();
    $arr[0] = $pegawai1 = new fulltime(1, "Aryanda Rizky P", "Tanjungpandan 04-Desember-2001", "Laki-Laki", "Senior");
    $arr[1] = $pegawai2 = new fulltime(2, "Rizky Aryanda", "Bandung 15-April-2000", "Laki-Laki", "Junior");
    $arr[2] = $pegawai3 = new parttime(3, "Riska Kurnia", "Jakarta 2-Februari-2000", "Perempuan", "Senior");
    $arr[3] = $pegawai4 = new parttime(4, "Rita", "Yogyakarta 3-Desember-2000", "Perempuan", "Junior");

?>
<!DOCTYPE html>
<html style="background-color:#F5F5DC;">
  <head>
    <style>
      * {
        color: black;
      }
    </style>
  </head>
  <body>
    <h2 style="text-align:center; margin-top : 80px;">Daftar Pegawai</h2>
    <table class="tabel" border='1' style="border-radius:1px; margin-left: auto; margin-right: auto; margin-top :1px;">
      <tr>
        <td style="text-align:center; background-color:#00cec9">No</td>
        <td style="text-align:center; background-color:#00cec9">Nama</td>
        <td style="text-align:center;background-color:#00cec9">Tempat Tanggal Lahir</td>
        <td style="text-align:center; background-color:#00cec9">Jenis Kelamin</td>
        <td style="text-align:center; background-color:#00cec9">Level</td>
        <td style="text-align:center; background-color:#00cec9">Status</td>
        <td style="text-align:center; background-color:#00cec9">Gaji</td>
      </tr> <?php for ($i=0; $i < 4; $i++) { ?> <tr>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->no; ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->nama; ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->tempat_tanggal; ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->JK; ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->level ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->status; ?> </td>
        <td style="background-color:#81ecec"> <?php echo $arr[$i]->gaji; ?> </td>
      </tr> <?php } ?>
    </table>
    <h5 style="text-align:left; margin-top : 55px; margin-left : 150px">Oleh : Aryanda Rizky P <br>NIM: 105219038 </h5>
  </body>
</html>