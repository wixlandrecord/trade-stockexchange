$(function () {
	var uid=$("#user").val();

        $(".del").on("click",function(){         
			alarm=$(this).closest("tr").find(".Id").text().trim();
            alert(alarm);
            $(this).closest("tr").remove();          
            $.ajax({
                url:"http://localhost/project/model/delete.php",
                method:"POST",
                data:{'id':alarm},
                
            });  
        });
		
    $("#btn").on("click",function(){ 
        var share=$('#sell :selected').text().trim();
		alert(share);
        var value=$(".tx").val().trim();
		alert(value);
        var check= $("input[name='level']:checked").val();
		alert(check);
        $.ajax({
                url:"http://localhost/project/model/add.php",
                method:"POST",
                data:{'share':share,'alert':value,'level':check,'user_id':uid},
                success:function(data){					
					var add = JSON.parse(data);
					var newtr=$('<tr class="Id"><td>'+add.id+'</td><td id="col2"><input type="checkbox" class="chek" checked></td><td id="col3" class="info text-info">'+add.name+'</td><td id="col4" class="info text-info">'+add.price+'</td><td id="col5" class="info text-info">'+add.checker+' '+add.value+'</td><td id="col6" class="info text-info">'+add.last_trigger+'</td><td><input type="button"  value="delete"  class=" btn btn-danger del" ></td></tr>');
					$("#tab").append(newtr);
					$(".del").on("click",function(){ 
						alarm2=$(this).find(".Id").text().trim();	
						alert(alarm2);
						$(this).closest("tr").remove();	
						$.ajax({
							url:"http://localhost/project/model/delete.php",
							method:"POST",
							data:{'id':alarm2},
							
						});  
					});
				$(".chek").click(function(){
						var enable= ($(this).is(':checked'))?true:false;
						alert(enable);
						var alarm2=$(this).closest("tr").find(".Id").text().trim();
						alert(alarm2);
						$.ajax({
								url:"http://localhost/project/model/enable.php",
								method:"POST",
								data:{'enable':enable,'id':alarm2},
						});
					});
					
				}
		});
					
	});
	
	$(".chek").click(function(){
        var enable= ($(this).is(':checked'))?true:false;
		alert(enable);
		var alarm2=$(this).closest("tr").find(".Id").text().trim();
		alert(alarm2);
		$.ajax({
				url:"http://localhost/project/model/enable.php",
                method:"POST",
                data:{'enable':enable,'id':alarm2},
		});
	});
    });





