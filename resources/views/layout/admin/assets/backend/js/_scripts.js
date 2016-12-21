+(function($) {
	'use strict';

	if (typeof window.$ === 'undefined' || !window.$)
		throw "This theme need jQuery";

 
	/**
		* Doc ready
	*/
	$(function() {
		$(".clickable-row").click(function() {
	        window.document.location = $(this).data("href");
	    });
		
		$('.table.DataTable').DataTable({
			bAutoWidth: false,
	        "dom": 'lf<"table-overflow"t>ip'
		});
		$('div.dataTables_filter input').addClass('form-control');
		$('div.dataTables_length select').addClass('form-control');

		$('.date').datepicker({
            format: 'yyyy/mm/dd'
        });
        
	   	$("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        	$("#wrapper").toggleClass("toggled");
	    });
	   	$("#menu-toggle-push").click(function(e) {
	        e.preventDefault();
	            $("#wrapper").toggleClass("toggled");
	    });
	    $("#menu-toggle-right").click(function(e) {
	        e.preventDefault();
	            $("#wrap-content").toggleClass("toggled");
	    });

	    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' files selected' : label;
			
			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}
		});

	    /* JS Tree */
	    $(".search-input").keyup(function() {
	        var searchString = $(this).val();
	        console.log(searchString);
	        $('#tree').jstree('search', searchString);
	    });
		$('#tree').jstree({
			"core" : {
				"themes" : {
					"icons" : false,
					"stripes" : true,
				},
			},
		  	"plugins" : [
		    	"search"
		  	]
		});
	});

	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});
})(jQuery);
