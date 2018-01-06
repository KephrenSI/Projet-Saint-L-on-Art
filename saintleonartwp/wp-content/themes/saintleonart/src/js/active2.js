$(document).ready(function () {
    $('.pratique__list--elt:first-child').addClass('active');
    
    $('.pratique__list--elt').click(function(e) {

        $('.pratique__list--elt').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});