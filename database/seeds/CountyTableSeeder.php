<?php

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('county')->delete();
        
        \DB::table('county')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'DJ',
                'name' => 'Dolj',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'BC',
                'name' => 'Bacău',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'HR',
                'name' => 'Harghita',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'BN',
                'name' => 'Bistrița-Năsăud',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'DB',
                'name' => 'Dâmbovița',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'SV',
                'name' => 'Suceava',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'BT',
                'name' => 'Botoșani',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'BV',
                'name' => 'Brașov',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'B',
                'name' => 'București',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'BR',
                'name' => 'Brăila',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'HD',
                'name' => 'Hunedoara',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'TR',
                'name' => 'Teleorman',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'CV',
                'name' => 'Covasna',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'TL',
                'name' => 'Tulcea',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'TM',
                'name' => 'Timiș',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'BZ',
                'name' => 'Buzău',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'PH',
                'name' => 'Prahova',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'IF',
                'name' => 'Ilfov',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'NT',
                'name' => 'Neamț',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'CJ',
                'name' => 'Cluj',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'AB',
                'name' => 'Alba',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'GR',
                'name' => 'Giurgiu',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'AG',
                'name' => 'Argeș',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'CL',
                'name' => 'Călărași',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'BH',
                'name' => 'Bihor',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'IS',
                'name' => 'Iași',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'VL',
                'name' => 'Vâlcea',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'VN',
                'name' => 'Vrancea',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'AR',
                'name' => 'Arad',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'IL',
                'name' => 'Ialomița',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'CS',
                'name' => 'Caraș-Severin',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'GL',
                'name' => 'Galați',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'GJ',
                'name' => 'Gorj',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'CT',
                'name' => 'Constanța',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'SM',
                'name' => 'Satu Mare',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'MM',
                'name' => 'Maramureș',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'MH',
                'name' => 'Mehedinți',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'SJ',
                'name' => 'Sălaj',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'VS',
                'name' => 'Vaslui',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'MS',
                'name' => 'Mureș',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'SB',
                'name' => 'Sibiu',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'OT',
                'name' => 'Olt',
            ),
        ));
        
        
    }
}