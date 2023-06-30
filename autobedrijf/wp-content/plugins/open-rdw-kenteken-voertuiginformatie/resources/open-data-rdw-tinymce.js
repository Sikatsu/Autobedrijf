jQuery(document).ready(function($) {

    var rdw_table = '<p>Unable to retrieve data</p><p>Please check your internet connection</p>';

    $.get('../wp-content/plugins/open-rdw-kenteken-voertuiginformatie/resources/open-data-rdw-tinymce-tablecreator.php')
     .done(function(data) {

        rdw_table = data;

    }).always(function(){

        var rdw_modal = [
            '<div class="open-rdw-modal-background">',
            '<div class="open-rdw-modal">',
            '<h3>Selecteer welke velden weergegeven moeten worden:</h3>',
            rdw_table,
            '<p>',
            '<input type="submit" class="button action" value="Annuleren" id="open-rdw-modal-cancel">',
            '<input type="submit" class="button-primary" value="Shortcode toevoegen" id="open-rdw-modal-confirm">',
            '</p>',
            '</div>',
            '</div>'
        ].join('\n');


        if (typeof tinymce !== 'undefined') {
            tinymce.create('tinymce.plugins.open_data_rdw_plugin', {
                init: function(ed, url) {
                    // Register command for when button is clicked
                    ed.addCommand('open_data_rdw_insert_shortcode', function() {

                        var rdw_fields = [];
                        $('body').append(rdw_modal);
                        var $modal = $('.open-rdw-modal-background');
                        $modal.fadeIn(250);

                        $('#open-rdw-modal-cancel').on('click', function(e) {
                            e.preventDefault();
                            $modal.fadeOut(250, function() {
                                $modal.remove();
                            });
                        });

                        $('#open-rdw-modal-confirm').on('click', function(e) {
                            e.preventDefault();
                            $('.open-data-settings-table input:checked').map(function() {
                                var value = $(this).attr('name');
                                rdw_fields.push(value);
                            });
                            if (rdw_fields.length > 0) {
                                content = '[open_data_rdw_check "' + rdw_fields.join('" "') + '"]';
                            } else {
                                content = '[open_data_rdw_check]';
                            }

                            tinymce.execCommand('mceInsertContent', false, content);
                            $modal.fadeOut(250, function() {
                                $modal.remove();
                            });
                        });

                    });

                    // Register buttons - trigger above command when clicked
                    ed.addButton('open_data_rdw_button', {
                        title: 'Insert shortcode',
                        cmd: 'open_data_rdw_insert_shortcode',
                        image: url + '/open-rdw_grey.png'
                    });
                },
            });

            // Register our TinyMCE plugin
            // first parameter is the button ID1
            // second parameter must match the first parameter of the tinymce.create() function above
            tinymce.PluginManager.add('open_data_rdw_button', tinymce.plugins.open_data_rdw_plugin);
        }

    });

});