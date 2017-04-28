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
    if(!pFinal.isMobile(phone)){
        $('#phone-tip').show();
    }else{
        $('#phone-tip').hide();
    }
}
function UserRegister() {
    var phone = $("#js-phone").val();
    if (!pFinal.isMobile(phone)) {
        pFinal.alert("请输入正确的手机号码");
        return;
    }
    var registerData = {
        'phone': phone
    };

}