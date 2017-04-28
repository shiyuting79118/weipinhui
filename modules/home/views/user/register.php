<div class="register-form">
    <div>欢迎注册&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已注册可<a>直接请登录</a>
    </div>
    <div>
        <input type="text" name="username" id="js-phone" onblur="checkPhone()" placeholder="请输入手机号码">
        <label for="" id="phone-tip">请输入正确的手机号码</label>
    </div>

    <div>
        <input type="password" name="password" placeholder="密码由6-20位字母，数字和符号组合">
    </div>

    <div>
        <input type="password" name="repassword" placeholder="密码由6-20位字母，数字和符号组合">
    </div>

    <div class="message">
        <input type="text" name="message" placeholder="短信验证码">
        <button type="button" class="btn btn-default message-btn">获取取证码</button>
    </div>

    <div>
        <button type="button" class="btn btn-default register-btn" onclick="UserRegister()">注册</button>
    </div>
</div>

<script src="<?= \yii\helpers\Url::base() ?>/home-style/js/register.js"></script>

