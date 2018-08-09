@extends('layouts.admin-layouts')

@section('content')
    @include('admin.category.create-modal')
    <div class="container">
        <h1 class="page-header">Список категорий</h1>
        <div class="col-md-12">
            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success">ДОБАВИТЬ КАТЕГОРИЮ</button>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12">
            <div class="table-responsive">
                    <?php if ( is_string($categories)) {
                        echo $categories;
                }?>
                <table id="table_cats" class="table table-hover">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Имя категории</th>
                        <th>Описание</th>
                        <th>Изменить</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if( is_array($categories) )
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a title="редактировать" href="/admin/category/{{$category->id}}/edit">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a data-id="{{ $category->id }}" data-name='{{ $category->name }}' class="data_id" class="delete_cat"  title="удалить"  href="{{ route('admin.categories.delete', $category->id) }}">
                                    <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </form>
                                    <i class=" fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>

@endsection