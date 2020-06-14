<?php

use Illuminate\Database\Seeder;

class Penyakitseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Penyakit::insert([
            [
                'nama_penyakit'=>'Eksim(Determitis)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Gangguan Inflamasi',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Peradangan Kronis',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Gangguan Inflamasi',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Jerawat(Acne)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Gangguan Inflamasi',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Cacar Air(Varicella Simplex)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Virus',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Campak(Rubeola or Measles)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Virus',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Cacar Ular(Herpes Zoster)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Virus',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Kanker Kulit',
                'nama_medis'=>'zain',
                'keterangan'=>'Kanker',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Infeksi Kulit(Impetigo)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Bakteri',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Bisul(Furunkel, Karbunkel)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Bakteri',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Kusta(Hensen)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Bakteri',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Panu(Pityriasis Versicolor)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Jamur',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Kudis(Scabies)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Jamur',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_penyakit'=>'Kudis(Tinea)',
                'nama_medis'=>'zain',
                'keterangan'=>'Karena Adanya Jamur',
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
