
		$(document).ready(function(){

	        $('#official_users a').click(function (e) {
			    e.preventDefault();

			    var url = $(this).attr("data-url");
			    var href = this.hash;
			    var pane = $(this);

			    // ajax load from data-url
			    $(href).load(url,function(result){
			        pane.tab('show');
			    });
			});

			$('#doctor').load($('.active a').attr("data-url"),function(result){
				$('.active a').tab('show');
			});
	    });