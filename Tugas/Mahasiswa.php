<?php
    class Mahasiswa
    {
        //list of properties
        public $nim;
        public $nama;
        public $progamStudi;

        //methods
        function setData($nim, $nama, $progamStudi)
        {
            $this->nim = $nim;
            $this->nama = $nama;
            $this->progamStudi = $progamStudi;
        }
        function getdata()
            {
                return[
                    'nim' => $this->nim,
                    'nama' => $this->nama,
                    'progamStudi' => $this->progamStudi,
                ];
            }
        public function printData() {
            echo "NIM: " . $this->nim . "<br>";
            echo "Nama: " . $this->nama . "<br>";
            echo "Program Studi: " . $this->progamStudi . "<br><br>";
        }
    }