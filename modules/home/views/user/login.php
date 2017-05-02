<div class="login-form">
    <h5>如有帐户，请登录</h5>
    <div>
        <input type="text" name="username" id="js-username" placeholder="用户名/手机/邮箱">
    </div>

    <div>
        <input type="password" name="password" id="js-password" placeholder="密码">
    </div>

    <div>
        <button type="button" class="btn btn-default login-btn" onclick="userLogin()">登录</button>
    </div>

    <div class="login-checked">
        <div>
            <div><input type="checkbox" checked="checked"></div>
            <div class="remember_password">记住密码</div>

        </div>
        <div>
            <a href="">忘记密码?</a>｜
            <a href="<?= yii\helpers\Url::toRoute('user/register')?>">免费注册</a>
        </div>
    </div>
</div>

<script src="<?= \yii\helpers\Url::base() ?>/home-style/js/login.js"></script>
