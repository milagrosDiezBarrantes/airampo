//   <----modal
$('.modalbtn a').on("click", function(event) {
    event.preventDefault();
    $("#modal1").addClass("open");

    // x$('#modaltitle').attr('innerHTML', "https://instagram.com/wrong.404");
    // alert($(this).attr("data-descrip"));
    // $("h4").text($(this).attr("data-titulo"));
    // $("p").text($(this).attr("data-descrip"));
    // fukin awesome :v $(this).children("div.hover-effect").first().children("div.hover-content").first().text("new text");
    $("#modaltitle").children("h4").first().text(
        $(this).attr("data-titulo")
    );
    $("#modaltitle").children("p").first().text(
        $(this).attr("data-descrip")
    );
    // para cargar imagenes :D $("#modalpic").attr('src', 'hola.jpg');
});

$("#modal1, #modal1 button.close").on("click keyup", function(event) {
    if (
        event.target == this ||
        event.target.className == "close" ||
        event.keyCode == 27
    ) {
        $(this).removeClass("open");
        // alert('se cerro el modal');
    }
});
// modal----/>