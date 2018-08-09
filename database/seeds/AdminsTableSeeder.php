<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Категории',
            'active' => 'true',
            'url' => 'categories',
        ]);
        DB::table('admins')->insert([
            'name' => 'Объявления',
            'active' => 'true',
            'url' => 'items',
        ]);
        DB::table('admins')->insert([
            'name' => 'Пользователи',
            'active' => 'true',
            'url' => 'users',
        ]);
        DB::table('admins')->insert([
            'name' => 'Отчеты',
            'active' => 'true',
            'url' => 'reports',
        ]);
        DB::table('admins')->insert([
            'name' => 'Комментарии',
            'active' => 'true',
            'url' => 'comments',
        ]);
        DB::table('admins')->insert([
            'name' => 'Предложения',
            'active' => 'true',
            'url' => 'offers',
        ]);
        DB::table('admins')->insert([
            'name' => 'Голосования',
            'active' => 'true',
            'url' => 'votes',
        ]);
        DB::table('admins')->insert([
            'name' => 'Насройки',
            'active' => 'true',
            'url' => 'settings',
        ]);


    }
}
