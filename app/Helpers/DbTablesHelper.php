<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 10.07.18
 * Time: 10:44
 */

namespace App\Helpers;

class DbTablesHelper
{

    const ERR_AJAX = 'Запрос пришел не Ajax';

    const PATH_IMAGE_CATEGORY = '/images/cats/';

    const NO_CATEGORIES = 'К сожалению ни одной категории еще не создано';
    const ERR_CREATE_CATEGORY = 'Ошибка создания категории';
    const CATEGORY_NOT_DEFINED = 'Ошибка. Категория не определена';
    const NOT_ID_CATEGORY = 'Ошибка. Проблема с запросом, или не передан параметр ID - категории';
    # табл
    #ицы
    const SEO_TABLE = 'seo';
    const CATEGORIES_TABLE = 'categories';
    const USERS_TABLE = 'users';
    const COMPANIES_TABLE = 'companies';
    const ITEMS_TABLE = 'items';
    const ADMIN_CATEGORIES = 'admins';
}