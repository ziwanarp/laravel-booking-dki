<?php

namespace Database\Seeders;

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
        // Seeder jabatan
        \App\Models\Jabatan::create([
            'id_jabatan' => 1,
            'nama_jabatan' => 'Teller'
        ]);
        \App\Models\Jabatan::create([
            'id_jabatan' => 2,
            'nama_jabatan' => 'Customer Service'
        ]);

        // seedeer layanan Teller
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL01',
            'nama_layanan' => 'Setor Tunai',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL02',
            'nama_layanan' => 'Tarik Tunai',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL03',
            'nama_layanan' => 'Setoran Deposito',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL04',
            'nama_layanan' => 'Pencairan Deposito',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL05',
            'nama_layanan' => 'Pindah Buku',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL06',
            'nama_layanan' => 'Kliring',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL07',
            'nama_layanan' => 'Kirim Uang / SKN',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL08',
            'nama_layanan' => 'RTGS',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL09',
            'nama_layanan' => 'Pembayaran Pajak',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL10',
            'nama_layanan' => 'Pembayaran Lainnya',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL11',
            'nama_layanan' => 'Remittance',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL12',
            'nama_layanan' => 'Jual /Beli Valas',
            'jabatan_id' => 1,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'TL13',
            'nama_layanan' => 'Lainnya',
            'jabatan_id' => 1,
        ]);


        // seeder layanan customer service
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS01',
            'nama_layanan' => 'Pembukaan Rekening (Tabungan)',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS02',
            'nama_layanan' => 'Pembukaan Rekening (Deposito)',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS03',
            'nama_layanan' => 'Pembukaan Rekening (Giro)',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS04',
            'nama_layanan' => 'Rekening Program',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS05',
            'nama_layanan' => 'Pengkinian Data',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS06',
            'nama_layanan' => 'Permohonan Kartu ATM',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS07',
            'nama_layanan' => 'Pembuatan PIN ATM',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS08',
            'nama_layanan' => 'Pencairan Deposito',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS09',
            'nama_layanan' => 'Informasi Saldo',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS10',
            'nama_layanan' => 'Permohonan Cek/BG',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS11',
            'nama_layanan' => 'Aktivasi Cek/BG',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS12',
            'nama_layanan' => 'Cetak Rekening Koran',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS13',
            'nama_layanan' => 'Cetak Buku Tabungan',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS14',
            'nama_layanan' => 'Ganti Buku Tabungan',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS15',
            'nama_layanan' => 'Buka Blokir',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS16',
            'nama_layanan' => 'Tutup Rekening',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS17',
            'nama_layanan' => 'Remittance',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS18',
            'nama_layanan' => 'SKD / SKDKB',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS19',
            'nama_layanan' => 'Pengaduan Nasabah',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS20',
            'nama_layanan' => 'JakOne Mobile',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS21',
            'nama_layanan' => 'SMS Notification',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS22',
            'nama_layanan' => 'KJP',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS23',
            'nama_layanan' => 'KPJ',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS24',
            'nama_layanan' => 'Lainnya',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS25',
            'nama_layanan' => 'PNS',
            'jabatan_id' => 2,
        ]);
        \App\Models\Layanan::create([
            'kode_layanan' => 'CS26',
            'nama_layanan' => 'Umum',
            'jabatan_id' => 2,
        ]);

        // seeder vendor
        \App\Models\Vendor::create([
            'id_vendor' => '76880',
            'vendor' => 'Telkom',
        ]);

        // seeder cabang
        \App\Models\Cabang::create([
            'kode_cabang' => '108',
            'id_vendor' => '76880',
            'vendor' => 'Telkom',
            'nama_cabang' => 'KC Balaikota',
            'latitude' => '-6.181040258599871',
            'longitude' => '106.8280337890692',
            'alamat' => 'Jl. Medan Merdeka Sel. No.8, RT.11/RW.9, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110',
        ]);
        \App\Models\Cabang::create([
            'kode_cabang' => '111',
            'id_vendor' => '76880',
            'vendor' => 'Telkom',
            'nama_cabang' => 'KC Walikota Jakarta Pusat',
            'latitude' => '-6.173649989401135',
            'longitude' => '106.81855376548705',
            'alamat' => 'Jl. Tanah Abang I No. 1, Kel. Petojo Selatan, Kec. Gambir, RT.14/RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160',
        ]);
        \App\Models\Cabang::create([
            'kode_cabang' => '201',
            'id_vendor' => '76880',
            'vendor' => 'Telkom',
            'nama_cabang' => 'KC Walikota Jakarta Utara',
            'latitude' => '-6.120258478295213',
            'longitude' => '106.89302694160084',
            'alamat' => 'Gedung Walikota Jakarta Utara, Jl. Yos Sudarso No. 27-29, Kel. Kebon Bawang, Kec. Tanjung Priok, RT.19/RW.5, Kb. Bawang, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta 14320',
        ]);
        \App\Models\Cabang::create([
            'kode_cabang' => '404',
            'id_vendor' => '76880',
            'vendor' => 'Telkom',
            'nama_cabang' => 'KC Walikota Jakarta Selatan',
            'latitude' => '-6.248086181577543',
            'longitude' => '106.80752377999265',
            'alamat' => 'Gd. Walikotama, Jl. Prapanca Raya No.9, RT.1/RW.1, Petogogan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12170',
        ]);


    }
}
