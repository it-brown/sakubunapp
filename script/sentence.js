function getParam() {
    var arg = {}
    var pair = decodeURI(location.search.substring(1)).split('&')
    for (var i = 0; pair[i]; i++) {
        var kv = pair[i].split('=')
        arg[kv[0]] = kv[1]
    }

    return arg
}

$(function() {
    // URLに含まれるパラメータを取得
    var arg = getParam()
    $("#output").text(arg.selectId + "番目の言葉は" + arg.text + "です")
})