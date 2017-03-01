$(function() {
    window.changePage = function(name) {
        $('#content').attr('src', './page/' + name)
    }
})
