<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        DB::table('locations')->insert([
            'name' => 'стена со шкафом',
            'description' => 'Обветшалая стена, покрытая трещинами. Некотоыре намтолько большие что через них видно снег.
                                по правую руку расположен старый, перекосившийся шкаф. Ты пробуешь загглянуть внутрь, но на удивление, двери закрыты.',
            'img' => asset('public/storage/img/locations/1.jpg'),

        ]);

        // 2
        DB::table('locations')->insert([
            'name' => 'стена с двеью',
            'description' => 'Дверь с ржавыми петлями выглядит так, будто ее не октрывали десятилетиями. Она закрыта на амбарный замок изнутри',
            'img' => asset('public/storage/img/locations/2.jpg'),
        ]);
        // 3
        DB::table('locations')->insert([
            'name' => 'стена окном',
            'description' => 'Окно заколоено, изнутри. На одном из ржавых гвоздей висит покрытый коррозией ключ.',
            'img' => asset('public/storage/img/locations/3.jpg'),
        ]);
        // 4
        DB::table('locations')->insert([
            'name' => 'стена с пауком',
            'description' => 'Из угла комнаты на тебя смотрит паук. под лапами у него несовместимо большой кокон обмотаный паутиной.',
            'img' => asset('public/storage/img/locations/4.jpg'),
        ]);
        // 5
        DB::table('locations')->insert([
            'name' => 'шкаф',
            'description' => 'Ты в шкафе',
            'img' => asset('public/storage/img/locations/5.jpg'),
            'required_item_id' => 1
        ]);
        // 6
        DB::table('locations')->insert([
            'name' => 'возле задней стены халупы',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/6.jpg'),
        ]);

        // 7
        DB::table('locations')->insert([
            'name' => 'середина двора',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/7.jpg'),
        ]);


        // 8
        DB::table('locations')->insert([
            'name' => 'яма',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/8.jpg'),
        ]);


        // 9
        DB::table('locations')->insert([
            'name' => 'дно ямы',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/9.jpg'),
        ]);


        // 10
        DB::table('locations')->insert([
            'name' => 'темный проход',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/10.jpg'),
        ]);


        // 11
        DB::table('locations')->insert([
            'name' => 'продолжение темного прохода',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/11.jpg'),
        ]);


        // 12
        DB::table('locations')->insert([
            'name' => 'секретная комната',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/12.jpg'),
        ]);


        // 13
        DB::table('locations')->insert([
            'name' => 'узкий лаз',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/13.jpg'),
        ]);


        // 14
        DB::table('locations')->insert([
            'name' => 'Живая изгородь',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/14.jpg'),
        ]);


        // 15
        DB::table('locations')->insert([
            'name' => 'Молодец вы выиграли в Халупу',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/15.jpg'),
        ]);


        // 16
        DB::table('locations')->insert([
            'name' => 'скала',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/16.jpg'),
        ]);


        // 17
        DB::table('locations')->insert([
            'name' => 'деревянная изгородь',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/17.jpg'),
        ]);


        // 18
        DB::table('locations')->insert([
            'name' => 'густой кустарник',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/18.jpg'),
        ]);


        // 19
        DB::table('locations')->insert([
            'name' => 'темный угол двора',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/19.jpg'),
        ]);


        // 20
        DB::table('locations')->insert([
            'name' => 'бочка',
            'description' => ' Loerum ibpum pater noster ergo bibamus ya idiot ubeyte menyma ktonibud.',
            'img' => asset('public/storage/img/locations/20.jpg'),
        ]);



    }
}
