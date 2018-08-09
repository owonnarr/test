
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div style="padding: 10px;" class="modal-content">
                <div class="modal-header">
                    <button id="close_modal" style="color: red;" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Создание новой категории</h4>
                </div>
                <div class="modal-body">
                        <form method="post" id="formAjax" action="{{ route('admin.category.add') }}" enctype="multipart/form-data">
                            <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="label_form_add" for="inputCatName">Название категории</label>
                                <input type="text" name="name" class="form-control" id="inputCatName" placeholder="имя категории" value="" required>

                            </div>
                            <p class="bg-danger danger_name"></p>

                            <div class="form-group">
                                <label class="label_form_add" for="inputCatDescription">Краткое описание</label>
                                <textarea rows="4" id="err_descr" placeholder="кратко опишите категорию" name="description" class="form-control" required></textarea>
                            </div>
                            <p class="bg-danger danger_descr"></p>
                            <h4>Выбрать родительскую категорию</h4>
                            <hr>
                            <div class="form-group">
                                <div style="padding-left: 0;" class="col-sm-5">
                                    <select name="parent_id" class="form-control selectpicker">
                                        <option>выбрать категорию</option>
                                        @if($cats)
                                            @foreach($cats as $cat)
                                                <option id="option_id_form" <?php if ($cat->id == 'value="$cat->id"') {echo "selected"; }?> data-id="{{ $cat->id }}" title="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach
                                                <p class="bg-danger danger_option"></p>
                                                @if ($errors->has('parent_id'))
                                                    <span class="help-block">
                    <strong class="text-danger">
                    {{ $errors->first('parent_id') }}
                    </strong>
                        </span>
                                                @endif
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <button data-loading-text="Loading..." id="res" type="submit" class="btn btn-success">ДОБАВИТЬ ДАННЫЕ</button>
                            {{--{{ csrf_field() }}--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>