<script type="text/javascript" src="{{asset('is/jquery-2.2.3.js')}}"></script>

<script type="text/javascript">
	
$(function(){

	$('#er').hide();

	var files;
	$('input[name="thing_img"]').change(function(e){

		files=e.target.files;
	});


	$('#add_thing').submit(function(e){


		e.preventDefault();

		var _token=$('input[name="_token"]').val();
		var thing =$('input[name="thing"]').val();
		var thing_desc=$('input[name="thing_desc"]').val();
		var data=new FormData();
		data.append('_token',_token)
		data.append('thing',thing);
		data.append('thing_desc',thing_desc);

		$.each(files,function(k,v){

			data.append('thing_img',v);
		});

		$.ajax({

			url:'add_thing',
			type:'POST',
			data:data,
			contentType:"multipart/form-data",
			processData:false,

			success:function(data){
				alert('Data Added Successfuly');

		},
		error:function(data){
			$('#er').show();
			$('#er').html('');
			var errors=data.responseJSON;
			$.each(errors ,function(k,v){

				$('#er').append(v);


			});


		}


		});




	});

	













});


</script>
