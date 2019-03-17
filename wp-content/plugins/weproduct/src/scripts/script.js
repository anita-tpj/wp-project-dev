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

    $(document).on('submit', '#productForm', function(e) {
        e.preventDefault();
        $(this).hide();
        $('#productStatus').html('<div class="alert alert-info">Please wait! We are submiting your product.</div>');

        var formObj = {
            action: 'wep_submit_user_product',
            'name': $('#wepProductName').val(),
            'description': tinymce.activeEditor.getContent(),
            'details': $('#wepProductDetails').val(),
            'type': $('#wepProductType').val(),
            'category': $('#wepProductCategory').val(),
            'image': $('#wepProductImage').val(),
            'price': $('#wepProductPrice').val() ,
            'sku': $('#wepProductSKU').val(),
            'stock': $('#wepProductInStock').val(),
            'featured': $('#wepProductOutOfStock').val()
        };

        

        $.post(product_obj.ajax_url, formObj, function(data) {
            if(data.status == 2) {
                $('#productStatus').html('<div class="alert alert-success">Product submitted successfully! An admin will approve it.</div>');

            }else {
                $('#productStatus').html('<div class="alert alert-danger">Unable to submit product. Please fill in all fields.</div>');
                $('#productForm').show();

            }
        });
    });
});