
$(document).ready(function() {

		$('.firozi_wardak').on('input', function(){ // gold input auto addition

			// var x = document.getElementById('gold_weight').value;
			// x = parseFloat(x);
			// if(Number.isNaN(x))
			// x = 0;

			var y = document.getElementById('gold_percentage').value;
			y = parseFloat(y);
			if(Number.isNaN(y))
			y = 0;
			
			document.getElementById('gold_carat').value = y/100*24;
		});


		
	window.setTimeout(function() {
		$(".alert").slideUp(500);
	}, 5000);
	
	
	$("a.delete_alert_wardak").click(function() {
		var result = window.confirm("Are you sure you want to delete?");
		if(!result) {
			Event.preventDefault();
		}
	});

		

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

 


});
