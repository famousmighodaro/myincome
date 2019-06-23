jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });


  	if($('.custom-control-input').attr('checked')){
  		$('.collaps').show();
  	}else{
  		$('.collaps').hide();
  	}



	var flip = 0;
	$( ".custom-control-input" ).click(function() {
  	$( ".collaps" ).toggle(this.checked);
});
	 
  		
       $(function(){
        $('#endDate, #startDate, #receivedDate').datepicker({
          autoclose: true, 
          'format':'yyyy-mm-dd',
          'autocomplete':true
        });
      }); 
	});

	

$(document).ready(function() {
     var table = $('#incomeTable, #budgetTable').DataTable( {
            columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        fixedHeader: true,

                responsive: true,
         "dom": '<"toolbar">frtip',
         "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>',


    } );

     table
    .order( [ 8, 'desc' ] )
    .draw();

    $('#incomeTable').on( 'click', 'tbody tr', function () {
    table.row( this ).delete();
} );


    $('#incomeTable').on( 'click', 'tbody tr', function () {
    table.row( this ).edit( {
        buttons: [
            { label: 'Cancel', fn: function () { this.close(); } },
            'Edit'
        ]
    } );
} );

} );



$(document).ready(function() {
    $('#exam').DataTable();
} );