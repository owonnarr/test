<?php

namespace App\Http\Controllers\admin;

use App\Helpers\DbTablesHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Admin;
use File;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use function PHPSTORM_META\type;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;

class CategoryController extends Controller
{
    /**
     * вывод списка категорий
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $aCats = Category::getCategoryList();

            return view('admin.category.list', [
                'categories' => $aCats,
            ]);
    }
    /**
     * Добавление категорий
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function add (Request $request)
    {
        if ( $request->isMethod('post') ) {

            # составляем правила для валидации
            $aRules =  [
                'name' => 'min:4|max:20',
                'description' => 'min:20|max:200',
                'admin_id' => 'requaired',
            ];

            # делаем валидацию данных
            $this->validate($request, $aRules);

            # получаем данные запроса
            $aData = $request->all();
            # работа с изображениями
//            $file = $request->file('image');

//            if (is_file($file)) {
//                # определяем путь к папке для изображений
//                $path = public_path(). "/images/cats/";
//
//                # проверяем существует ли директория, если нет - создаем с правами
//                if (!file_exists($path)) {
//                    mkdir($path, 0755);
//                }
//                # хешируем имя файла
//                $fileName = $file->hashName();
//
//                $file->move($path, $fileName);
//
//                $aData['image'] = $fileName;
//            }

                $aResponseData = [
                    'success' => true,
                    'data' => $aData,
                ];
                Category::create($aData);

                return response()->json($aResponseData);
        }
    }


    /**
     * удаление категории с области контента с помощью aJax
     * @param Category $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */

    public function delete (Category $id)
    {
//            $path = public_path(DbTablesHelper::PATH_IMAGE_CATEGORY);

            if ($id) {
                $nCatId = $id;

//                $file = $path . request()->file('image');

//                if( File::isFile($file) ) {
//
//                    File::delete($file);
//                }

                $aResponse = [
                    'cat' => $nCatId->delete(),
                    'success' => true,
                    'message' => 'Категория успешно удалена',
                    ];

                return response()->json($aResponse);

            } else {
                echo DbTablesHelper::NOT_ID_CATEGORY;
            }
    }

    /**
     * изменение данных категории
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('GET')) {
//
            $oCat = Category::find($id);
            $aCats = Admin::getAdminCategories();

            return view('admin.category.edit', [
                    'category' => $oCat,
                    'cats' => $aCats,
        ]);
        }

        if ($request->isMethod('POST')) {
            $oCategory = Category::find($id);
            # получаем данные запроса
            $aData = $request->all();
            # составляем правила для валидации
            $aRules =  [
                'name' => 'min:4|max:20',
                'description' => 'min:20|max:200',
                'admin_id' => 'requaired',
            ];
            # осуществляем валидацию
            $this->validate($request, $aRules);
            # обновляем данные категории
            $oCategory->update($aData);

            return redirect(route('admin.category'));
        }


    }

    /**
     * @param Admin $rootId
     * @return mixed
     */
    public function getChildCats($rootName = false)
    {
        if ($rootName !== false) {
            $root = new Admin();
            $rootId = $root->getRootIdCategory($rootName);

            $aData = [];

            if ( $rootId ) {
                $aData['childs'] = Admin::getChildCategories($rootId);
                $aData['rootId'] = $rootId;
//                dd($aData);
               return view('layouts.admin-layouts')->with('aData', $aData);
            }
        }
    }

}