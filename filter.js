// filter gallery on search (need to change it so it is not case-sensitive)
// also at least with my project it does not 'stack' nicely results of search, might be something wrong with me using the bootstrap in code


var divs = $('div[data-filter]');
$('#search').on('keyup', function() {
    var val = $.trim(this.value);
    divs.hide();
    divs.filter(function() {
        return $(this).data('filter').search(val) >= 0
    }).show();
});
