<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Helpers\DbTablesHelper;
use App\Helpers\ErrorHelper;

class Category extends Model
{
    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'image',
        'description',
        'admin_id',
    ];

    /**
     * @return array|string
     */
    public static function getCategoryList()
    {
        $aCategories = DB::table(DbTablesHelper::CATEGORIES_TABLE)->get()->toArray();

        if ($aCategories) {
            return $aCategories;
        } else {
            return ErrorHelper::NO_CATEGORIES;
        }

    }

    /**
     * обновление данных категории
     * @param Category $id
     * @param array $aData
     * @return mixed
     */
    public function updateCategory(Category $id, array $aData)
    {
        $oCat = Category::find($id);
        if($oCat) {
            return $oCat->update($aData);
        }
    }

}
