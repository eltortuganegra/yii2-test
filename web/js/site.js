$(function() {
    $("#myTable").tablesorter();
});

$('#convert-table').click( function() {

    var table = $('#myTable').tableToJSON(); // Convert the table into a javascript object
    //console.log(table);
    //alert(JSON.stringify(table));

    $('<a />', {
        'download': 'data.json',
        'href' : 'data:application/json,' + encodeURIComponent(JSON.stringify(table))
    }).appendTo('body')
        .click(function() {
            $(this).remove()
        })[0].click()



});