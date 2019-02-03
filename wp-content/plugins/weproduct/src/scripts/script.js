jQuery(function($) {

    var frame = wp.media({
        title: 'Selecet or upload image',
        button: {
            text: 'Use this media'
        },
        multiple: false
    });

    $('#js-wepProductImage').on('click', function(e) {
        e.preventDefault(); 
        frame.open();
    });

    frame.on('select', function() {
        var attachment = frame.state().get('selection').first().toJSON();
        $('input[name=wepProductImage]').val(attachment.url);
    });
});