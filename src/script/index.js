$(function() {
    window.changePage = function(name, param) {
        // ページ呼び出しにパラメータを指定できるように
        var url = './page/' + name
        if (param != null) {
            url += "?" + $.param(param)
        }
        $('#content').attr('src', url)
    }
})
