
// dom ready

$(function(){
    $('#search-form').on("submit", function(e){
        e.preventDefault();
        $('#results .panel-body').html('<i class="fa fa-spinner fa-spin"></i>');
        var data = $('#search-form').serialize();
        $('#results .panel-body').load('/search?'+data);
    });
});







