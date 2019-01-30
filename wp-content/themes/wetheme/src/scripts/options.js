jQuery(function($) {

    var frame = wp.media({
        title: 'Selecet or upload logo',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });

    $('#inputLogoImg').on('click', function(e) {
        e.preventDefault(); 
        frame.open();
    });

    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=we_inputLogoImg]').val(attachment.url);
    })
});