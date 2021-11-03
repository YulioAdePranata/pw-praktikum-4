<?php


abstract class karyawan {
            public $nomer;
            public $nama;
            public $ttl;
            public $kelamin;
            public $level;
            public $status;
            public $gaji;

            abstract public function getnomer();
            abstract public function setnomer($nomer);
            abstract public function getnama();
            abstract public function setnama($nama);
            abstract public function getttl();
            abstract public function setttl($ttl);
            abstract public function getkelamin();
            abstract public function setkelamin($kelamin);
            abstract public function getlevel();
            abstract public function setlevel($level);
        }

        class fulltime extends karyawan
        {
            public $status = "Fulltime";

            public function getnomer()
            {
                return $this->nomer;
            }
            public function setnomer($nomer)
            {
                $this->nomer = $nomer;
            }
            public function getnama()
            {
                return $this->nama;
            }
            public function setnama($nama)
            {
                $this->nama = $nama;
            }
            public function getttl()
            {
                return $this->ttl;
            }
            public function setttl($ttl)
            {
                $this->kelamin = $ttl;
            }
            public function getkelamin()
            {
                return $this->kelamin;
            }
            public function setkelamin($kelamin)
            {
                $this->kelamin = $kelamin;
            }
            public function getlevel()
            {
                return $this->level;
            }
            public function setlevel($level)
            {
                $this->level = $level;
            } 

            function __construct($nomer, $nama, $ttl, $kelamin, $level)
            {
                $this->nomer = $nomer;
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->kelamin = $kelamin;
                $this->level = $level;

                if($this->level == "Junior")
                {
                    $this->gaji = 2000000;
                }
                elseif($this->level == "Amateur")
                {
                    $this->gaji = 3500000;
                }
                else
                {
                    $this->gaji = 5000000;
                 }
            }
        }
        class parttime extends karyawan
        {
            public $status = "Parttime";

            public function getnomer()
            {
                return $this->nomer;
            }
            public function setnomer($nomer)
            {
                $this->nomer = $nomer;
            }
            public function getnama()
            {
                return $this->nama;
            }
            public function setnama($nama)
            {
                $this->nama = $nama;
            }
            public function getttl()
            {
                return $this->ttl;
            }
            public function setttl($ttl)
            {
                $this->kelamin = $ttl;
            }
            public function getkelamin()
            {
                return $this->kelamin;
            }
            public function setkelamin($kelamin)
            {
                $this->kelamin = $kelamin;
            }
            public function getlevel()
            {
                return $this->level;
            }
            public function setlevel($level)
            {
                $this->level = $level;
            } 

            function __construct($nomer, $nama, $ttl, $kelamin, $level)
            {
                $this->nomer = $nomer;
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->kelamin = $kelamin;
                $this->level = $level;

                if($this->level == "Junior")
                {
                    $this->gaji = 2000000/2;
                }
                elseif($this->level == "Amateur")
                {
                    $this->gaji = 3500000/2;
                }
                else
                {
                    $this->gaji = 5000000/2;
                 }
            }
        }
        $arrai = array();
        $arrai[0] = $karyawan1 = new fulltime(1, "Yulio", "Jakarta 12 Juli 2001", "Laki-laki", "Senior");
        $arrai[1] = $karyawan2 = new fulltime(2, "Johny", "Bandung 3 maret 2005", "Laki-laki", "Amateur");
        $arrai[2] = $karyawan3 = new parttime(3, "Joseph", "Bogor 15 Janurari 2008", "Laki-laki", "Junior");
        $arrai[3] = $karyawan4 = new parttime(4, "Jonathan", "Bekasi 29 Juni 2000", "Laki-laki", "Senior");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Tugas Praktikum 4</title>
    </head>
    <body>
    <center><h1 >Tabel Karyawan</h1></center>
        <center><table id="table_karyawan">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Gaji</th>
                </tr>
            </thead>
           <tbody>
               <?php for ($i=0; $i < 4; $i++){?>
                <tr>
                <td><?php echo $arrai[$i]->nomer;?></td>
                <td><?php echo $arrai[$i]->nama;?></td>
                <td><?php echo $arrai[$i]->ttl;?></td>
                <td><?php echo $arrai[$i]->kelamin;?></td>
                <td><?php echo $arrai[$i]->level;?></td>
                <td><?php echo $arrai[$i]->status;?></td>
                <td><?php echo $arrai[$i]->gaji;?></td>  
                <?php } ?>
                </tr>  
            </tbody>
        </table></center>
    </body>
</html>