<?php
/**
 * Created by PhpStorm.
 * User: owonnarr
 * Date: 09.08.18
 * Time: 12:20
 */

namespace App\Helpers;


class ErrorHelper
{
    const ERR_AJAX = 'Запрос пришел не Ajax';
    const NOT_ID_CATEGORY = 'Ошибка. Проблема с запросом, или не передан параметр ID - категории';
    const NO_CATEGORIES = 'К сожалению ни одной категории еще не создано';
    const ERR_CREATE_CATEGORY = 'Ошибка создания категории';
    const CATEGORY_NOT_DEFINED = 'Ошибка. Категория не определена';
}