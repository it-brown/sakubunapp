$(function() {
    $('.btnMake').click(function() {
        // 選択されたidとtextをパラメータとして渡す
        var selectId = $(this).attr("id").split("txtbx")[1]
        var text = $("#txt" + selectId).val()
        var params = {
            selectId: selectId,
            text: text
        }
        parent.changePage("sentencepage.html", params)
    })
})
