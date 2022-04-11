

// INIT DATATABLES
$(function () {
	// Init
    var spinner = $( ".spinner" ).spinner();
    var table = $('#table_id').dataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );

    
    $(".DTTT_container").css("float","right");
});


