	var attrCount = 1;

	addAttr = function(){

		$('#selectContent select').attr('name','atributeType['+attrCount+']');
		
		$('#selectNulo select').attr('name','atributeNull['+attrCount+']');
		
		var selectContent = $('#selectContent').html();
		
		var selectNulo = $('#selectNulo').html();

		var atributos =  "<div class='attr' id='attr"
		+attrCount
		+"'>"
		+"Atributo:<input type='text' name='atributeName["+attrCount+"]' />"
		+"Tipo:"+selectContent
		+"Nulo:"+selectNulo
		+"<button class='remove btn btn-danger' id='remove"
		+attrCount+"'>remover</button>"
		+"<hr class='black'>"
		+"</div>";
		$("#atributos").append(atributos);
		attrCount++;
		
	}

	removeItem = function(){
		
		var x = $(this).attr('id');
		x = x.replace("remove","");
		$('#attr'+x).remove();
		
		
	}
	sendData = function(){
		
		$.ajax({
			
			url:'codigo/gerador/resposta.php',
			type:'POST',
			data:$('#dataForm').serialize(),
			success:function(result){
			
				$('#resposta').html(result);
			}
		});
		
		
	};
	$(function(){


		
		var attrCount = 1;
		
		$("#submit").click(sendData);
		$("#addAtribute").click(addAttr);

		$(document).on("click", ".remove",removeItem);
		
		
	});