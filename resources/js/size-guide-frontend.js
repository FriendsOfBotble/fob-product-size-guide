/**
 * Size Guide Frontend - Product Page
 */

(function($) {
    'use strict';

    const SizeGuideFrontend = {
        init: function() {
            // Initialize Bootstrap modal if exists
            if ($('#sizeGuideModal').length && typeof bootstrap !== 'undefined') {
                // Modal is automatically initialized by Bootstrap 5
                console.log('Size Guide modal ready');
            }

            // Handle collapse toggle icon
            this.initCollapseToggle();
        },

        initCollapseToggle: function() {
            const $header = $('.size-guide-header');
            const $content = $('#sizeGuideContent');
            const $chevron = $('.chevron-icon');

            if ($header.length && $content.length && $chevron.length) {
                $content.on('show.bs.collapse', function() {
                    $chevron.addClass('expanded');
                    $header.attr('aria-expanded', 'true');
                });

                $content.on('hide.bs.collapse', function() {
                    $chevron.removeClass('expanded');
                    $header.attr('aria-expanded', 'false');
                });
            }
        }
    };

    $(document).ready(function() {
        if ($('#product-size-guide').length) {
            SizeGuideFrontend.init();
        }
    });

})(jQuery);
