function userLogin() {
    var username = $('#js-username').val();
    var password = $('#js-password').val();

    $.ajax({
        type: "POST",
        url: "login",
        data: {'username': username,'password':password},
        dataType: "json",
        success: function (result) {
            if (result.status) {
                window.location="login"
            } else {
                window.location=result.info;
                alert(result.info);
            }
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {
            alert("网络出错");
        }
    });
}