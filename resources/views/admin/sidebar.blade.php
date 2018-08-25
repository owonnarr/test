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
<div style="width: 100%; " class="btn-group-vertical">
    <div class="sidebar">
        <ul id="adminUl" class="ul_block_left">

            @foreach($menu as $category)

                <li class="li_block_left tree-toggler nav-header getChild">
                    <i style="color: white;" class="{{ $category['icon'] }}" aria-hidden="true"></i>
                    <span class=""></span>
                    <a data-id="" id="li_cat" class="a_block_left" href="/admin/{{$category['route'] ? route( $category['route'] ):'#'}}">
                        <span style="font-size: 16px">{{ $category['title'] }}</span>
                    </a>
                </li>
                @if( isset($category['subs']) && count($category['subs']) > 0)
                    <ul class="child_menu" style="display: none">
                        @foreach($category['subs'] as $sub)
                            <li>

                                <a data-id="" id="sub_li" class="a_block_left a_child" href="/admin/{{$sub['route'] ? route( $sub['route'] ):'#'}}">
                                    <i style="color: white;" class="{{ $sub['icon'] }} fa_child" aria-hidden="true"></i>
                                    <span class="child_title">{{ $sub['title'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>
</div>
