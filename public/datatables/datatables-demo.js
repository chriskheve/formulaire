// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
  	autoWidth: true, 
                deferRender: true, 
                info: false, 
                lengthChange: false, 
                ordering: true, 
                paging: true, 
                scrollX: false, 
                scrollY: false, 
                searching: true,
                "language": {
        "lengthMenu": "Afficher _MENU_ ",
        searchPlaceholder: "Recherche",
        "sSearch": " "
      },
  });
});
