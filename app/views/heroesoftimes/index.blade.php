<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>时代英雄问问答</title>
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/jquery-2.1.4.min.js"></script>
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="//wx.idsbllp.cn/game/game/js/heroesoftimes/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="//wx.idsbllp.cn/game/game/css/heroesoftimes/style.css">
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/styleSet.js"></script>
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/main.js"></script>
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/LoadQuestion.js"></script>
    <script src="//wx.idsbllp.cn/game/game/js/heroesoftimes/selectWord.js"></script>
    <link rel="stylesheet" href="//wx.idsbllp.cn/game/game/css/copyright-toast/toast.css">
    {{--<link rel="stylesheet" href="{{URL::asset('css/copyright-toast/toast.css')}}"/>--}}
    <!--17-05-17 点击弹出版权信息-->
</head>
<body>
    <div data-role="page" id="Loading">

    </div>
    <div data-role="page" id="LeadPage">
        <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/lead_back.png" class="game-title">
        <div class="gameBack">
            习近平总书记指出：“近代以来，一切为中华民族独立和解放而牺牲的人们，一切为中华民族摆脱外来殖民统治和侵略而英勇斗争的人们，一切为中华民族掌握自己命运、开创国家发展新路的人们，都是民族英雄，都是国家荣光。中国人民将永远铭记他们建立的不朽功勋！”
        </div>
        <div class="beginBtn">
            <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/begin-btn.png" class="imgBtn">
        </div>
        <div class="copyRight">
            <p class="copyright">©红岩网校工作站出品</p>
        </div>
         <!-- <p class="copyright">
            ©红岩网校工作站出品
            <span id="about-btn" class="about-btn">?</span>
            17-05-17 点击弹出版权信息
        </p>  -->
    </div>
    <div data-role="page" id="GamePage">
        <div class="avatar">
            <img src="" class="imgAvatar quesAvatar">
        </div>
        <div class="question">

        </div>
        <ul class="answer3">
            <li></li>
            <li></li>
            <li style="border-right: none"></li>
        </ul>
        <ul class="answer2" style="display: none">
            <li></li>
            <li style="border-right: none"></li>
        </ul>
        <ul class="selections">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li style="margin-right: 0;"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li style="margin-right: 0;"></li>
        </ul>
        <div class="copyRight">
            <p class="copyright">©红岩网校工作站出品</p>
        </div>
    </div>
    <div data-role="page" id="Introduce">
        <div class="avatar">
            <img src="" class="imgAvatar introAvatar">
        </div>
        <div class="introWords">
        </div>
        <div class="nextBtn">
            <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/nextBtn.png" class="imgBtn">
        </div>
        <div class="copyRight">
            <p class="copyright">©红岩网校工作站出品</p>
        </div>
    </div>
    <div data-role="page" id="rankPage">
        <div class="logbox">
        <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/rankTitle.png" class="rankTitle">
        </div>
        <div class="headimg"></div>
        <div class="rankBox">
            <p>本轮学习</p>
            <p>共答对<span class="rightN"></span>道题</p>
            <p>您的最高排名为<span class="rank"></span>名</p>
        </div>
        <div class="apply">
            <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/apply.png" class="applyImg">
        </div>
        <div class="share">
            <img src="//wx.idsbllp.cn/game/game/images/heroesoftimes/replay.png" class="shareImg">
        </div>
        <div class="copyRight">
            <p class="copyright">©红岩网校工作站出品</p>
        </div>
    </div>

    {{--<script src="{{URL::asset('js/copyright-toast/toast.js')}}"></script>--}}
    <script src="//wx.idsbllp.cn/game/game/js/copyright-toast/toast.js"></script>
    <script>
        var avatar ="{{$avatar}}";
        document.querySelector('.headimg').innerHTML='<img src="'+avatar+'">';
        ;(function (window, undefined) {
            let toast = new Toast({
                teacher: '杨奇凡',
                front: '周政',
                back: '隆宗益',
                design: '葛静'
            });
            let btn = document.querySelector('#about-btn');

            btn.addEventListener('click', function () {
                toast.show();
            }, false);
        } (window, undefined));
    </script>
    <!--17-05-17 点击弹出版权信息-->
    <script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        var title = "我正在参加 “两学一做——时代先锋问问答”微信游戏争霸赛，你也加入吧！";
        var link = "http://mp.weixin.qq.com/s?__biz=MjM5NDAzNDM2MQ==&mid=2653740852&idx=1&sn=bffbcfed9389a83c778da91e0280020f";
        var imgUrl = "//wx.idsbllp.cn/game/game/images/heroesoftimes/lead_back.png";
        var desc = "追寻先锋足迹，做勇挑重担的共产党人";
        //        jssdk
        wx.config({
            debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: "{{$appid}}", // 必填，公众号的唯一标识
            timestamp: "{{$ticket['timestamp']}}", // 必填，生成签名的时间戳
            nonceStr: "{{$ticket['noncestr']}}", // 必填，生成签名的随机串
            signature: "{{$ticket['signature']}}",// 必填，签名，见附录1
            jsApiList: [
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
            ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
        });
        wx.ready(function(){
            wx.onMenuShareTimeline({
                title: title, // 分享标题
                link: link,
                imgUrl: imgUrl,
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
            wx.onMenuShareAppMessage({
                title: title, // 分享标题
                desc: desc, // 分享描述
                link: link,
                imgUrl: imgUrl, // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
            wx.onMenuShareQQ({
                title: title, // 分享标题
                desc: desc, // 分享描述
                link: link,
                imgUrl: imgUrl, // 分享图标
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
        });
    </script>
</body>
</html>
