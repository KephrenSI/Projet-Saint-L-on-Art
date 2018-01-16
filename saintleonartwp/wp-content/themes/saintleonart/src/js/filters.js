// jQuery(function($){
// 	$('#filter').submit(function(){
// 		var filter = $('#filter');
// 		$.ajax({
// 			url:filter.attr('action'),
// 			data:filter.serialize(), // form data
// 			type:filter.attr('method'), // POST
// 			beforeSend:function(xhr){
// 				filter.find('button').text('Chargement...'); // changing the button label
// 			},
// 			success:function(data){
// 				filter.find('button').text('Filtrer'); // changing the button label back
// 				$('.azerty').html(data); // insert data
// 			}
// 		});
// 		return false;
// 	});
// });

/* --------------------------*/
// Taxonomy Filter and pagination
/* --------------------------*/
if (pageTitle === 'Artistes | Saint Léon\'Art'){
    jQuery(function ($) {
        $('#filter').submit(function () {
            var filter = $('#filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                beforeSend:function(xhr){
					filter.find('button').text('Chargement...'); // changing the button label
				},
                success: function (data) {
                    $('.azerty').html(data); // insert data
                    console.log(data);
                }
            });
            return false;
        });
    });
}

if (pageTitle === 'Évènements | Saint Léon\'Art') {
    jQuery(function ($) {
        $('#event_filter').submit(function () {
            var filter = $('#event_filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                beforeSend:function(xhr){
					filter.find('button').text('Chargement...'); // changing the button label
				},
                success: function (data) {
                    $('.querty').html(data); // insert data
                    console.log(data);
                }
            });
            return false;
        });
    });
}