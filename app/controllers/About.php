<?php 

class About {
    public function index($nama = "Bennefit", $pekerjaan = "Mahasiswa IT") {
        echo "Halo.. nama saya $nama saya bekerja sebagai $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}

?>