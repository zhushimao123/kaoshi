<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>
<h1><font style="color: cyan">球球聊天室</font></h1>
<div id="box" style="width: 200px; height: 200px; background-color: coral">

</div>
<input type="text" id="text">
<button id="btn">发送</button>
{{--<script>--}}
    {{--$(function () {--}}
        {{--var str = window.prompt("请输入用户名","")--}}
        {{--var name = str;--}}
        {{--var web = new WebSocket("ws://192.168.30.129:9503");--}}
        {{--web.onopen = function () {--}}
            {{--//私聊--}}
            {{--var a ='';--}}
            {{--$(document).on('click','#a',function () {--}}
                {{--var uname = $(this).text();--}}
                {{--$('#text').val('@'+uname);--}}
                {{--a =  $(this).children('input').val();--}}

            {{--})--}}
            {{--$('#btn').click(function () {--}}
                {{--var content  = $('#text').val();--}}
                {{--var str ='@';--}}
                {{--if(content.indexOf(str)>=0)--}}
                {{--{--}}
                    {{--//私聊--}}
                    {{--var data = {--}}
                        {{--type:'private',--}}
                        {{--text:content,--}}
                        {{--name:name,--}}
                        {{--fd:a,--}}
                    {{--};--}}
                    {{--web.send(JSON.stringify(data));--}}
                {{--}else{--}}
                    {{--//群聊--}}
                    {{--var data = {--}}
                        {{--type:'public',--}}
                        {{--text:content,--}}
                        {{--name:name,--}}
                    {{--};--}}
                    {{--web.send(JSON.stringify(data));--}}
                {{--}--}}
                {{--$('#text').val('');--}}
            {{--})--}}
        {{--}--}}
        {{--web.onmessage = function(d){  //接受服务端推送数据--}}
            {{--var name = $('#name').val();--}}
            {{--var data = JSON.parse(d.data);--}}
            {{--console.log(data);--}}
            {{--$('#box').prepend('<a id="a"><font style="color: crimson"+>'+data.name+'</font><input type="hidden" value='+data.fd+' id="val"></a>'+data.time+':   '+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+data.content+'<br>');--}}
        {{--}--}}
    {{--})--}}

{{--</script>--}}
</body>
</html>