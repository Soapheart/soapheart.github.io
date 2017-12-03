$(function(){
	$('#form').submit(function(e){
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'php/form-processing.php',
			data: $(this).serialize(),
			success: function(data){
				$('#result').html(data);
			}    
		});
	});
});
