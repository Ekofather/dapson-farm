/**
 * Annie Cakes - Admin JavaScript
 */
(function ($) {
    'use strict';

    $(document).ready(function () {

        function handleImport(buttonId, statusId, action) {
            $(buttonId).on('click', function () {
                var btn = $(this);
                var status = $(statusId);

                btn.prop('disabled', true).text('Importing...');
                status.removeClass('success error loading').addClass('loading').text('Please wait...').show();

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        action: action,
                        nonce: typeof annie_cakes_admin !== 'undefined' ? annie_cakes_admin.nonce : ''
                    },
                    success: function (response) {
                        if (response.success) {
                            status.removeClass('loading').addClass('success').text(response.data.message);
                        } else {
                            status.removeClass('loading').addClass('error').text(response.data.message || 'Error occurred.');
                        }
                        btn.prop('disabled', false).text('Done!');
                    },
                    error: function () {
                        status.removeClass('loading').addClass('error').text('Request failed. Please try again.');
                        btn.prop('disabled', false).text('Retry');
                    }
                });
            });
        }

        handleImport('#ac-import-products', '#ac-import-status', 'annie_import_products');
        handleImport('#ac-create-pages', '#ac-pages-status', 'annie_create_pages');
        handleImport('#ac-import-testimonials', '#ac-testimonials-status', 'annie_import_testimonials');

    });

})(jQuery);
