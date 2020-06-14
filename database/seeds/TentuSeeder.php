<?php

use Illuminate\Database\Seeder;

class TentuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tentu::insert([
            [
                'gejala_id'=>'1',
                'penyakit_id'=>'1',
                'solusi_id'=>'1'
            ],
            [
                'gejala_id'=>'2',
                'penyakit_id'=>'2',
                'solusi_id'=>'2'
            ],
            [
                'gejala_id'=>'3',
                'penyakit_id'=>'3',
                'solusi_id'=>'3'
            ],
            [
                'gejala_id'=>'4',
                'penyakit_id'=>'4',
                'solusi_id'=>'4'
            ],
            [
                'gejala_id'=>'5',
                'penyakit_id'=>'5',
                'solusi_id'=>'5'
            ],
            [
                'gejala_id'=>'6',
                'penyakit_id'=>'6',
                'solusi_id'=>'6'
            ],
            [
                'gejala_id'=>'7',
                'penyakit_id'=>'7',
                'solusi_id'=>'7'
            ],
            [
                'gejala_id'=>'8',
                'penyakit_id'=>'8',
                'solusi_id'=>'8'
            ],
            [
                'gejala_id'=>'9',
                'penyakit_id'=>'9',
                'solusi_id'=>'9'
            ],
            [
                'gejala_id'=>'10',
                'penyakit_id'=>'10',
                'solusi_id'=>'10'
            ],
            [
                'gejala_id'=>'11',
                'penyakit_id'=>'11',
                'solusi_id'=>'11'
            ],
            [
                'gejala_id'=>'12',
                'penyakit_id'=>'12',
                'solusi_id'=>'12'
            ],
            [
                'gejala_id'=>'13',
                'penyakit_id'=>'13',
                'solusi_id'=>'13'
            ]
        ]);
    }
}
