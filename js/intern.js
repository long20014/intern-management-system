$(document).ready(function(){

    $('#add').click(function(){    	
    	if($('#name').val() === "") {
    		alert('LẦY, CHƯA NHẬP TÊN');
    		return false;
    	}
    	var name = $('#name').val();
    	$("#select").append("<option>"+name+"</option>");
    });

    $('#remove').click(function(){
    	$("#select option:selected").remove();
    });

    $('#edit').click(function(){
        var a = prompt("nhapten");
        $("#select option:selected").val(a);
    });

});