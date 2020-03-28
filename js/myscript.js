	$(document).ready(function(){
		
		$('.delete').click(function(e){
			
			e.preventDefault();
			
			var d_id = $(this).attr('data-id');
			var parent = $(this).parent("td").parent("tr");
			
			bootbox.dialog({
			  message: "Are you sure you want to Delete ?",
			  title: "<i class='glyphicon glyphicon-trash'></i> Delete !",
			  buttons: {
				success: {
				  label: "No",
				  className: "btn-success",
				  callback: function() {
					 $('.bootbox').modal('hide');
				  }
				},
				danger: {
				  label: "Delete!",
				  className: "btn-danger",
				  callback: function() {		  
					  
					  $.post('delete.php', { 'delete':d_id })
					  .done(function(response){
						  bootbox.alert(response);
						  parent.fadeOut('slow');
					  })
					  .fail(function(){
						  bootbox.alert('Something Went Wrog ....');
					  })
					  					  
				  }
				}
			  }
			});
			
			
		});
		
	});