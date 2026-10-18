<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampGearSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('camp_gears')->insert([
            [
                'name' => 'Tenda 4 Person',
                'category' => 'Tenda',
                'rent_price' => 75000,
                'stock' => 5,
                'image' => 'tenda.jpg',
                'description' => 'Tenda kapasitas 4 orang dengan bahan waterproof tinggi dan kuat terhadap angin.',
            ],
            [
                'name' => 'Sleeping Bag Series',
                'category' => 'Perlengkapan Tidur',
                'rent_price' => 30000,
                'stock' => 10,
                'image' => 'sleeping_bag.jpg',
                'description' => 'Sleeping bag hangat ultralight dengan aksen slider warna emas yang elegan.',
            ],
            [
                'name' => 'Kompor Portable Mini Outdoor',
                'category' => 'Peralatan Masak',
                'rent_price' => 25000,
                'stock' => 8,
                'image' => 'kompor.jpg',
                'description' => 'Kompor koval mini dengan pemantik otomatis dan pelindung angin.',
            ],
            [
                'name' => 'Tas Carrier 60L',
                'category' => 'Tas & Carrier',
                'rent_price' => 60000,
                'stock' => 4,
                'image' => 'carrier.jpg',
                'description' => 'Tas carrier berkapasitas 60 liter dengan teknologi sirkulasi udara terbaik.',
            ],
            [
                'name' => 'Matras Foil Thermal Single',
                'category' => 'Perlengkapan Tidur',
                'rent_price' => 10000,
                'stock' => 15,
                'image' => 'matras.jpg',
                'description' => 'Matras dengan lapis an aluminium foil menahan dingin dari permukaan tanah.',
            ],
            [
                'name' => 'Lampu Tenda LED Rechargeable',
                'category' => 'Penerangan',
                'rent_price' => 15000,
                'stock' => 12,
                'image' => 'lampu_tenda.jpg',
                'description' => 'Lampu gantung tenda dengan baterai ulang dan 3 mode pencahayaan.',
            ],
            [
                'name' => 'Meja Lipat Aluminium Portable',
                'category' => 'Furnitur Camping',
                'rent_price' => 35000,
                'stock' => 6,
                'image' => 'meja.jpg',
                'description' => 'Meja lipat ringkas berbahan aluminium tahan beban hingga 20 kg.',
            ],
            [
                'name' => 'Kursi Lipat Outdoor',
                'category' => 'Furnitur Camping',
                'rent_price' => 25000,
                'stock' => 8,
                'image' => 'kursi.jpg',
                'description' => 'Kursi bersantai saat camping yang praktis dan mudah dilipat.',
            ],
            [
                'name' => 'Nesting Set Peralatan Masak',
                'category' => 'Peralatan Masak',
                'rent_price' => 30000,
                'stock' => 7,
                'image' => 'nesting.jpg',
                'description' => 'Set panci dan penggorengan aluminium anti lengket untuk 3-4 orang.',
            ],
            [
                'name' => 'Flysheet Waterproof',
                'category' => 'Tenda & Pelindung',
                'rent_price' => 20000,
                'stock' => 9,
                'image' => 'flysheet.jpg',
                'description' => 'Flysheet peneduh serbaguna tahan air dengan 19 titik lubang pasak.',
            ],
            [
                'name' => 'Trekking Pole Aluminium Alloy',
                'category' => 'Aksesoris Pendakian',
                'rent_price' => 15000,
                'stock' => 10,
                'image' => 'trekking_pole.jpg',
                'description' => 'Tongkat pendakian dengan shock absorber untuk mengurangi beban lutut.',
            ],
            [
                'name' => 'Hammock Single Load 150kg',
                'category' => 'Perlengkapan Tidur',
                'rent_price' => 15000,
                'stock' => 10,
                'image' => 'hammock.jpg',
                'description' => 'Ayunan gantung bahan parasut berkualitas tinggi santai di alam.',
            ],
        ]);
    }
}