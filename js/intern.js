$(document).ready(function(){
/*
    Bai hoc jquery dau tien cua toi    
*/
    $('#add').click(function(){    	
    	if($('#name').val() === "") {
    		alert('LẦY, CHƯA NHẬP TÊN');
    		return false;
    	}
    	var name = $('#name').val();
    	$("#select").append("<option>"+name+"</option>");
    });

    $('#delete').click(function(){
    	$("#select option:selected").remove();
    });

    $('#edit').click(function(){
        var a = prompt("nhapten");
        $("#select option:selected").val(a);
    });

    $('#create').click(function(){
        $("#select option:selected").remove();
    });
/*
    Bai hoc AJAX
*/
    $('#ajaxForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "http://localhost/intern/API.php",
            data: {
                ho_ten: $('#txtHoten').val(),
            },
            dataType:"JSON"
        }).done(function(du_lieu){
            dulieu =  du_lieu;
            console.log(du_lieu)
        })
        .fail();
    });
});


/* $("#frmTimBenhNhan, #frmThemBenhNhan").on("submit",function (ev) {
    ev.preventDefault();
    var myForm = $(this),
        url = myForm.attr('action'),
        method = myForm.attr('method'),
        data = myForm.serialize(),
        mode = url.split("=")[1]; //tương đương url.split("?")[1].split("=")[1])'
    //console.log(url);
    $.ajax({
        url:    url,
        method:   method,
        dataType:   "json",
        data: data
    }).done(function (res) {
        switch (mode){
            case "search":
                //Form TimBenhNhan
                console.log(res.data);
                appendJsonToTable(res.data);
                enablePopover();
                break;
            case "add":
                //Form ThemBenhNhan
                alert("Thêm Thành Công");
                console.log(res);
                break;
            default:
                break;
        }
    }).fail(function (a,b,c) {
        console.log(a,b,c);
    });
});*/