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
            'icon' => 'fa fa-th-list',
        ]);
        DB::table('admins')->insert([
            'name' => 'Пользователи',
            'active' => 'true',
            'url' => 'users',
            'icon' => 'fa fa-users',
        ]);
        DB::table('admins')->insert([
            'name' => 'Отчеты',
            'active' => 'true',
            'url' => 'reports',
            'icon' => 'fa fa-files-o',
        ]);
        DB::table('admins')->insert([
            'name' => 'Комментарии',
            'active' => 'true',
            'url' => 'comments',
            'icon' => 'fa fa-commenting-o',
        ]);
        DB::table('admins')->insert([
            'name' => 'Предложения',
            'active' => 'true',
            'url' => 'offers',
            'icon' => 'fa fa-bullseye',
        ]);
        DB::table('admins')->insert([
            'name' => 'Голосования',
            'active' => 'true',
            'url' => 'votes',
            'icon' => 'fa fa-bar-chart',
        ]);
        DB::table('admins')->insert([
            'name' => 'Насройки',
            'active' => 'true',
            'url' => 'settings',
            'icon' => 'fa fa-cogs',
        ]);


    }
}
