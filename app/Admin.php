<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Helpers\DbTablesHelper;

class Admin extends Model
{
    public $timestamps = false;
    protected $table = 'admins';

    /**
     * получаем список доступных категорий в области контента
     * @return collection|string
     */
    public static function getAdminCategories()
    {
        $nameTable = DbTablesHelper::ADMIN_CATEGORIES;

        $aCats= DB::table($nameTable)->where('active', 'true')->get();

        if (!empty($aCats)) {
            return $aCats;
        } else {
            return "Проблема выборки из бд, таблицы $nameTable";
        }
    }

    /**
     * @param $id - родительской категории
     * @return bool
     */
    public static function getChildCategories($id)
    {
        # получаем объект родительской категории
        $oRootCat = Admin::find($id);

        if (!empty($oRootCat)) {
            return $oRootCat->category;
        } else {
            return false;
        }

    }

    /**
     * @param $name - имя родительской категории
     * @return int - id родительской категории
     */
    public function getRootIdCategory($name)
    {
        $nameTable = DbTablesHelper::ADMIN_CATEGORIES;

        $rootId = DB::table($nameTable)->where('url', $name)->pluck('id')->toArray();
        $nRootId = intval($rootId);

        return $nRootId;
    }

    /**
     * иконки для меню в сайдбаре админ панели
     * @return array
     */
    public static function getIcon()
    {
        return [
            '0' => 'fa fa-th-list',
            '1' => 'fa fa-users',
            '2' => 'fa fa-files-o',
            '3' => 'fa fa-commenting-o',
            '4' => 'fa fa-bullseye',
            '5' => 'fa fa-rss',
            '6' => 'fa fa-bar-chart',
            '7' => 'fa fa-cogs',
        ];
    }

    /**
     * отношение один ко многим (у одной категории может быть много дочерних категорий)
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function category()
    {
        return $this->hasMany('App\Category', 'admin_id', 'id');
    }
}
