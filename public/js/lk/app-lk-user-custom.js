/**
 * Удаление класса с ошибками
 */
function removeClassIsInvalidDataAddApplicationForm() {
    $('#suggest').removeClass('is-invalid');
    $('input[name="type_boreholes"]').removeClass('is-invalid');
    $('input[name="construction_borehole_pipes"]').removeClass('is-invalid');
    $('input[name="equipment"]').removeClass('is-invalid');
    $('#date_start').removeClass('is-invalid');
    $('input[name="material"]').removeClass('is-invalid');
}

/**
 * Валидация заполнения данных
 */
function validationDataAddApplicationForm() {
    removeClassIsInvalidDataAddApplicationForm()

    if ($('#suggest').val() == '') {
        $('#suggest').addClass('is-invalid')
        toastr.error('Необходимо заполнить Местоположение! ');
        return false;
    }

    if ($('input[name="type_boreholes"]').is(':checked') == '') {
        $('input[name="type_boreholes"]').addClass('is-invalid')
        toastr.error('Необходимо выбрать Тип скважины! ');
        return false;
    }

    if ($('input[name="construction_borehole_pipes"]').is(':checked') == '') {
        $('input[name="construction_borehole_pipes"]').addClass('is-invalid')
        toastr.error('Необходимо выбрать Конструкцию труб скважины! ');
        return false;
    }

    if ($('input[name="equipment"]').is(':checked') == '') {
        $('input[name="equipment"]').addClass('is-invalid')
        toastr.error('Необходимо выбрать Технику которая сможет заехать! ');
        return false;
    }

    if ($('#date_start').val() == '') {
        $('#date_start').addClass('is-invalid')
        toastr.error('Необходимо заполнить Дату начала проведения работ! ');
        return false;
    }

    if ($('input[name="material"]').is(':checked') == '') {
        $('input[name="material"]').addClass('is-invalid')
        toastr.error('Необходимо выбрать Материал! ');
        return false;
    }

    return true;
}


/**
 * Запрос на добавление заявки
 */
function addApplication() {
    if (validationDataAddApplicationForm() == false) {
        return;
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let data = {};
    let dataForm = $('#addApplicationForm').serializeArray();

    $.each(dataForm,function(){
        data[this.name] = this.value;
    });

    $.ajax({
        url: '/application/add',
        method: 'post',
        dataType: "json",
        data: data,
        async: false,
        success: function(data) {
            if (data.status == 'success') {
                toastr.success('Заявка сохранена. № ' + data.idApplication);
                $('#addApplicationModal').modal('hide');
            }
            if (data.status == 'error') {
                toastr.error(data.text);
            }
        },
        error: function (jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect. Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found (404).');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error (500).');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error. ' + jqXHR.responseText);
            }
        }
    });
}





$(document).on('click', '#addApplication-send', function(){ addApplication() });
