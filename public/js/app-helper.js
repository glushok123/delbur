
// ##################################################
//  получение парметров url  и обновление фильтров

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

var filtersAdvertisingValueStart = getUrlParameter('filtersAdvertisingValue');
var filtersSpheresValueStart  = getUrlParameter('filtersSpheresValue');
var filtersPriceValueStart  = getUrlParameter('filtersPriceValue');
var filtersSortStart  = getUrlParameter('filtersSort');

if (filtersAdvertisingValueStart != false) {
    $('#filtersAdvertising').val(filtersAdvertisingValueStart)
}

if (filtersSpheresValueStart != false) {
    $('#filtersSpheres').val(filtersSpheresValueStart)
}

if (filtersPriceValueStart != false) {
    $('#filtersPrice').val(filtersPriceValueStart)
}

// ##################################################

// Сортировка
$('input[type=radio][name=sort-product]').change(function() {
    let nameSort = $(this).parent().find('label').text();
    $('[name-sort]').text(nameSort);
    changeFilters();
});

// ##################################################

$("#feedback-phone").mask("+7 (999) 999-99-99");
$("#order-phone").mask("+7 (999) 999-99-99");
$("#register-phone").mask("+7 (999) 999-99-99");