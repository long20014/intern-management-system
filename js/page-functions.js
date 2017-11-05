/* start admin-config page functions */
$(function () {
	$('form').submit(function () {
	  $.ajax({
	    type: 'post',
	    url: "http://localhost/intern/API.php",
	    data: $('form').serialize(),
	    dataType: "json",	  
	  }).done(function (res) {
	  	du_lieu = res
	  	console.log(du_lieu.data.username);
	  });
	  return false;
	});
});


/* end admin-config page functions */