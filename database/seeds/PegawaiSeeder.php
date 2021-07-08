<?php

use App\Pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::create( [
            'nipy'=>'10.010.070',
            'nama'=>'Meyliya Qudriani',
            'tempat_lahir'=>'Pati',
            'tanggal_lahir'=>'1987-05-11',
            'alamat'=>'Jl. Slerok Tegal Timur',
            'angkatan'=>'2020',
	        'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'085786222334',
            'jalur'=>'Reguler',
            'email'=>'meyliya8@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'03.020.443',
            'nama'=>'Vivin Avianti Oktavia',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1997-10-24',
            'alamat'=>'Jl. Gede giri No.27 rt 29 rw 7 pegirikan, talang',
            'angkatan'=>'2020',
	        'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'0895422824354',
            'jalur'=>'Reguler',
            'email'=>'meyliya@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'11.009.064',
            'nama'=>'Novia Ludha Arisanti',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-08-05',
            'alamat'=>'Griya Bahari Sentosa Blok D2 No. 4 Rt. 04/Rw.07 Kelurahan Dampyak Kecamatan Kramat',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'085385749380',
            'jalur'=>'Reguler',
            'email'=>'novia@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'11.018.383',
            'nama'=>'Farida Oktavia',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1977-10-04',
            'alamat'=>'Perum Puri Lestari no 6 Kel Kalinyamat Wetan Tegal Selatan',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'085742922211',
            'jalur'=>'Reguler',
            'email'=>'farida@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'12.019.437',
            'nama'=>'Arda Kusuma Dewi',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1997-04-17',
            'angkatan'=>'2020',
            'alamat'=>'Desa pesayangan RT.13/3 no.30 kec.Talang Kab.Tegal',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087827504268',
            'jalur'=>'Reguler',
            'email'=>'arda@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'11.018.385',
            'nama'=>'Joko Purwanto',
            'tempat_lahir'=>'Cilacap',
            'tanggal_lahir'=>'1971-11-11',
            'alamat'=>'Jl. Angsana 3 No. 1, Mejasem Barat Kec.Kramat Kab.Tegal',
            'angkatan'=>'2020',
	        'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'082324820202',
            'jalur'=>'Reguler',
            'email'=>'joko@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
             
        Pegawai::create( [
            'nipy'=>'05.006.022',
            'nama'=>'Umi Baroroh',
            'tempat_lahir'=>'Bogor',
            'tanggal_lahir'=>'1984-01-20',
            'alamat'=>'Perumahan Ndalem Samiaji no.D5-02, Keturen',
            'angkatan'=>'2020',
	        'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'085641704313',
            'jalur'=>'Reguler',
            'email'=>'joko@gmail.com',
            'nama_ortu'=>'Sholihin'
             ] );
             
        Pegawai::create( [
            'nipy'=>'10.009.060',
            'nama'=>'Tuti Ariani',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1987-08-11',
            'alamat'=>'Desa pesayangan RT.13/3 no.30 kec.Talang Kab.Tegal',
            'angkatan'=>'2020',
	        'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087827504280',
            'jalur'=>'Reguler',
            'email'=>'tuti@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'05.021.515',
            'nama'=>'Nova Avianti Rahayu',
            'tempat_lahir'=>'Ciamis',
            'tanggal_lahir'=>'1993-09-05',
            'alamat'=>'Jl. Melati Gg.II No.4, Kejambon, Kec.Tegal Timur, Kota Tegal',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087827507880',
            'jalur'=>'Reguler',
            'email'=>'nova@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'02.013.141',
            'nama'=>'Tias Dwi Arti',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1987-10-30',
            'alamat'=>'Pesantunan rt 4/rw 10 Wanasari, Brebes',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087856504280',
            'no_hp'=>'087827507880',
            'jalur'=>'Reguler',
            'email'=>'tias@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'02.013.140',
            'nama'=>'Istiqomah Dwi Andari ',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1987-12-03',
            'alamat'=>'Jln. Raya II pagongan Rt 03/03 kec. dukuhturi kab.tegal',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'085856504280',
            'jalur'=>'Reguler',
            'email'=>'istiqomahs@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'03.021.508',
            'nama'=>'Ilma Ratih Zukrufiana',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1998-08-28',
            'alamat'=>'Pesantunan rt 4/rw 10 Wanasari, Brebes',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087856504280',
            'jalur'=>'Reguler',
            'email'=>'istiqomahs@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'05.013.147',
            'nama'=>'Seventina Nurul Hidayah',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1986-08-17',
            'alamat'=>'Jl.Imam Bonjol RT 02 RW 01 Gang 24 Kel.Kudaile Kec.Slawi Kab.Tegal',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'Islam',
            'no_hp'=>'087899504280',
            'jalur'=>'Reguler',
            'email'=>'seventina@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'11.004.011',
            'nama'=>'Ulfatul Latifah',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1980-01-05',
            'alamat'=>'Jl. Gatot subroto Rt.04/Rt 01 sumurpanggang kota tegal',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'islam',
            'no_hp'=>'082899504280',
            'jalur'=>'Reguler',
            'email'=>'ulfatul@gmail.com',
            'nama_ortu'=>'Sholihin'
             ] );
             
        Pegawai::create( [
            'nipy'=>'05.013.157',
            'nama'=>'Ratih Sakti Prastiwi',
            'tempat_lahir'=>'Yogyakarta',
            'tanggal_lahir'=>'1990-02-04',
            'alamat'=>'Jalan Kotabaru V No. 12 RT 02 RW 20 Brebes',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'islam',
            'no_hp'=>'087899504280',
            'jalur'=>'Reguler',
            'email'=>'ratih@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'03.03.012.109',
            'nama'=>'Nora Rahmanindar',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-11-13',
            'alamat'=>'Jl.Jend Gatot Subroto no.3 Rt 4/2 Dukuhsalam-Slawi-Tegal ',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'islam',
            'no_hp'=>'087891234280',
            'jalur'=>'Reguler',
            'email'=>'nora@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'05.010.068',
            'nama'=>'Desy Fitrianingsih',
            'tempat_lahir'=>'Kendawangan',
            'tanggal_lahir'=>'1987-06-03',
            'alamat'=>'Aspol R soeprapto jln ks tubun, rt/rw 006/002 kel.Debong Tengah, kec. Tegal selatan',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'islam',
            'no_hp'=>'083861234280',
            'jalur'=>'Reguler',
            'email'=>'desy@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'10.010.071',
            'nama'=>'Umriaty',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1986-08-28',
            'alamat'=>'Perum Ndalem Kinasih Jln Gatot Subroto Rt4 Rw 1, Sumurpanggang, Kec Margadana Kota Tegal',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Perempuan',
            'agama'=>'islam',
            'no_hp'=>'083861373666',
            'jalur'=>'Reguler',
            'email'=>'umriaty@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'05.016.291',
            'nama'=>'Arif Rakhman',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-11-09',
            'alamat'=>'Jalan Kapt. Samadikun, Margadana',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'081911401657',
            'jalur'=>'Reguler',
            'email'=>'arif@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'08.017.343',
            'nama'=>'Lukmanul Khakim',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1990-03-09',
            'alamat'=>'Jalan Poso, Tegal Timur',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'083123654987',
            'jalur'=>'Reguler',
            'email'=>'lukmanul@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'08.015.265',
            'nama'=>'M.Taufik Qurohman',
            'tempat_lahir'=>'Purwokerto',
            'tanggal_lahir'=>'1984-05-09',
            'alamat'=>'Jalan Kartini, Tegal Timur',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'083123654135',
            'jalur'=>'Reguler',
            'email'=>'taufik@gmail.com',
            'nama_ortu'=>'Sholihin'
	        ] );
        Pegawai::create( [
            'nipy'=>'10.007.032',
            'nama'=>'Ginanajar Wiro Sasmito',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'1984-10-09',
            'alamat'=>'Brebes, Jawa Tengah',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'085865268215',
            'jalur'=>'Reguler',
            'email'=>'ginanjar@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'09.016.307',
            'nama'=>'Muhammad Fikri Hidayatullah',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1988-12-05',
            'alamat'=>'Keturen, Tegal Selatan',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'085868999245',
            'jalur'=>'Reguler',
            'email'=>'fikri@gmail.com',
            'nama_ortu'=>'Sholihin'
            ] );
            
        Pegawai::create( [
            'nipy'=>'08.015.222',
            'nama'=>'Slamet Wiyono',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1985-09-03',
            'alamat'=>'Tegal, Jawa Tengah',
            'angkatan'=>'2020',
            'jenis_kelamin'=>'Laki-laki',
            'agama'=>'islam',
            'no_hp'=>'089663239223',
            'jalur'=>'Reguler',
            'email'=>'slamet@gmail.com',
            'nama_ortu'=>'Sholihin'
	  ] );
    }
}
