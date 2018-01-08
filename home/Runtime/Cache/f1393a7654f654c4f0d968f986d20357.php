<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>手赚资讯网</title>
    <meta name="keywords" content="手赚、手赚资讯、手赚资讯网、最新手赚软件、提现秒到账软件、手机挖矿赚钱软件、看广告赚钱软件、高单价赚钱软件、转发文章赚钱软件、微信投票赚钱软件、苹果手机赚钱软件">
    <meta name="description" content="致力打造最新精品手机赚钱软件分享平台、专注手赚第一资讯、为精品而生！">    
    <script type="text/javascript" src="Public/home/js/jquery.js"></script>
    <script src="Public/js/ckeditor_4.8.0_basic/ckeditor.js"></script>
    <style type="text/css">
    body{
      margin: 0;
      padding: 0;
      background-color: #F5F5F5;
      text-align: center;
    }
    .header{
      width:100%;
      height:50px;
      line-height:50px;
      text-align: center;
      margin: 0 auto;
      background-color: #ff6965;
    }
    #foo{
      text-align: center;
      margin: 5px auto;
      width: 800px;
      min-height: 800px;
      background-color: #FFF;
    }
    .text-vertical-center {
      display: block;
      text-align: center;
      vertical-align: middle;
      height: 35px;
      line-height: 35px;
      margin-top: 20px;      
    }
    .text-vertical-center span{
      display: inline-block;
    }
    #items{
        background-color: #FFF;
        text-align: left;
        margin: 0 auto;
        width: 800px;
    }
    #items ul li{
      display: inline-block;
      border: 1px solid #F5F5F5;
      width: 125px;
      height: 125px;
      padding: 5px;
      vertical-align:top; 
    }
    #items ul li a img{
      width: 120px;
      height: 120px;
    }     
  </style>
  </head>
  <body>
  <div class="header">

  </div>
  <div id="foo">
    <div id="title" style="
    height: 75px;
    line-height: 75px;
    vertical-align: middle;
    font-size: 22px;
    font-weight: bold;
    border-radius: 0 0 2px 2px;
    ">
        微记账-智能语音随手记账软件
    </div>

    <div id="thumb">
        <img src="http://weixinyuedu.com.cn/Public/images/20180104x640x360.png"/>
    </div>
    <div id="body" style="
    text-align: left;
    padding:15px 45px;

    ">
        2018年攒钱赚钱是正道，之前都不知道钱花在什么地方了，应该开始记账走起，希望2018年节流开源，成为有钱人，
    </div>
    <div id="content" style="
    text-align: left;
    padding:15px 45px;

    ">
      <?php echo ($data["content"]); ?>
    </div>
  </div>
  <div class="separate" style="width:100%;height:45px;background-color:#ffe34a;">
  </div>
  <div class="text-vertical-center">
        <span>同类推荐</span>
        <br>
  </div>  
  <div id='items'>
    <ul>
        <li>
          <a target="_blank" href="__URL__/item/id/1">
            <img src="http://www.shouzuanwu.com/upload/img/2017/04/04/58e3a5502f2e2.jpg" alt="手赚资讯" />
          </a>
        </li>
        <li>
          <a target="_blank" href="__URL__/item/id/3">
            <img src="http://www.shouzuanwu.com/upload/img/2017/07/18/596deb2bdd40a.png" alt="手赚资讯" />
          </a>
        </li>
        <li>
          <a target="_blank" href="__URL__/item/id/4"><img src="http://www.shouzuanwu.com/upload/img/2016/12/23/585d2e1d71626.png" alt="手赚资讯" />
          </a>
        </li>
        <li>
          <a target="_blank" href="__URL__/item/id/7"><img src="http://www.shouzuanwu.com/upload/img/2017/11/01/59f9bb253f435.jpg" alt="手赚资讯" />
          </a>
        </li>
        <li>
          <a target="_blank" href="__URL__/item"><img src="http://www.shouzuanwu.com/upload/img/2017/04/18/58f5c5cca3a2a.png" alt="手赚资讯" />
          </a>
        </li>
    </ul>
  </div>
  <div class="separate" style="width:100%;height:45px;background-color:#ffe34a;">
  </div>
  <div style="
    width:800px;
    text-align: center;
    margin: 5px auto;">
    <textarea name="editor1" id="editor1" rows="10" cols="80">
        This is my textarea to be replaced with CKEditor.
    </textarea>
  </div>
  <div style="
    width:800px;
    height: 45px;
    line-height: 45px;
    margin: 5px 0;
    text-align: center;
    margin: 0 auto;">
    <input type="button" id="ok" style="
      text-align: center;
      font-size: 14px;
      height: 26px;
      background: #49AB4F;
      color: #fff;
      padding: 0 8px;
      border-radius: 2px;
      border: none;
      outline: none;
      cursor: pointer;" 
    value="提交评论"/>
  </div>
  <div id="footer" style="text-align:center;vertical-align:middle;height:50px;line-height:50px;background-color:#49AB4F;">
  
  </div>
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor1' );
  </script> 
  <script type="text/javascript">
    $(document).ready(function(){
      $('#ok').click(function(){
        var data = CKEDITOR.instances.editor1.getData();
        alert(data);
      });
    });
  </script>
  </body>
</html>