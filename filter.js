
// for some reason 'toLowerCase' does not work, so in search bar the input must match exactly what is in the data-filter
// still working on it

var divs = $('div[data-filter]');
$('#search').on('keyup', function() {
    var val = $.trim(this.value).toLowerCase(this.value);
    divs.hide();
    divs.filter(function() {
        return $(this.data('filter').toLowerCase().search(val) >= 0)
    }).show();
});
