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

function anchorScroll(fragment) {
    "use strict";
    var ttarget = $('#' + fragment);
    $('html,body').animate({ scrollTop: ttarget.offset().top - 290 }, 500);
    return false;
}

function outsideToHash() {
    "use strict";
    var fragment;
    if (window.location.hash) {
        fragment = window.location.hash.substring(1);
        anchorScroll(fragment);
    }
}

function insideToHash(nnode) {
    "use strict";
    var fragment;
    fragment = $(nnode).attr('href').substring(1);
    anchorScroll(fragment);
}

$(document).ready(function () {
    "use strict";
    $("a[href^='#']").bind('click',  function () {insideToHash(this); });
    outsideToHash();
});

function anchorScroll(fragment) {
    "use strict";
    var ttarget = $('#' + fragment);
    $('html,body').animate({ scrollTop: ttarget.offset().top - 450 }, 500);
    return false;
}

function outsideToHash() {
    "use strict";
    var fragment;
    if (window.location.hash) {
        fragment = window.location.hash.substring(1);
        anchorScroll(fragment);
    }
}

function insideToHash(nnode) {
    "use strict";
    var fragment;
    fragment = $(nnode).attr('href').substring(1);
    anchorScroll(fragment);
}

$(document).ready(function () {
    "use strict";
    $("a[href^='#']").bind('click',  function () {insideToHash(this); });
    outsideToHash();
});