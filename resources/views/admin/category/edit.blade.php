@extends('layouts.admin-layouts')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form id="editForm" class="form-horizontal col-sm-12" role="form" method="POST" action="{{ route('edit',  ['id' => $category->id]) }}">
            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
            @if( $category )
                <div class="form-group col-sm-10">
                    <label class="label_form_add" for="inputCatName">Название категории</label>
                    <input type="text" name="name" class="form-control" id="inputCatName" placeholder="имя категории" value="{{ $category->name }}" required>
                    <input name="id" class="form-control" value="{{ $category->id }}" type="hidden">
                </div>
                <div class="form-group col-sm-10">
                    <label class="label_form_add" for="inputCatName">Постоянная ссылка</label>
                    <input type="text" name="url" class="form-control" value="{{ $category->url }}">
                </div>
            <label style="text-align: left; padding: 0; margin-bottom: 5px;" class="col-sm-6 control-label">Описание категории</label>
            <div class="form-group">
                <div class="col-sm-10">
                    <textarea rows="5" name="description" class="form-control" placeholder="Описание категории">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <select name="admin_id" class="form-control selectpicker">
                        <option selected>выбрать категорию</option>
                        @if($cats)
                            @foreach($cats as $cat)
                                @if( $cat->id !== 0 )
                                <option title="{{ $cat->name }}" value="{{ $cat->id }}" {{ ($cat->id == $category->admin_id ? "selected": "") }}>{{ $cat->name }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                    @if ($errors->has('parent_id'))
                        <span class="help-block">
                    <strong class="text-danger">
                    {{ $errors->first('parent_id') }}
                    </strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">ОБНОВИТЬ ДАННЫЕ</button>
                    {{--<button type="button" class="btn btn-danger">ОТМЕНА</button>--}}
                </div>
            </div>
                @endif
        </form>
    </div>
    <div class="col-md-6"></div>
</div>
@endsection