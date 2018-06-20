/**
 * Created by truemenhale on 16/5/17.
 */
var r = "";
var flag = 0;
var disable = 0;
var rightN = 0;
var timerMAX = null;
var timerMid = null;
var timerMin = null;
var max = 0;
var mid = 0;
var min = 0;
function Delete(_this){
    if(flag > 0){
        flag--;
        r = r.substring(0,flag);
        console.log(r);
        _this.html("");
    }
}
function tapFn(_data,q,_this,aLi,obj){
    aLi.eq(flag).html(_this.html());
    r += _this.html();
    flag++;
    if(parseInt(_data.nameLength) == 3){
        if(flag == 3){
            clearInterval(timerMAX);
            clearInterval(timerMid);
            clearInterval(timerMin);
            if(q == 8){
                obj.src = "//wx.idsbllp.cn/game/game/images/twolearnonedo/seeResult.png";
            }
            disable = 1;
            if(r == _data.answer){
                aLi.css('color','#14c724');
                rightN++;
            }else {
                aLi.css('color','#f03c45');
            }
            setTimeout(function(){
                $.mobile.changePage('#Introduce',{
                    "transition":"slide"
                });
                disable = 0;
                aLi.html("");
                aLi.css('color','#333');
            },200);
            return ++q;
        }
    }else {
        if(flag == 2){
            clearInterval(timerMAX);
            clearInterval(timerMid);
            clearInterval(timerMin);
            if(q == 8){
                obj.src = "//wx.idsbllp.cn/game/game/images/twolearnonedo/seeResult.png";
            }
            disable = 1;
            if(r == _data.answer){
                aLi.css('color','#14c724');
                rightN++;
            }else {
                aLi.css('color','#f03c45');
            }
            setTimeout(function(){
                $.mobile.changePage('#Introduce',{
                    "transition":"slide"
                });
                disable = 0;
            },200);
            return ++q;
        }
    }
}
$(function(){
    var playGame = $('.beginBtn');
    var replayGame = $('.shareImg');
    var selectors = $('.selections').find('li');
    var answerTwo = $('.answer2');
    var answerThree = $('.answer3');
    var aLiTwo = answerTwo.find('li');
    var aLiThree = answerThree.find('li');
    var nextImg = $('.imgBtn');
    var Qn = 0;
    var nextBtn = $('.nextBtn');
    var applyBtn = $('.apply');
    var replyBtn = $('.applyImg');
    replyBtn.on('tap',function(){
        //location.reload();
        window.location.href="https://wx.idsbllp.cn/game/game/index.php/heroesoftimes"
    });
    aLiThree.on('tap',function(){
        Delete($(this));
    });
    aLiTwo.on('tap',function(){
        Delete($(this));
    });
    nextBtn.on('tap',function(){
        aLiThree.html("");
        aLiThree.css('color','#333');
        aLiTwo.html("");
        aLiTwo.css('color','#333');
        r = "";
        flag = 0;
        if(Qn == 9){
            var time = max+'.'+mid+""+min;
            $('.time').html(time);
            $('.rightN').html(rightN);
            $.mobile.loading('show');
            var data_ = {};
            data_.right = rightN;
            data_.time = time;
            $.post("//wx.idsbllp.cn/game/game/index.php/recordscoreforhot",data_,function(data){
                if(data.status == 200){
                    $('.rank').html(data.data);
                    $.mobile.loading('hide');
                    $.mobile.changePage('#rankPage',{
                        "transition":"turn"
                    });
                }else {
                    alert(data.info);
                }
            });
            return 0;
        }
        ChangeQuestion(_data[Qn],selectors);
    });
    selectors.on('click',function(){
        if(disable){
            return 0;
        }
        if(parseInt(_data[Qn].nameLength) == 3){
            var p = tapFn(_data[Qn],Qn,$(this),aLiThree,selectors);
            if(p){
                Qn = p;
            }
        }else {
            var l = tapFn(_data[Qn],Qn,$(this),aLiTwo,selectors);
            if(l){
                Qn = l;
            }
        }
    });

    playGame.on('tap',function(){
        ChangeQuestion(_data[Qn],selectors);
        //console.log(_data);
    });
    replayGame.on('tap',function(){
	    Qn=0;
        _data=[];
        var imgs = ["//wx.idsbllp.cn/game/game/images/twolearnonedo/lead_back.png","//wx.idsbllp.cn/game/game/images/twolearnonedo/begin-btn.png","//wx.idsbllp.cn/game/game/images/twolearnonedo/nextBtn.png","//wx.idsbllp.cn/game/game/images/twolearnonedo/replay.png","//wx.idsbllp.cn/game/game/images/twolearnonedo/apply.png","//wx.idsbllp.cn/game/game/images/twolearnonedo/seeResult.png"];

        $.post("//wx.idsbllp.cn/game/game/index.php/getquestionforhot",1,function(data){
            $.mobile.loading('show');
            if(data.status == 200){
                _data = data.data;
                for(var i = 0,len = _data.length; i<len; i++){
                    imgs.push(_data[i].pic);
                    initConfusion(i);
                }
                loadImg(imgs);
            }else {
                alert(data.info);
            }
            ChangeQuestion(_data[Qn],selectors);
            //console.log(_data);
        });
    });
});
