<?php

use Illuminate\Database\Seeder;

class SolusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Solusi::insert([
            [
              'penyakit_id' =>'1',
             'solusi_medis'=>
             '
                 1. Krim koertikosteroid(hodrokortisan,betametason,desonide,mometasonic,triamcinolone) dapat mengurangi ruam dan eksim untuk mengendali-kan gatal-gatal.
                 2. Disarankan pula sering mandi, jangan terlalu kuat dalam menggosok kulit dengan handuk dan oleskan minyak dan pelumnas yang tidak berbau.
                 3. Pelembap kulit yaitu anthihistamin, digunakan mengontrol gatal yang ditimbulkan.

             ',
             'solusi_non_medis'=>
             '
                 1. Rimpang jahe dan lobak untuk meredakan peradangan kulit. Parut rimpang jahe kemudian diperas dan dicampur dengan parutan lobak. Oleskan pada kulit sebanyak dua kali sehari.
                 2. Selain itu dapat menggunakan 1sdt minyak goreng, serta 3 ruas kunyit berukurang besar sebesar ibu jari tangan. Haluskan ketiga bahan tadi dan panaskan. Ketika sudah hangat oleh pada bagian yang mengalami eksim, lalu bungkus dengan kain kasa hingga mengering. Lakukan hal tersebut sebanyak dua kali sekali
             ',
             'keterangan'=>
             '
             Perhatian!!
             1. Hal yang harus dihindari penyakit eksim sangat rentan terhadap beberapa perubahan kondisi. Sehingga harus mendapatkan perlakuan khusus supaya dapat cepat membaik.
             Beberapa kondisi yang dapat memperburuk penyakit kulit eksim: Tekanan,Perubahan suhu atau kelembapan, Bakteri infeksi kulit, Kontak jaringan yang bersifat iritan.

             2. Pencegahan. Menghindari kulit kering dapat menjadi faktor untuk membantu mencegah serangan penyakit kulit eksim. Cara pencegahan kulit eksim:Mengurangi frekuensi mandi,Menggunakan air hangat untuk mandi, Hindari penggunaan sabun pada eksim, Hindari pakaian ketat,Hindari makanan alergi,Jangan menggunakan sabun deterjen yang keras, Memperhatikan obat kosmetik, Jaga keseimbangan berat badan, Tidak menggaruk kulit yang sakit.

             '
            ],
            [
            'penyakit_id'=>'2',
            'solusi_medis'=>'
            1. Bisa menggunakan sale poles(topical).
            2. Obat telan(Sistematik).
            3. Atau dapat dengan penyiaran sinar UVB.
            ',
            'solusi_non_medis'=>'
            1. Kayu manis dan masker madu.
            2. Susu dan madu.
            3. Putih telur.
            4. Pepaya.
            5. mandi Uap.
            6. Alpukat madu.
            ',
            'keterangan'=>'
            1. Pencegahan. Penyakit ini sebenarnya agak sulit, maka akan sulit untuk sembuh. Hal yang dapat mengurangi penyebaran penyakit kulit ini: Jauhkan pikiran dari setres percaya diri dan semangat, Jaga pola makan teratur, Tidur yang teratur, Konsumsi makanan yang bergizi.
            '

            ],
            [
                'penyakit_id'=>'3',
                'solusi_medis'=>'
                1. Kulit wajah harus bersih saat beristirahat dirumah.
                2. Jangan memecahkan jerawat dan jangan sering disentuh.
                3. Hindari pemakaian kosmetik rias saat tidur.
                4. Pembersih kulit wajah harus sesuai jenis kulit.
                ',
                'solusi_non_medis'=>'
                Dengan gamat/teripang yang kaya akan kolegen dan gamapeptide
                ',
                'keterangan'=>'
                    Perhatian!!

                    1. Penyebab  jerawat:Produksi minyak yang berlebihan, Adanya sumbatan lapisan kulit mati pada pori-pori yang terinfeksi, Bakteri,Kosmetik,Obat-obatan,Telepon genggam,Stress,Faktor genetik turunan orang tua, Faktor hormon seperti saat pubertas menginjak belia,Adanya iritasi kulit,Pil KB.
                '
            ],
            [
                'penyakit_id'=>'4',
                'solusi_medis'=>'
                 1. Istirahat untuk memperbaiki daya tahan tubuh.
                 2. Mandi dengan air yang ditambahkan larutan antiseptic seperti larutan PK, atau gentian violet.
                 3. Menjaga nutrisi yang cukup.
                 4. Obat anti deman(jika demam tinggi).
                 5. Obat mengurangi gatal atau bisa obat luar berupa bedak salisil,caladin, dll.
                 6. Obat antivirus seperti Asiklovir dioleskan pada ruam Asiklovir tablet, namun tidak rutin pemaikaian.
                 7. Antibiotika
                ',
                'solusi_non_medis'=>'
                 1. Jus buah mengkudu.
                 2. Kacang hijau.
                 3. Temulawak.
                 4. Jagung muda.
                ',
                'keterangan'=>'
                    Perhatian

                    1. Pencegahan: Imunisasi aktif diatas 10 tahun kecuali atas permintaan dapat diberikan pada usia >12, Imunisasi pasif diberikan pada kasus daya tahan buruk.
                '
            ],
            [
                'penyakit_id'=>'5',
                'solusi_medis'=>'
                1. Pemberian cairan cukup Vitamin A, suplemen nutrisi, obat anti demam, obat batuk dan pilek.
                2. Rawat inap bila demam tinggi (<39 derajat Celcius), dehidrasi, kejang ,asupan makanan sulit, atau adamya komplikasi
                ',
                'solusi_non_medis'=>'Tidak ada',
                'keterangan'=>' Perhatian!!
                1. Pencegahan: Vaksinasi Campak(merupakan bagian dari imunisasi rutin),Imunisasi campak diberikan pada bayi usia 9 bulan, Vaksin kombinasi MMR.'
            ],
            [
                'penyakit_id'=>'6',
                'solusi_medis'=>'
                1.  Paracetamol untuk meredakan rasa nyeri.
                2. Antivirus (Aseklofir, Famsiklofir, Valaciclovir) untuk menghambat perkembangan virus.
                3. Steroid untuk mengurangi peradangan dan mempercepat penyembuhan lepuhan.
                ',
                'solusi_non_medis'=>'
                1. Mengompres bagian yang melepuh dengan es batu.
                2. Konsumsi buah Jambu Biji sirsak, pepaya, tomat merah.
                ',
                'keterangan'=>'
                 Perhatian!!
                 1. Pencegahan: Dapat dicegah jika anda tidak memiliki cacar air, Memiliki kekebala tubuh, Vaksinasi
                 2. Perawatan: Tidak menggosok dengan benda terlalu keras, Hindari pecahanya gelombang
                '
            ],
             [
                'penyakit_id'=>'7',
                'solusi_medis'=>'
                1.Radioterapi.
                2.Kemoterapi
                3. Operasi.
                ',
                'solusi_non_medis'=>'Tidak ada',
                'keterangan'=>'
                Perhatian!!
                1. Pencegahan: Hindari sinar matahari
                '
            ],
            [
                'penyakit_id'=>'8',
                'solusi_medis'=>'Antibiotik topikal(lokal) berupa salep dan tablet
                ',
                'solusi_non_medis'=>'Tidak ada',
                'keterangan'=>'Perhatian!!
                1. Pencegahan: Mandi dengan sabun antisepctic, Gunakan sarung tangan saat mengoleskan antibiotic.
                '
            ],
            [
                'penyakit_id'=>'9',
                'solusi_medis'=>'
                 1.Paracetamol.
                 2.Jika masih kecil masih bisa digunakan salep antibiotik(penisilin).
                ',
                'solusi_non_medis'=>'
                1. Mahkota bunga teratai diikat, abunya bisa digunakan sebagai obat, Abu ini digunakan sebagai obat luar.',
                'keterangan'=>'Perhatian!!
                1.Pencegahan: Jangan menggaruk apabila mengalami biang keringat, akan memudahkan timbulnya bisul.
                2. Perawatan: Bila sudah abses, sebaiknya nanah dikeluarkan.
                '
            ],
            [
                'penyakit_id'=>'10',
                'solusi_medis'=>'1. Kemoterapi kusta(multiobat).
                ',
                'solusi_non_medis'=>'Tidak ada',
                'keterangan'=>'Perhatian!!
                1. Pencegahan: Tingkatan kekebalan tubuh.
                '
            ],
            [
                'penyakit_id'=>'11',
                'solusi_medis'=>'
                 1. Salep.
                 2. Jika menyebar sebaiknya ke dokter.
                ',
                'solusi_non_medis'=>'Tumbuk halus ripang, dan bawang putih(1ripang dan 4bawang putih) haluskan sampai jadi bubur. Oles dan tempelkan pada bagian yang sakit. untuk panu sediakan ripang segar, cacah hingga timbul seratnya, gosokan halus pada bagian yang sakit.',
                'keterangan'=>'Perhatian!!
                1. Pencegahan: Konsumsi Vitamin C.
                '
            ],
            [
                 'penyakit_id'=>'12',
                    'solusi_medis'=>'1. Anti jamur mengandung Mikonazol dan Kloritomazol.',
                    'solusi_non_medis'=>'1.Ambil daun,kulit,batang atau akar salam sekadarnya. Bersihkan, lantas giling halus hingga menjadi adonan bubur, oleskan pada yang gatal lalu dibalut.
                    2. Daun biduri serta minyak kelapa secukupnya. Daun diolesi minyak kelapa, lalu dilayukan diatas pengapian. Tempel ke sisi kulit yang gatal dan luka/gatal.
                    3. Tumbuk halus ripang, dan bawang putih(1ripang dan 4bawang putih) haluskan sampai jadi bubur. Oles dan tempelkan pada bagian yang sakit. Untuk kurap yang menahun tambah, wamuan tadi dengan cuka.
                    ',
                 'keterangan'=>''

            ],
            [
                'penyakit_id'=>'13',
                'solusi_medis'=>'1. Anti jamur mengandung Mikomazol dan Kloritomazol',
                'solusi_non_medis'=>'
                1.Ambil daun,kulit,batang atau akar salam sekadarnya. Bersihkan, lantas giling halus hingga menjadi adonan bubur, oleskan pada yang gatal lalu dibalut.
                2. Daun biduri serta minyak kelapa secukupnya. Daun diolesi minyak kelapa, lalu dilayukan diatas pengapian. Tempel ke sisi kulit yang gatal dan luka/gatal.
                ',
                'keterangan'=>''
            ],
         ]);

    }
}
