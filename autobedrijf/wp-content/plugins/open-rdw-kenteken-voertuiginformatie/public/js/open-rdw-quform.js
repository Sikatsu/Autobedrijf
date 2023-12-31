jQuery(document).ready(function($) {
    function ucFirst(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    $(document).on('change', '.' + ajax.license, function() {
        var fields = ajax.fields;
        var license = $(this).val();
        var status = $(this).next('img.status');

        if (status.length == 0) {
            $(this).after('<img src="' + ajax.images.loading + '" id="open_rdw_quform-loading" class="status" style="display: none;">');
            $(this).after('<img src="' + ajax.images.warning + '" id="open_rdw_quform-error" class="status" style="display: none;">');
            $(this).after('<img src="' + ajax.images.success + '" id="open_rdw_quform-accepted" class="status" style="display: none;">');
        }

        var data = {
            action: 'get_open_rdw_data',
            kenteken: license
        };

        $('#open_rdw_quform-error').hide();
        $('#open_rdw_quform-accepted').hide();
        $('#open_rdw_quform-loading').show();

        $.post(ajax.url, data, function(res) {
            $('#open_rdw_quform-loading').hide();
            if (res.errors) {
                $('#open_rdw_quform-error').show();
            } else {
                $('#open_rdw_quform-accepted').show();
            }


            $.each(res.result, function(key, value) {
                if (ucFirst(key) !== 'Kenteken' && fields[ucFirst(key)] && $('.' + fields[ucFirst(key)])) {
                    $('.' + fields[ucFirst(key)]).val(value);
                }
            });
        });
    });
});