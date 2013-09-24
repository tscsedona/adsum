$(document).ready(function() {

    $( ".datepicker" ).datepicker({
        yearRange: "-5:+5",
        changeMonth: true,
        changeYear: true
    });

    $('#AttendeeStatusLogAttendeeId').change(function() {
    //    var selected = $($this).val();

        ajax_loading_image('.ajax_loading_image');

        // POST to ajax_get_attendee_bar_numbers...
    });

    function ajax_loading_image(div) {
    //  $(div).html('<img src="/img/preloader.gif" alt="Loading..." />');
        $(div).html('This is an ajax test!');
    }

    function ajax_remove_loading_image(div) {
        $(div).html('');
    }
    
});