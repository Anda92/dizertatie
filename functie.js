<script>

function imAnAjaxFunction(){

    var request = $.ajax({
        url: 'myfunct.php',
        type: 'get',
        dataType: 'html'
    });

    request.done( function ( data ) {
        $('#ajaxButton').html( data );
        </script>