$( document ).ready(function() {
    ajax_bar_handler();
});

$('#AttendeeStatusLogAttendeeId').change(function() {
    ajax_bar_handler();
});

function ajax_bar_handler() {
    ajax_loading_image('.ajax_loading_image');

    var selected = $('#AttendeeStatusLogAttendeeId').val();

	$.ajax({
		type: "POST",
		url: '/attendees/ajax_get_attendee_bar_numbers',
		data: "ajax=true&id="+selected,
		success: function(msg){
			//console.log(msg);
			$('.ajax_bar_numbers').html(msg);
			// remove loading image
			ajax_remove_loading_image('.ajax_loading_image');
		}
	});

}

function ajax_loading_image(div) {
    $(div).html('<img src="/img/preloader.gif" alt="Loading..." />');
//    $(div).html('This is an ajax test!');
}

function ajax_remove_loading_image(div) {
    $(div).html('');
}