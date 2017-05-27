    $.ajax({
        url: "http://redis.o2ofh.com/api.php?m=Apps&c=order&a=checkorder&order_id=123",
        data: { 'qrcode': qrcode },
        dataType: 'JSON',
        cache: false,
        type: 'POST',
        success: function(res) {
            console.log(res)

        },
        error: function(e) {
            console.log(e);
        }
    });