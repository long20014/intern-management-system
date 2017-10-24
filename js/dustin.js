/*-------------- Templates -----------------*/
function appendToTable(data){
    console.log(data);
    var $tableBody = $('<tbody>');
    data.map(function (obj) {
        var $tr = $('<tr data-toggle="popover"></tr>');
        var $td;
        for( var key in obj){
            $td = $('<td>' + obj[key] /*+ '_' + key*/ + '</td>');
            $tr.append($td);
        }
        $tableBody.append($tr);
    })
    $("#tableBody").html($tableBody.html());
}
/*-------------- Ready -----------------*/
$(function(){
	/*--- Get cur_id and manipulate popover buttons ---*/

    /*--- frmTimBenhNhan ---*/
    $("#frmTimBenhNhan").submit(function (ev) {
        ev.preventDefault();
        var myForm = $(this),
            url = myForm.attr('action'),
            method=myForm.attr('method'),
            data = myForm.serialize();
            //console.log(data);
        $.ajax({
            url:    url,
            type:   method,
            dataType:   "json",
            //contentType:"application/json; charset=utf-8",
            //scriptCharset: "utf-8" ,
            //contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            data: data,
        }).done(function (res) {
            appendToTable(res.data);
            enablePopover();
            console.log(res);
        });

        /*$.post(url,data,function (res) {
            alert(res);
        });*/
    });
});
