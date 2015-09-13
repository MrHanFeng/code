HTML兼容性问题
    本质是对CSS的应用问题，如果是按照正常排版进行，大排版根本不会乱
    切勿乱用position float margin，为了某个浏览器的页面效果而强凑,

    注意点:
        1.float与 clear 的联合使用（因为如果没有清楚浮动，它在天空飘着，撑不开外层盒子，理解）
        2.postion 的relative abstract属性灵活应用
        3.HTML开头写 <!DOCTYPE html>

    兼容性常用解决办法：
       1.居中问题：
            IE中：<body style="text-align:center"> 

        2.边框问题:
            <!-- [if  It IE9,10]>
                    在这里写适合IE的代码，放在正常代码后边，使覆盖
            <!  [Endif] -->

            * IE识别 FF等跳过不识别,后写覆盖