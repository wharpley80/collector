$(document).ready(function() {
    setActivePublisher = function() {
        $('.publisher-menu .active').removeClass('active');
        $('.publisher-' + platformSlug).addClass('active');
    }
});