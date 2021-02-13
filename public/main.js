$(function () {
    $("#register_form").on("submit",function (e) {
        e.preventDefault();
        console.log("ini");

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function() {
                $(document).find('span.error-text').text('');
            },
            success:function(data) {
                if (data.status == 0) {
                    $.each(data.error, function (prefix, val) {
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#register_form')[0].reset();
                    alert(data.msg);
                }
            }
        });
    });

    $("#login_form").on("submit",function (e) {
        e.preventDefault();
        console.log("ini login");

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function() {
                $(document).find('span.error-text').text('');
            },
            success:function(data) {
                if (data.status == -1) {
                    console.log("-1");
                    $('span.email_error').text(data.msg);
                }
                else if (data.status == 0) {
                    console.log("0");
                    $('span.password_error').text(data.msg);
                }
                else{
                    console.log("ini login");
                    $('#login_form')[0].reset();
                    window.location.href = '/layout/home';
                }
            }
        });
    });
});