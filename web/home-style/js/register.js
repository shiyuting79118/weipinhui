/**
 * Created by Administrator on 2017/4/27.
 */

// (function (win) {
//     if (!win.UserRegister)
//         var F = {
//             Extend: function (dest, source, replace) {
//                 for (prop in source) {
//                     if (replace == false && dest[prop] != null)
//                         continue;
//                     dest[prop] = source[prop];
//                 }
//                 return dest;
//             }
//         };
//     win.UserRegister = F;
// })(window);
//
// (function () {
//     var Funcs = {
//         Register: function () {
//             alert(1);
//         }
//
//     };
//     UserRegister.Extend(UserRegister, Funcs, false);
// })();
function checkPhone() {
    var phone = $("#js-phone").val();
    if (!pFinal.isMobile(phone)) {
        $('#phone-tip').show();
    } else {
        $('#phone-tip').hide();
    }
}
function UserRegister() {
    var phone = $("#js-phone").val();
    // if (!pFinal.isMobile(phone)) {
    //     pFinal.alert("请输入正确的手机号码");
    //     return;
    // }

    //todo  做验证判断
    var password = $('js-password').val();
    var repassword = $('js-repassword').val();
    var message = $('js-message').val();
    var registerData = {
        'phone': phone,
        'password': password,
        'repassword': repassword,
        'message': message

    };
    $.ajax({
        type: "POST",
        url: "register  ",
        data: {'registerData': registerData},
        dataType: "json",
        success: function (result) {
            if (result.status) {
                alert('注册成功');
            } else {
                alert(result.info);
            }
        },
        error: function (xmlHttpRequest, textStatus, errorThrown) {
            alert("网络出错");
        }
    });

}