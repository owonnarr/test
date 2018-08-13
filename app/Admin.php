<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Helpers\DbTablesHelper;
use App\Helpers\ErrorHelper;

class Admin extends Model
{
    public $timestamps = false;
    protected $table = 'admins';

    /**
     * получаем список доступных категорий в области контента
     * @return bool|\Illuminate\Support\Collection
     */
    public static function getAdminCategories()
    {
        $nameTable = DbTablesHelper::ADMIN_CATEGORIES;

        $aCats= DB::table($nameTable)->where('active', 'true')->get();

        if (!empty($aCats)) {
            return $aCats;
        } else {
            return false;
        }
    }

    /**
     * список дочерних категорий
     * @param $id - родительской категории
     * @return bool
     */
    public static function getChildCategories($id)
    {
        # получаем объект родительской категории
        $oRootCat = Admin::where('id', $id)->first();

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

        $nRootId = $rootId[0];

        return $nRootId;
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
