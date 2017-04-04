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

// $(document).ready(function()
// {

//     var data = {request : $('dataWhen').val()};

//     $.ajax({
//         type: "POST",
//         url: "../info.php",
//         data: data,

//         success: function(data, dataType)
//     {
//         alert(data);
//     },
//         error: function (XMLHttpRequest, textStatus, errorThrown)
//         {
//             alert ('Error : ' + errorThrown);
//         }
//     });
//     return false;
// });

