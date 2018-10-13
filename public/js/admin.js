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
	dom: "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
		 "<'table-responsive'tr>" +
		 "<'row'<'col-sm-5'i><'col-sm-7'p>>"
});

/* Utils */

function testSameOrigin(url) {
    var a = document.createElement('a');
    a.href = url;
    return a.hostname == window.location.hostname &&
           a.port == window.location.port &&
           a.protocol == window.location.protocol;
}
