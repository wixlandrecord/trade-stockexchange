$(function () {
		$("#up").on("click",function(){
		var username=$("#fn").val();
		var em=$("#em").val();
		var pas=$("#pas").val();
		var gen=$("#gen").val();
		var user=$("#user").val();
		//alert("Data Updated");
	    $.ajax({
            url: "http://localhost/php_project/model/updateProfil.php",
            method:"POST",
            data: {'user':user,'username':username,'emal':em,'pass':pas,'gend':gen},
            success:function(){
            	//alert("Data Updated");
            },
});
		
	});
});