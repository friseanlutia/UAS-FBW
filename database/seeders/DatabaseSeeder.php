<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dosen;
use App\Models\Magang;
use App\Models\Kaprodi;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'npm'=>'2010631170073',
            'nama_mahasiswa'=>'Frise Anesha Lutia',
            'prodi'=>'Teknik Informatika',
            'kelas'=>'5C',
            'alamat'=>'Bandung',
            'no_hp'=>'082288920471',
        ]);

        Mahasiswa::create([
            'npm'=>'2010631170074',
            'nama_mahasiswa'=>'Farel Tearsense',
            'prodi'=>'Sistem Informasi',
            'kelas'=>'5C',
            'alamat'=>'Jakarta',
            'no_hp'=>'082278390800',
        ]);

        Dosen::create([
            'nidn'=>'0012108502',
            'nama_dosen'=>'Rini Mayasari, M.Kom.',
            'no_hp'=>'081374839201',
            'alamat'=>'Karawang',
        ]);

        Dosen::create([
            'nidn'=>'0012108505',
            'nama_dosen'=>'Betha Nurina Sari, M.Kom.',
            'no_hp'=>'085782941940',
            'alamat'=>'Bekasi',
        ]);

        Kaprodi::create([
            'nidn'=>'0012108508',
            'nama_kaprodi'=>'Ade Andri Hendriadi, S.Si, M.Kom.',
            'no_hp'=>'081296470473',
            'alamat'=>'Karawang',
        ]);

        Kaprodi::create([
            'nidn'=>'0012108506',
            'nama_kaprodi'=>'Sulaiman, S.Si, M.Kom.',
            'no_hp'=>'081296470456',
            'alamat'=>'Bekasi',
        ]);

        Magang::create([
            'nama_perusahaan'=>'Huawei',
            'alamat'=>'Jakarta Pusat',
            'posisi'=>'Assistant Data Analyst Engineer',
            'open_gate'=>'22 Desember 2022',
            'close_gate'=>'12 Februari 2023',
            'keterangan'=>'Jenis teknologi yang dibuka dalam program Magang Bersertifikat ini adalah teknologi terkait Carrier Technology. Magang yang ditawarkan oleh Huawei adalah magang dalam bentuk dua kegiatan utama, yaitu Roll Out (RO) dan Manage Service (MS):',
        ]); 

        Magang::create([
            'nama_perusahaan'=>'Shopee',
            'alamat'=>'Jakarta Selatan',
            'posisi'=>'UI/UX',
            'open_gate'=>'22 Desember 2022',
            'close_gate'=>'12 Februari 2023',
            'keterangan'=>'Requirements: Fresh graduate and senior year students are welcome Deep understanding of design process. Strong in core design (layout, composition, color) and prototyping tools with an interest in exploring new tools and processes. Experience with design tools (such as Figma, Photoshop, Illustrator) and Prototyping tools. Detail-oriented, resourceful, and is kept abreast of the latest UI/UX design concepts. Able to do minimum 6 months internship (can start as soon as possible)',
        ]); 
    }
}
