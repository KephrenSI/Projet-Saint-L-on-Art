$(document).ready(function () {
    $('.stat__list--elt:first-child').addClass('active');
    
    $('.stat__list--elt').click(function(e) {

        $('.stat__list--elt').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});


