/**
 * Отправка данных через aJax
 * @param routeName - имя роута который обрабатывает запрос - string
 * @param dataForm - данные формы (без файлов) - object
 * @param method - метод запроса (get, post) - string
 */
function  sendAjax( routeName, dataForm, method ) {
    // $image = $('#file')[0].files[0];
    $.ajax({
        url: routeName,
        type: method,
        dataType: false,
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        data: dataForm,
        beforeSend: function(){ // Функция вызывается перед отправкой запроса
            output.text('Запрос отправлен. Ждите ответа.');
        },
        success: function (response) {
            console.log(response, dataForm);
            alert('Категория ' + response.data.name + ' успешно добавлена');
            $('#myModal').modal('hide');
            drawTrTableAjax(dataForm.id, dataForm.name, dataForm.descr);

        },

        error: function (error) {
            alert( error.status +' Ошибка' )
        }
    });
}

/**
 * Удаление данных через aJax
 * @param routeName - имя роута который обрабатывает запрос - string
 * @param dataForm - данные формы (без файлов) - object
 * @param method - метод запроса (get, post) - string
 * @param token - X-CSRF-TOKEN - string
 */
// function deleteAjax( routeName, method, token ) {
//
// }
$(document).ready(function () {

    $('#formAjax').on('submit', function () {

        var strRes = $('input[name = name]').val();
        var descrRes = $('textarea[name = description]').val();
        idAdmin = $('#option_id_form').data('id');
        id = optionIdChecked(idAdmin)
        name = checkNameCategory(strRes);
        descr = checkDescription(descrRes);

        if ( name == 'error') {
            $(this).off('submit');
        }
        if( descr == 'error' ) {
            $(this).off('submit');
        }
        if( id == 'error' ) {
            $(this).off('submit');
        }
        token = $('input[name="_token"]').attr('content');

        if (name !== 'error' && descr !== 'error' && id !== 'error') {
            dataForm = {
                name: name,
                description: descr,
                admin_id: id,
                token: token,
            };

            sendAjax(routes.categoriesAdd, dataForm, 'POST');
        }
        return false;
    });
});

// # Удаление категории AJAX
$(document).ready(function () {
    $('.data_id').on('click', function() {
        var id = $(this).data('id');
        var catName = $(this).data('name');

        if(confirm('Вы точно хотите удалить категорию '+ catName)) {
            $.ajax({
                url: 'category/delete/' + id,
                type: "POST",
                data: {id: id, "_token": $('#token').val()},
                success: function(response) {
                    alert(response.message);
                }
            });
        }

        return false;
    });

});

/**
 * проверка правильности ввода имя категории
 * @param name
 * @returns {*}
 */
function checkNameCategory( name ) {

    var str = name.trim();

    if ( str.length < 4 ) {
        $('#inputCatName, .danger_name').append('Имя категории должно содержать минимум 4 буквы');
        return 'error';
    } else if( str.length > 20 ) {
        $('#inputCatName, .danger_name').append('Имя категории не должно содержать больше 20 букв');
        return 'error';
    }
    return name;

}

/**
 * проверка правильности ввода описания категории
 * @param descr
 * @returns {*}
 */
function checkDescription( descr ) {
    if ( descr.length < 20 ) {
        $('#err_descr, .danger_descr').append('Описание категории должно содержать минимум 20 букв');
        return 'error';
    } else if( descr.length > 200 ) {
        $('#err_descr, .danger_descr').append('Описание категории не должно содержать больше 200 букв');
        return 'error';
    }
    return descr;
}

// # аякс метод работы с категориями
// $(document).ready(function () {
//     $('#li_cat').click( function () {
//         var rootId = $(this).data('id');
//         // console.log(rootId);
//         $.ajax({
//             url: '/admin/categories/?'+ rootId,
//             type: "GET",
//             data: rootId,
//             dataType: false,
//             success: function (response) {
//                 // console.log(response);
//                 dropDownChange();
//
//             },
//             error: function (response) {
//                 console.log(response);
//             }
//         });
//         return false;
//     });
//
// });

/**
 * открытие и закрытие меню в сайдбаре
 */
$(document).ready(function () {
    $('#li_cat').on('click', function () {
        var openMenu = 'open';
        var closeMenu = 'close';

        menu = $('#dropdown_child').css('display');

        if( menu == 'none' ) {
            $('#dropdown_child').css('display', 'block');
            $('#dropdown_child').addClass(openMenu);
        } else {
            $('#dropdown_child').css('display', 'none');
            $('#dropdown_child').removeClass(closeMenu);
        }
        return false;
    });

});

//
//
// function dropDownChange() {
//
//     var openMenu = 'open';
//     var closeMenu = 'close';
//
//     menu = $('#dropdown_child').css('display');
//
//     if( menu == 'none' ) {
//         $('#dropdown_child').css('display', 'block');
//         // $('#dropdown_child').addClass(openMenu);
//     } else {
//         $('#dropdown_child').css('display', 'none');
//         // $('#dropdown_child').removeClass(closeMenu);
//     }
// }


function drawTrTableAjax( id, name, description ) {
    ide = id;
    $('#table_cats, tbody:last').append(
        '<tr> ' +
            '<td> +ide+ </td>' +
            '<td> name  </td>' +
            '<td>+ description +</td> ' +
            '<td>' +
                '<a title="редактировать" href="/admin/category/{{$category->id}}/edit">' +
                '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>' +
                '</a>' +
            '</td> ' +
            '<td></td> ' + '</tr>')
};

$(function () {

    $('#formAjax').validate({
        rules: {
            name: {
                required: true,
                minlength: 4,
                maxlength: 20,
            },
            description: {
                required: true,
                minlength: 20,
                maxlength: 200
            }
        }
    })

    $('#editForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 4,
                maxlength: 20,
            },
            description: {
                required: true,
                minlength: 20,
                maxlength: 200
            }
        }
    })
});