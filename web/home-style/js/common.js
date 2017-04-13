$(function () {
    /*--------------区域下拉显示隐藏--------------*/
    /*实现区域下拉框的显示和隐藏*/
    $(".bar-area").bind({
        mouseover: function () {
            showBar();
        }, mouseout: function () {
            hideBar();
        }
    });
    $(".area-info").bind({
        mouseover: function () {
            showBar();
            $('.area-info').show();
        }, mouseout: function () {
            hideBar();
            $('.area-info').hide();
        }
    });
    /*显示区域*/
    function showBar() {
        //修改选中的背景颜色
        var province = $('.bar-area span').html();
        var aArray = $('.area-content table').find('a');
        for (var i = 0; i < aArray.length; i++) {
            if (aArray.eq(i).html() == province) {
                $('.area-content table').find('div').eq(i).addClass('divbgcolor');
            }
        }


        $(".bar-area").css({
            'background-color': '#fff',
            'border': "1px solid #B1A5A1",
            "border-bottom": "none",
            "border-top": "none",
            "color": "#F10180"
        });
        $('.bar-area div i').attr('class', 'icon-sort-up icon-large');
        $('.bar-area div').css({'position': 'relative', 'top': '3px'});
        $('.area-info').show();
    }

    /*隐藏区域*/
    function hideBar() {
        $(".bar-area ").css({'background-color': '#F5F5F5', "border": 'none', "color": "#6b5f5c"});
        $('.area-info').hide();
        $('.bar-area div i').attr('class', 'icon-sort-down icon-large');
        $('.bar-area div').css({'position': 'relative', 'top': '-3px'});
    }


    /*-------登录下拉显示隐藏-------*/
    /*实现区域下拉框的显示和隐藏*/
    $(".bar-login").bind({
        mouseover: function () {
            showLoginBar();
        }, mouseout: function () {
            hideLoginBar();
        }
    });
    $(".login-area").bind({
        mouseover: function () {
            showLoginBar();
            $('.login-area').show();
        }, mouseout: function () {
            hideLoginBar();
            $('.login-area').hide();
        }
    });

    /*显示区域*/
    function showLoginBar() {
        $(".login").css({
            'background-color': '#fff',
            'border': "1px solid #B1A5A1",
            "border-bottom": "none",
            "border-top": "none"
        });
        $(".login div:last-child").html('');
        $('.login-area').show();
    }

    /*隐藏区域*/
    function hideLoginBar() {
        $(".login ").css({'background-color': '#F5F5F5', "border": 'none', "color": "#6b5f5c"});
        $(".login div:last-child").html('/');
        $('.login-area').hide();
    }

});