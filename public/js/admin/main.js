$(function () {

    $('#formAjax').validate({
        rules: {
            name: {
                required: true,
                minlength: 4,
                maxlength: 60,
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
                maxlength: 60,
            },
            description: {
                required: true,
                minlength: 20,
                maxlength: 200
            }
        }
    })
});