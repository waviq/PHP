(function(){
    var submitAjaxRequest =  function(e){

        var form = $(this);
        var method = form.find('input[name="_method"]').val()||'POST';

        $.ajax({
           type:method,
            url: form.prop('action'),
            data:form.serialize(),
            success:function(){
                $.publish('form.submitted', form);
            }
        });

        e.preventDefault();
    };

    //Form dg Key "data-remote" akan di tembak submit dg ajax
    $('form[data-remote]').on('submit', submitAjaxRequest);

    //Ketika di ceck/unceck box automatis simpan ke DB tanpa tombol submit
    $('*[data-click-submits-form]').on('change', function(){
        $(this).closest('form').submit();
    });
}());