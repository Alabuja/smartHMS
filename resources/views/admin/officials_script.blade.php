@section('js')
	<script type="text/javascript">
		$(document).ready(function(){

	        var currentLocation = $(location).attr('href');
	        var url = new URL(currentLocation);

	        var target =null;
	        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) { 
	          var target = $(e.target).attr("href") // activated tab
	          // console.log(target);

	            if(target == '#nurse'){


	                if (!$("#nurse_details").val() == 1){
	                    return
	                }
	                else{
	                    $("#nurse_loader").show();//
	                    // console.log(selectedUrl());
	                    console.log($('#type_nurse').val() );
	                    console.log(target);
	                    $.get('/admin/officials/list', {type:$('#type_nurse').val() })
	                    .done(function(result){
	                    	console.log(result);
	                        $("#nurse_loader").hide();//
	                        $("#nurse_container").html(result['response_html']);
	                        $("#nurse_container").show();
	                    })
	                    .fail(function(){

	                    });
	                }
	            } //endif
	        });
	    });
	</script>
@stop