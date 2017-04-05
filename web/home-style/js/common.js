$(function () {
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
    /*显示导航条*/
    function showBar() {
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

    /*隐藏导航条*/
    function hideBar() {
        $(".bar-area ").css({'background-color': '#F5F5F5', "border": 'none', "color": "#6b5f5c"});
        $('.area-info').hide();
        $('.bar-area div i').attr('class', 'icon-sort-down icon-large');
        $('.bar-area div').css({'position': 'relative', 'top': '-3px'});
    }

});