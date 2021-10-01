<?php

use App\Pasien;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'16090014',
            'nama'=>'Abu Muslih Assulkhani',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1997-05-08',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Jl. Raya Balamoa Timur Tarub Kab.Tegal',
            'no_hp'=>'085385723130',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'17090092',
            'nama'=>'Mokhamad Wijaya',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2000-09-17',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Jl. Mujaer No.12 Tegal Sari',
            'no_hp'=>'085810555362',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'17090076',
            'nama'=>'Anisa Pandu Sabillah ',
            'no_identitas' => '',
            'tempat_lahir'=>'Cilacap',
            'tanggal_lahir'=>'1999-08-23',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Jl. Lingkar Timur rt.02/rw.13',
            'no_hp'=>'085866565620',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'18090124',
            'nama'=>'Eli Krisnawati',
            'no_identitas' => '',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'1996-11-30',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Jl. Pagejugan Kab.Brebes',
            'no_hp'=>'081290492489',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'16090112',
            'nama'=>'Maulana Abdul Siddiq',
            'no_identitas' => '',
            'tempat_lahir'=>'Jakarta',
            'tanggal_lahir'=>'1998-05-23',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Jl. Dr. Cipto Mangunkusumo Rt.005/001 Krandon Margadana',
            'no_hp'=>'082324653228',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090001',
            'nama'=>'RAMANG DARUSSALAM',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2001-07-21',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'083893484766',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090002',
            'nama'=>'M. ADE NOVAL FIRMANSYAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2002-06-16',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'085747576437',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090003',
            'nama'=>'AGUNG ISWANTO',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1999-03-25',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal. Tegal Timur. Mintaragen',
            'no_hp'=>'082322195570',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090004',
            'nama'=>'MOHAMAD WILDAN',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1998-10-03',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'DS.KERTAYASA RT03 RW 04 KECAMATAN KRAMAT KABUATEN TEGAL JAWA TENGAH',
            'no_hp'=>'08986670963',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090005',
            'nama'=>'ADITYA HERI FEBRIANTO',
            'no_identitas' => '',
            'tempat_lahir'=>'Pemalang ',
            'tanggal_lahir'=>'2000-02-23',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Pemalang ',
            'no_hp'=>'085225161807',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090006',
            'nama'=>'HANIFAN HUSEIN ISNANTO',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2000-04-10',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'082325288088',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090007',
            'nama'=>'IKHLASUL AMAL AWALUDIN',
            'no_identitas' => '',
            'tempat_lahir'=>'Pekalonggan',
            'tanggal_lahir'=>'2000-06-30',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Pekalonggan',
            'no_hp'=>'0895423001065',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090008',
            'nama'=>'NAIMATUL MAUDIYAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'2000-06-22',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Pasarbatang',
            'no_hp'=>'083861346966',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090009',
            'nama'=>'ESY NURJANAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'1999-06-02',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Brebes',
            'no_hp'=>'089690405979',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090010',
            'nama'=>'ARIFFULAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Pemalang ',
            'tanggal_lahir'=>'2001-01-06',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Pemalang ',
            'no_hp'=>'085290443521',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090011',
            'nama'=>'AIDA NUR SYA\'BANI',
            'no_identitas' => '',
            'tempat_lahir'=>'Kab. Tegal',
            'tanggal_lahir'=>'1999-11-29',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Kab. Tegal',
            'no_hp'=>'082137963590',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090012',
            'nama'=>'Arief Rachman',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2001-05-09',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'087894475033',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090013',
            'nama'=>'Getar Dewantara',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2001-05-03',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'082314949881',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090014',
            'nama'=>'MUHAMMAD ADE VIKI',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'1998-10-01',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Tegal',
            'no_hp'=>'081804729618',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090015',
            'nama'=>'AZZAH FITRIATUN NIZZAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2000-02-05',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Tegal',
            'no_hp'=>'082326012982',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090016',
            'nama'=>'MOHAMMAD PRANA DHITYA RIZKI ALDI',
            'no_identitas' => '',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'2001-05-29',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Brebes',
            'no_hp'=>'085642001574',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090017',
            'nama'=>'KHAEPAH',
            'no_identitas' => '',
            'tempat_lahir'=>'Brebes',
            'tanggal_lahir'=>'2001-08-12',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Brebes',
            'no_hp'=>'085600802491',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090018',
            'nama'=>'AINUN MADJID',
            'no_identitas' => '',
            'tempat_lahir'=>'Bekasi',
            'tanggal_lahir'=>'1996-07-06',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Bekasi',
            'no_hp'=>'081329737948',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090019',
            'nama'=>'ADI SANGJAYA',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2000-11-27',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>' Jl. Bogares Lor Ds. Bogares Lor RT 05 RW 01 Kec. Pangkah Kab. Tegal',
            'no_hp'=>'085780270260',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
                
            Pasien::create( [
            'kategori_pasien' => 'Pasien Civitas PHB',
            'civitas' => 'Mahasiswa',
            'nim_nipy'=>'19090020',
            'nama'=>'HANIF ARKHAN AL ASYRAFI',
            'no_identitas' => '',
            'tempat_lahir'=>'Tegal',
            'tanggal_lahir'=>'2001-03-22',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Gresik jawatimur',
            'no_hp'=>'085727922474',
            'usia' => 20,
            'golongan_darah' => 'A',
            ] );
    }
}
