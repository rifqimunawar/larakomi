<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rifqi Munawar',
                'nim' => '41037006211013',
                'img' => 'profile_rifqi_munawar-1685183361.jpg',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Kp. Kaliwangi desa Jati Kec. Sindangbarang Kab. Cianjur',
                'bio' => 'salam pergerakan',
                't_lahir' => NULL,
                'ttl' => '2001-11-05',
                'hobi' => 'Membaca',
                'sma' => 'Man 2 Kota Bandung',
                'thn_lulus' => '2020',
                'thn_kuliah' => '2021',
                'wa' => '085161145097',
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => NULL,
                'kelamin' => 'L',
                'role_id' => 1,
                'username' => 'rifqi_munawar',
                'slug' => 'rifqi_munawar',
                'email' => 'rifqimunawar48@gmail.com',
                'password' => '$2y$10$qJCtePxsBRjheUEjoKD2DeDHH9T/TIO0l39OFKvZQche1wdPgMyXO',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-25 09:54:57',
                'updated_at' => '2023-05-27 10:29:21',
                'centang' => '1',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'Mapaba',
                'thn_mapaba' => '2021',
                'thn_pkd' => '-',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '2',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Raie Aswajjillah',
                'nim' => '41037006211028',
                'img' => 'profile_rai___a-1685064286.png',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Jl. Baladewa utara No.32',
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => '2003-03-01',
                'hobi' => 'Bermusik',
                'sma' => 'SMKN 2 Bandung',
                'thn_lulus' => '2021',
                'thn_kuliah' => '2021',
                'wa' => '088218136394',
                'twitter' => '-',
                'fb' => 'https://www.facebook.com/rai.aswajjillah/',
                'ig' => 'https://www.instagram.com/rai___a/',
                'kelamin' => 'L',
                'role_id' => 1,
                'username' => 'rai___a',
                'slug' => 'rai-a',
                'email' => 'rai010303@gmail.com',
                'password' => '$2y$10$XY2QcGt491/Nmk.fnRuIT.HUB0f9fRFRBNCNAzw13NGOcvlCH50Pu',
                'email_verified_at' => NULL,
                'remember_token' => 'HthFwgFPr7AeuxFRkMBcSKrQPQgYXYciA5PvLN7g8dXvyUrpN6kOCPwWRkSs',
                'created_at' => '2023-05-25 09:54:58',
                'updated_at' => '2023-06-18 00:58:46',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'Mapaba',
                'thn_mapaba' => '2021',
                'thn_pkd' => '2023',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '1',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Ilyas Khoirul Alimnis',
                'nim' => '41037006211114',
                'img' => 'user.png',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => NULL,
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => NULL,
                'hobi' => NULL,
                'sma' => NULL,
                'thn_lulus' => NULL,
                'thn_kuliah' => NULL,
                'wa' => NULL,
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => NULL,
                'kelamin' => 'L',
                'role_id' => 3,
                'username' => 'Ilyas Khoirul A',
                'slug' => 'ilyas-khoirul-a',
                'email' => '',
                'password' => '$2y$10$MepGU6vnY1oYhhbrJph8R.088CtFZRIss687yIR9HVxyqe2C8HiCG',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-25 09:54:58',
                'updated_at' => '2023-05-25 10:20:48',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKD',
                'thn_mapaba' => '2021',
                'thn_pkd' => '2022',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '1',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Riki Ramdan',
                'nim' => '41037006191067',
                'img' => 'profile_rikiramdan25-1685184012.jpg',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Kp Cikadu Rt 5 Rw 5 Desa Baranangsiang Kecamatan Cipongkor KBB',
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => '2023-05-27',
                'hobi' => NULL,
                'sma' => 'SMK Pembangunan Bandung Barat',
                'thn_lulus' => '2017',
                'thn_kuliah' => '2019',
                'wa' => '083822751029',
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => NULL,
                'kelamin' => 'L',
                'role_id' => 1,
                'username' => 'rikiramdan25',
                'slug' => 'rikiramdan25',
                'email' => 'rikiramdan533@gmail.com',
                'password' => '$2y$10$gxg7TZHuYwEcQfbtuXs.1u/nTGQohgmjFayP7ND1wUGhGIEc8V9y2',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-25 09:54:58',
                'updated_at' => '2023-05-27 10:40:13',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKL',
                'thn_mapaba' => '2019',
                'thn_pkd' => '2020',
                'thn_pkl' => '2022',
                'thn_pkn' => '-',
                'informal' => '2',
                'nonformal' => '2',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Abdallah Baehaqi Faqih',
                'nim' => '41032124221005',
                'img' => 'profile_Haoshoku_haqi-1685191778.jpg',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Sukamiskin Kota Bandung',
                'bio' => 'Tumbuh subur pergerakanku!!!',
                't_lahir' => NULL,
                'ttl' => '2003-08-30',
                'hobi' => 'Membaca',
                'sma' => 'MA',
                'thn_lulus' => '2020',
                'thn_kuliah' => '2022',
                'wa' => '083100152040',
                'twitter' => 'https://twitter.com/abdalah_baehaqi',
                'fb' => NULL,
                'ig' => '@alhaqqiwalfaqih',
                'kelamin' => 'L',
                'role_id' => 3,
                'username' => 'Haoshoku_haqi',
                'slug' => 'haoshoku-haqi',
                'email' => 'abdalah.baehaqi@gmail.com',
                'password' => '$2y$10$1aqA/wqjbavvsf/29/T9LelrC9KboslG2GI5g9SULJeTdUdCKjXP.',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-27 12:38:43',
                'updated_at' => '2023-05-27 13:01:51',
                'centang' => '0',
                'rayon_id' => '6',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKD',
                'thn_mapaba' => '2022',
                'thn_pkd' => '2023',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '0',
                'nonformal' => '0',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Rizki Zaki Abdurahman',
                'nim' => '41037006191038',
                'img' => 'profile_rizkizaki-1685347150.JPG',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Kp. Pasir Panjang RT03/06, Ds. Jagabaya, Kec. Cimaung, Kab. Bandung',
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => '1999-10-21',
                'hobi' => 'Bermain Game',
                'sma' => 'SMA AL-FALAH BANJARAN',
                'thn_lulus' => '2018',
                'thn_kuliah' => '2019',
                'wa' => '087848778773',
                'twitter' => 'rizkizaki21',
                'fb' => NULL,
                'ig' => 'arizkizakiii',
                'kelamin' => 'L',
                'role_id' => 1,
                'username' => 'rizkizaki',
                'slug' => 'rizkizaki',
                'email' => 'abdurahmanzaki21@gmail.com',
                'password' => '$2y$10$a18fYTTEzxLs3lNJW25sluN1WQHCnsTUxcLw4jEFqwFOlQ3kXFKqK',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-29 07:55:30',
                'updated_at' => '2023-05-29 08:00:00',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKD',
                'thn_mapaba' => '2019',
                'thn_pkd' => '2021',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '0',
                'nonformal' => '0',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Adi Muad Wahidin',
                'nim' => '41037003211015',
                'img' => 'profile_Adi Muad W-1685664877.jpg',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => 'Bandung Barat',
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => '2002-04-05',
                'hobi' => NULL,
                'sma' => 'SMAN 1 Cikalongwetan',
                'thn_lulus' => '2021',
                'thn_kuliah' => '2021',
                'wa' => '085965540566',
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => 'Adimuadwahidin323@gmail.com',
                'kelamin' => 'L',
                'role_id' => 3,
                'username' => 'Adi Muad W',
                'slug' => 'adi-muad-w',
                'email' => 'Adimuadwahidin323@gmail.com',
                'password' => '$2y$10$1ctmXdlhB1bASbH9tg/HZ.XhDsXSNyzz6cYGK17P4GWzIh/.9YMHm',
                'email_verified_at' => NULL,
                'remember_token' => 'fkXEJfi5JZgZcTXvQYMWaC1EyiIK72Ajuv9m966lYKoBrLb2l16x2DJnfVN7',
                'created_at' => '2023-06-02 00:07:41',
                'updated_at' => '2023-06-17 17:01:10',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKD',
                'thn_mapaba' => '2021',
                'thn_pkd' => '2023',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '1',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Elisna',
                'nim' => '41037006211032',
                'img' => 'user.png',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => NULL,
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => NULL,
                'hobi' => NULL,
                'sma' => NULL,
                'thn_lulus' => NULL,
                'thn_kuliah' => NULL,
                'wa' => NULL,
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => NULL,
                'kelamin' => NULL,
                'role_id' => 3,
                'username' => '053',
                'slug' => '053',
                'email' => NULL,
                'password' => '$2y$10$SDpxJiaCuj1OMddQ5EpEB.6tH4Wed/vvsO7fkQIHXXbDfoKSclHnO',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-05 08:40:06',
                'updated_at' => '2023-06-05 08:42:36',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'Mapaba',
                'thn_mapaba' => '2021',
                'thn_pkd' => '-',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '1',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Restu Faisal',
                'nim' => '41037003211011',
                'img' => 'user.png',
                'provinces' => NULL,
                'cities' => NULL,
                'districts' => NULL,
                'villages' => NULL,
                'alamat' => NULL,
                'bio' => 'tangan terkepan dan maju kemuka!!!',
                't_lahir' => NULL,
                'ttl' => NULL,
                'hobi' => NULL,
                'sma' => NULL,
                'thn_lulus' => NULL,
                'thn_kuliah' => NULL,
                'wa' => NULL,
                'twitter' => NULL,
                'fb' => NULL,
                'ig' => NULL,
                'kelamin' => NULL,
                'role_id' => 3,
                'username' => 'Restuu',
                'slug' => 'restuu',
                'email' => NULL,
                'password' => '$2y$10$wcAvOhOLxo2GAZfjyRevGeNv0l.Xx1qXlFXCTcMMzYm/UZILu1Pfi',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-12 10:08:00',
                'updated_at' => '2023-06-19 05:41:25',
                'centang' => '0',
                'rayon_id' => '1',
                'prodi' => '-- Prodi Di Ulul Albab --',
                'kaderisasi' => 'PKD',
                'thn_mapaba' => '2021',
                'thn_pkd' => '2023',
                'thn_pkl' => '-',
                'thn_pkn' => '-',
                'informal' => '1',
                'nonformal' => '1',
            ),
        ));
        
        
    }
}