<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactForm;

class ContactFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactForm::factory()->count(200)->create();
        // factory(ContactForm::class, 200)->create();//200個のダミーデータ生成
        //
        // DB::table('contact_forms')->insert([
        //     [
        //         'your_name' => 'nomad',
        //         'title' => '求人応募',
        //         'email' => 'bbana81@gmail.com',
        //         'url' => 'https://melon.com',
        //         'gender' => 0,
        //         'age' => 4,
        //         'contact' => '就職活動中'
        //     ]
        // ]);
    }
}
