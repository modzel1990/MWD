// filter gallery on search (need to change it so it is not case-sensitive)


var divs = $('div[data-filter]');
$('#search').on('keyup', function() {
    var val = $.trim(this.value);
    divs.hide();
    divs.filter(function() {
        return $(this).data('filter').search(val) >= 0
    }).show();
});
