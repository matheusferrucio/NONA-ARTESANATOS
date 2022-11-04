$(document).ready(function() {
    $('.autoWidth').lightSlider({ // pega a classe do slider
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });
});