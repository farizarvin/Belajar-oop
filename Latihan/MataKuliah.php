<?php
    class MataKuliah
    {
        //list of properties
        private $kode;
        private $nama;

        public function setData($kode, $nama)
        {
            $this->kode = $kode;
            $this->nama = $nama;
        }
        public function getdata()
            {
                return[
                    'kode' => $this->kode,
                    'nama' => $this->nama,
                ];
            }
    }