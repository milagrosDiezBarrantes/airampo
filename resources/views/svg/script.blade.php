<!-- script us map -->
<script>
    TX1.onclick = function(event) {
        window.location.replace("/polo");
    };
    TX2.onclick = function(event) {
        window.location.replace("/lago");
    };
    TX3.onclick = function(event) {
        window.open("/boulevard","_self")
    };
    // TX4.onclick = function(event) {
    //     alert('¡Genial!');
    // };
    // TX5.onclick = function(event) {
    //     alert('¡Genial!');
    // };
    // TX6.onclick = function(event) {
    //     alert('¡Genial!');
    // };
    // TX7.onclick = function(event) {
    //     alert('¡Genial!');
    // };
    // TX8.onclick = function(event) {
    //     alert('¡Genial!');
    // };
    $("path, circle").onclick = function(event) {

        alert('¡Genial!');

    };


    $("path, circle").hover(function(e) {
        $('#info-box').css('display', 'block');
        $('#info-box').html($(this).data('info'));
    });

    $("path, circle").mouseleave(function(e) {
        $('#info-box').css('display', 'none');
    });

    $(document).mousemove(function(e) {
        $('#info-box').css('top', e.pageY - $('#info-box').height() - 30);
        $('#info-box').css('left', e.pageX - ($('#info-box').width()) / 2);
    }).mouseover();

    var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    if (ios) {
        $('a').on('click touchend', function() {
            var link = $(this).attr('href');
            window.open(link, '_blank');
            return false;
        });
    }
</script>
