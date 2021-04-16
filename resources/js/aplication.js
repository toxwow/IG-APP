let text = ["kochanie", "Izunia", "ziomuś"];
let counter = 0;
const elem = $("#changer");
setInterval(change, 5000);
function change() {
    elem.fadeOut(function(){
        elem.html(text[counter]);
        counter++;
        if(counter >= text.length) { counter = 0; }
        elem.fadeIn();
    });
}

$('*[data-target="modal"]').click(function(){
    $('section.help-modal').addClass('active');
});


$('.modal__close').click(function(){
    $('section.help-modal').removeClass('active');
});