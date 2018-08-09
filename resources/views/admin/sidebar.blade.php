<!-- Sidebar user panel -->

<div class="user-panel">
    <div class="pull-left image">
        <img src="https://cs4.pikabu.ru/post_img/2014/04/28/7/1398680790_1831038635.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Павел Ивасенко</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<div style="width: 100%" class="btn-group-vertical">
    <ul id="adminUl" class="ul_block_left">
                <?php $i = 0; ?>
                @foreach($cats as $category)
                <li class="li_block_left tree-toggler nav-header">
                    <i style="color: white;" class="{{ $icon[$i++] }}" aria-hidden="true"></i>
                    <span class=""></span>
                    {{--{{dd($child)}}--}}
                    <a data-id="{{ $category->id }}" id="li_cat" class="a_block_left" href="/admin/{{ $category->url }}">
                        <span style="font-size: 16px">{{ $category->name }}</span>
                    </a>
                </li>
                        {{--{{dd($aData)}}--}}
                        {{--@if(!empty($aData['childs']) && $aData['rootId'] == $category->id)--}}
                            {{--<ul class="drop_menu_sidebar" id="dropdown_child">--}}
                                {{--@foreach( $aData['childs'] as $child)--}}
                                    {{--<li>{{ $child->name }}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--@endif--}}
                @endforeach
    </ul>
</div>
