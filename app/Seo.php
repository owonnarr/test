<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Helpers\DbTablesHelper;

class Seo extends Model
{
    public $timestamps = false;
    protected $table ='seo';

    protected $fillable = [
        'route_name',
        'h1',
        'title',
        'description',
    ];

    /**
     * получаем meta данные загружаемой страницы
     * @param string $sRouteName - имя роута
     */

    public function getMetaPage(string $sRouteName)
    {
        if ($sRouteName) {
            $aMetaPage = DB::table(DbTablesHelper::SEO_TABLE)->get('h1', 'title', 'description')->where($sRouteName);
        }
    }

    /**
     * @param string $sRouteName - имя роута по короторому показывается страница
     * @param array $aMeta - мета данные страницы (title, h1, description)
     * @return bool
     */
    public function setMetaPage(string $sRouteName, array $aData)
    {
        if (is_array($aData) && !empty($aData)) {
            foreach ( $aData as $k => $meta) {
                $sTitle = $meta['title'];
                $sH1 = $meta['h1'];
                $sDescription = $meta['description'];
            }
        } else {
            echo 'Пожалуйста укажите все данные для страницы';
        }

        if ($sRouteName) {
            $sName = $sRouteName;
        } else {
            echo 'Не пришло имя маршрута страницы';
        }

        $result = DB::table(DbTablesHelper::SEO_TABLE)->insert($sName, $sTitle, $sH1, $sDescription);

        if (!$result) {
            echo 'Ошибка внесения данных в таблицу';
        } else {
            return $result;
        }
    }
}
