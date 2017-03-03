$(function() {
    $('.btnMake').click(function() {
        // 選択されたidとtextをパラメータとして渡す
        var selectId = $(this).attr("id").split("txtbx")[1]
        var text = $("#txt" + selectId).val()
        parent.changePage("sentencepage.html", { selectId: selectId, text, text })
    })
})
