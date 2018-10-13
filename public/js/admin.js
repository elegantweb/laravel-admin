/* Fix jQuery */

$.ajaxSetup({
    beforeSend: function (xhr) {
        if (testSameOrigin(this.url)) {
            xhr.setRequestHeader('X-CSRF-TOKEN', document.head.querySelector('meta[name="csrf-token"]').content)
        }
    }
});

/* Fix DataTables */

$.extend(true, $.fn.dataTable.defaults, {
    processing: true,
    buttons: [],
	dom: "<'row'<'col-sm-auto'l><'col-sm-auto-right dt-buttons-col'B><'col-sm-auto-right'f>>" +
		 "<'table-responsive'tr>" +
		 "<'row'<'col-sm-5'i><'col-sm-7'p>>"
});

$(document).on('preDraw.dt', function (e, settings) {
    var api = new $.fn.dataTable.Api(settings);
    if (undefined === api.buttons || api.buttons().containers().is(':empty')) {
        $(api.tables().containers()).find('.dt-buttons-col').hide();
    }
});

/* Fix DataTables Buttons */

$.extend(true, $.fn.dataTable.Buttons.defaults, {
    dom: {
        button: {
            className: 'btn btn-default btn-sm'
        }
    }
});

/* Utils */

function testSameOrigin(url) {
    var a = document.createElement('a');
    a.href = url;
    return a.hostname == window.location.hostname &&
           a.port == window.location.port &&
           a.protocol == window.location.protocol;
}
