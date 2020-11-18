<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'title' => 'ADANA', 'order' =>  1, 'plate' => '1'],
            ['id' => 2, 'title' => 'ADIYAMAN',  'order' => 1, 'plate' => '2'],
            ['id' => 3, 'title' => 'AFYONKARAHİSAR',  'order' => 1, 'plate' => '3'],
            ['id' => 4, 'title' => 'AĞRI',  'order' => 1, 'plate' => '4'],
            ['id' => 5, 'title' => 'AKSARAY',  'order' => 1, 'plate' => '68'],
            ['id' => 6, 'title' => 'AMASYA',  'order' => 1, 'plate' => '5'],
            ['id' => 7, 'title' => 'ANKARA',  'order' => 1, 'plate' => '6'],
            ['id' => 8, 'title' => 'ANTALYA',  'order' => 1, 'plate' => '7'],
            ['id' => 9, 'title' => 'ARDAHAN',  'order' => 1, 'plate' => '75'],
            ['id' => 10, 'title' => 'ARTVİN', 'order' => 1, 'plate' =>  '8'],
            ['id' => 11, 'title' => 'AYDIN', 'order' => 1, 'plate' =>  '9'],
            ['id' => 12, 'title' => 'BALIKESİR', 'order' => 1, 'plate' =>  '10'],
            ['id' => 13, 'title' => 'BARTIN', 'order' => 1, 'plate' =>  '74'],
            ['id' => 14, 'title' => 'BATMAN', 'order' => 1, 'plate' =>  '72'],
            ['id' => 15, 'title' => 'BAYBURT', 'order' => 1, 'plate' =>  '69'],
            ['id' => 16, 'title' => 'BİLECİK', 'order' => 1, 'plate' =>  '11'],
            ['id' => 17, 'title' => 'BİNGÖL', 'order' => 1, 'plate' =>  '12'],
            ['id' => 18, 'title' => 'BİTLİS', 'order' => 1, 'plate' =>  '13'],
            ['id' => 19, 'title' => 'BOLU', 'order' => 1, 'plate' =>  '14'],
            ['id' => 20, 'title' => 'BURDUR', 'order' => 1, 'plate' =>  '15'],
            ['id' => 21, 'title' => 'BURSA', 'order' => 1, 'plate' =>  '16'],
            ['id' => 22, 'title' => 'ÇANAKKALE', 'order' => 1, 'plate' =>  '17'],
            ['id' => 23, 'title' => 'ÇANKIRI', 'order' => 1, 'plate' =>  '18'],
            ['id' => 24, 'title' => 'ÇORUM', 'order' => 1, 'plate' =>  '19'],
            ['id' => 25, 'title' => 'DENİZLİ', 'order' => 1, 'plate' =>  '20'],
            ['id' => 26, 'title' => 'DİYARBAKIR', 'order' => 1, 'plate' =>  '21'],
            ['id' => 27, 'title' => 'DÜZCE', 'order' => 1, 'plate' =>  '81'],
            ['id' => 28, 'title' => 'EDİRNE', 'order' => 1, 'plate' =>  '22'],
            ['id' => 29, 'title' => 'ELAZIĞ', 'order' => 1, 'plate' =>  '23'],
            ['id' => 30, 'title' => 'ERZİNCAN', 'order' => 1, 'plate' =>  '24'],
            ['id' => 31, 'title' => 'ERZURUM', 'order' => 1, 'plate' =>  '25'],
            ['id' => 32, 'title' => 'ESKİŞEHİR', 'order' => 1, 'plate' =>  '26'],
            ['id' => 33, 'title' => 'GAZİANTEP', 'order' => 1, 'plate' =>  '27'],
            ['id' => 34, 'title' => 'GİRESUN', 'order' => 1, 'plate' =>  '28'],
            ['id' => 35, 'title' => 'GÜMÜŞHANE', 'order' => 1, 'plate' =>  '29'],
            ['id' => 36, 'title' => 'HAKKARİ', 'order' => 1, 'plate' =>  '30'],
            ['id' => 37, 'title' => 'HATAY', 'order' => 1, 'plate' =>  '31'],
            ['id' => 38, 'title' => 'IĞDIR', 'order' => 1, 'plate' =>  '76'],
            ['id' => 39, 'title' => 'ISPARTA', 'order' => 1, 'plate' =>  '32'],
            ['id' => 40, 'title' => 'İSTANBUL', 'order' => 1, 'plate' =>  '34'],
            ['id' => 41, 'title' => 'İZMİR', 'order' => 1, 'plate' =>  '35'],
            ['id' => 42, 'title' => 'KAHRAMANMARAŞ', 'order' => 1, 'plate' =>  '46'],
            ['id' => 43, 'title' => 'KARABÜK', 'order' => 1, 'plate' =>  '78'],
            ['id' => 44, 'title' => 'KARAMAN', 'order' => 1, 'plate' =>  '70'],
            ['id' => 45, 'title' => 'KARS', 'order' => 1, 'plate' =>  '36'],
            ['id' => 46, 'title' => 'KASTAMONU', 'order' => 1, 'plate' =>  '37'],
            ['id' => 47, 'title' => 'KAYSERİ', 'order' => 1, 'plate' =>  '38'],
            ['id' => 48, 'title' => 'KIRIKKALE', 'order' => 1, 'plate' =>  '71'],
            ['id' => 49, 'title' => 'KIRKLARELİ', 'order' => 1, 'plate' =>  '39'],
            ['id' => 50, 'title' => 'KIRŞEHİR', 'order' => 1, 'plate' =>  '40'],
            ['id' => 51, 'title' => 'KİLİS', 'order' => 1, 'plate' =>  '79'],
            ['id' => 52, 'title' => 'KOCAELİ', 'order' => 1, 'plate' =>  '41'],
            ['id' => 53, 'title' => 'KONYA', 'order' => 1, 'plate' =>  '42'],
            ['id' => 54, 'title' => 'KÜTAHYA', 'order' => 1, 'plate' =>  '43'],
            ['id' => 55, 'title' => 'MALATYA', 'order' => 1, 'plate' =>  '44'],
            ['id' => 56, 'title' => 'MANİSA', 'order' => 1, 'plate' =>  '45'],
            ['id' => 57, 'title' => 'MARDİN', 'order' => 1, 'plate' =>  '47'],
            ['id' => 58, 'title' => 'MERSİN', 'order' => 1, 'plate' =>  '33'],
            ['id' => 59, 'title' => 'MUĞLA', 'order' => 1, 'plate' =>  '48'],
            ['id' => 60, 'title' => 'MUŞ', 'order' => 1, 'plate' =>  '49'],
            ['id' => 61, 'title' => 'NEVŞEHİR', 'order' => 1, 'plate' =>  '50'],
            ['id' => 62, 'title' => 'NİĞDE', 'order' => 1, 'plate' =>  '51'],
            ['id' => 63, 'title' => 'ORDU', 'order' => 1, 'plate' =>  '52'],
            ['id' => 64, 'title' => 'OSMANİYE', 'order' => 1, 'plate' =>  '80'],
            ['id' => 65, 'title' => 'RİZE', 'order' => 1, 'plate' =>  '53'],
            ['id' => 66, 'title' => 'SAKARYA', 'order' => 1, 'plate' =>  '54'],
            ['id' => 67, 'title' => 'SAMSUN', 'order' => 1, 'plate' =>  '55'],
            ['id' => 68, 'title' => 'SİİRT', 'order' => 1, 'plate' =>  '56'],
            ['id' => 69, 'title' => 'SİNOP', 'order' => 1, 'plate' =>  '57'],
            ['id' => 70, 'title' => 'SİVAS', 'order' => 1, 'plate' =>  '58'],
            ['id' => 71, 'title' => 'ŞANLIURFA', 'order' => 1, 'plate' =>  '63'],
            ['id' => 72, 'title' => 'ŞIRNAK', 'order' => 1, 'plate' =>  '73'],
            ['id' => 73, 'title' => 'TEKİRDAĞ', 'order' => 1, 'plate' =>  '59'],
            ['id' => 74, 'title' => 'TOKAT', 'order' => 1, 'plate' =>  '60'],
            ['id' => 75, 'title' => 'TRABZON', 'order' => 1, 'plate' =>  '61'],
            ['id' => 76, 'title' => 'TUNCELİ', 'order' => 1, 'plate' =>  '62'],
            ['id' => 77, 'title' => 'UŞAK', 'order' => 1, 'plate' =>  '64'],
            ['id' => 78, 'title' => 'VAN', 'order' => 1, 'plate' =>  '65'],
            ['id' => 79, 'title' => 'YALOVA', 'order' => 1, 'plate' =>  '77'],
            ['id' => 80, 'title' => 'YOZGAT', 'order' => 1, 'plate' =>  '66'],
            ['id' => 81, 'title' => 'ZONGULDAK', 'order' => 1, 'plate' =>  '67'],
        ];
        DB::table('cities')->insert($items);
    }
}
