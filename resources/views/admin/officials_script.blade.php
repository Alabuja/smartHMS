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


	                if (!$("#nurse").val() == 1){
	                    return
	                }
	                else{
	                    $("#loading_paid").show();//
	                    // console.log(selectedUrl());
	                    console.log($('#type_nurse').val() );
	                    console.log(target);
	                    $.get('/admin/officials', {type:$('#type_nurse').val() })
	                    .done(function(result){
	                        $("#loading_nurse").hide();//
	                        $("#nurse_container").html(result['booking_response_html']);
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