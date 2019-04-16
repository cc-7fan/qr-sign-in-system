<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="pragram" content="no-cache" />

    <link href="css/prize_style.css" type="text/css" rel="stylesheet">

    <title>网薪抽奖页面</title>
    <!--移动端版本兼容 -->
    <script type="text/javascript">
        var phoneWidth =  parseInt(window.screen.width);
        var phoneScale = phoneWidth/640;
        var ua = navigator.userAgent;
        if (/Android (\d+\.\d+)/.test(ua)){
            var version = parseFloat(RegExp.$1);
            // andriod 2.3
            if(version>2.3){
                document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                // andriod 2.3以上
            }else{
                document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
            }
            // 其他系统
        } else {
            document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
        }
    </script>
    <script src="js/jquery.min.js"></script>

</head>
<body>

<div class="niu_danji">
    <!--机器-->
    <div class="game_qu">
        <!--go-->
        <div class="game_go">30/次</div>
        <div class="wdjifen">123</div>
    </div>

    <!--球-->
    <div class="dan_gund">
        <span  class="qiu_1 diaol_1"></span>
        <span  class="qiu_2 diaol_2"> </span>
        <span  class="qiu_3 diaol_3"></span>

        <span  class="qiu_4 diaol_4"></span>
        <span  class="qiu_5 diaol_5"></span>
        <span  class="qiu_6 diaol_6"></span>>

        <span  class="qiu_7 diaol_7"></span>
        <span  class="qiu_8 diaol_8"></span>


        <span  class="qiu_9 diaol_9"></span>
        <span  class="qiu_10 diaol_10"></span>
        <span  class="qiu_11 diaol_11"></span>

    </div>

    <!--中奖掉落-->
    <div class="medon"><img src="images/prize_image/mendong.png"></div>
    <div class="zjdl ">
        <span></span>
    </div>

</div>




<!--中奖 获得一等奖-->
<div class="zonj_zezc none" id="jianpin_one">
    <div class="jpzs aiqiyi tc_anima">
        <em><img src="images/prize_image/close.png"></em>
        <h2>
            <b>恭喜你！<br>获得一等奖！</b>
        </h2>
    </div></div>

<!--中奖获得二等奖-->
<div class="zonj_zezc none"  id="jianpin_two">
    <div class="jpzs aiqiyi tc_anima">
        <em><img src="images/prize_image/close.png"></em>
        <h2>
            <b>恭喜你！<br>获得二等奖！</b>
        </h2>
    </div>
</div>

<!--中奖 获得三等奖-->
<div class="zonj_zezc none"  id="jianpin_three">
    <div class="jpzs aiqiyi tc_anima">
        <em><img src="images/prize_image/close.png"></em>
        <h2>
            <b>恭喜你！<br>获得三等奖！</b>
        </h2>
    </div>
</div>


<!--没有中奖-->
<div class="zonj_zezc none" id="jianpin_kong">
    <div class="jpzs aiqiyi tc_anima">
        <em><img src="images/prize_image/close.png"></em>
        <h2>
            咦？没有抽中？
        </h2>
    </div>
</div>


<!--网薪不足-->
<div class="zonj_zezc none" id="no_jifeng">
    <div class="jpzs aiqiyi tc_anima">
        <em><img src="images/prize_image/close.png"></em>
        <h2>
            对不起，网薪不足！
        </h2>
    </div>
</div>
<script>

    $(document).ready(function(e) {
        //一等奖 关闭
        $("#jianpin_one em img").click(function(){
                $("#jianpin_one").hide();
            }
        );
        //二等奖 关闭
        $("#jianpin_two em img").click(function(){
                $("#jianpin_two").hide();
            }
        );
        //三等奖 关闭
        $("#jianpin_three em img").click(function(){
                $("#jianpin_three").hide();
            }
        );
        //没有中奖 关闭
        $("#jianpin_kong em img").click(function(){
                $("#jianpin_kong").hide();
            }
        );
        //积分不足 关闭
        $("#no_jifeng em img").click(function(){
                $("#no_jifeng").hide();
            }
        );

        var score=600;
        $(".wdjifen").html(score);


        $(".game_go").click(function(){
            score-=30;
            if(score<0){
                // for(i=1;i<=11;i++){
                //     $(".qiu_"+i).removeClass("wieyi_"+i);
                // }
                $("#no_jifeng").show();
            }else{
                draw()
            }
        });


        function draw(){
            var number =Math.floor(4*Math.random()+1);

            for(i=1;i<=11;i++){
                $(".qiu_"+i).removeClass("diaol_"+i);
                $(".qiu_"+i).addClass("wieyi_"+i);
            };

            setTimeout(function (){
                for(i=1;i<=11;i++){
                    $(".qiu_"+i).removeClass("wieyi_"+i);
                }
            },1100);
            setTimeout(function(){
                switch(number){
                    case 1:$(".zjdl").children("span").addClass("diaL_one");break;
                    case 2:$(".zjdl").children("span").addClass("diaL_two");break;
                    case 3:$(".zjdl").children("span").addClass("diaL_three");break;
                    case 4:$(".zjdl").children("span").addClass("diaL_four");break;
                }
                $(".zjdl").removeClass("none").addClass("dila_Y");
                setTimeout(function (){
                    switch(number){
                        case 1:$("#jianpin_one").show();break;
                        case 2:$("#jianpin_two").show();break;
                        case 3:$("#jianpin_three").show();break;
                        case 4:$("#jianpin_kong").show();break;
                    }
                },900);
            },1100)

            //取消动画
            setTimeout(function (){
                $(".zjdl").addClass("none").removeClass("dila_Y");
                $(".wdjifen").html(score);
                $(".zjdl").children("span").removeAttr('class');

            },2500)

        }
    });

</script>
</body>
</html>