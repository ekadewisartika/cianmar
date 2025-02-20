<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Informations extends Seeder
{
    public function run()
    {
        // Data information yang akan dimasukkan
        $data = [
            'name' => 'Anamar Binawisata',
            'address' => 'Jl AP Pettarani No 42 D RT. 01 RW.01 Kel. Tamamaung Kec. Panakkukang Kota Makassar Sulawesi Selatan',
            'phone1' => '6282196270097',
            'phone2' => '62411420097 ',
            'whatsapp' => '6282196270097',
            'facebook' => 'anmarbinawisata',
            'instagram' => 'anmar_binawisata',
            'email' => 'anmarbinawisata@yahoo.com',
            'maps_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.750498958312!2d119.438138!3d-5.143816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2b4556149f9%3A0x6974255abc5d27d7!2sPT.%20Anmar%20Binawisata!5e0!3m2!1sen!2sid!4v1735313344470!5m2!1sen!2sid',
        ];

        // Menyisipkan data ke dalam tabel information
        $this->db->table('informations')->insert($data);
    }
}
