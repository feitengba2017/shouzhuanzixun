<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($data["title"]); ?></title>
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
    .header p a{
        color : #fff;
        text-decoration : none;         
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
        padding: 5px 0px;
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
    #comments{
      text-align: left;
      margin: 20px auto;
      padding: 10px 10px;
      width: 800px;
      min-height: 250px;
      background-color: #FFF;
    }    
    #comments p{
      padding-bottom: 45px;
      border-bottom: 1px solid #F5F5F5;
    }    
  </style>
  </head>
  <body>
  <div class="header">
  <p style="color: #fff;">
  <a target="_self" href="__URL__/index">
    ㊗️㊗️㊗️㊗️㊗️㊗️㊗️㊗️㊗️㊗️
  </a>
  </p>
  </div>
  <div id="foo">
    <input type="hidden" id="itemid" value="<?php echo ($data["id"]); ?>"/>
    <div id="title" style="
    height: 75px;
    line-height: 75px;
    vertical-align: middle;
    font-size: 22px;
    font-weight: bold;
    border-radius: 0 0 2px 2px;
    ">
        <?php echo ($data["title"]); ?>
    </div>

    <div id="thumb">
      <a href="__URL__/items" target="_blank">
        <img src="http://weixinyuedu.com.cn/Public/images/20180104x640x360.png"/>
      </a>
    </div>
    <div id="body" style="
    text-align: left;
    padding:15px 45px;
    font-family: Optima-Regular, PingFangTC-light;

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
            <img src="http://www.xiaomutong.com.cn/ueditor/php/upload/image/20180511/1526036679212582.jpeg" alt="手赚资讯" />
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
          <a target="_blank" href="__URL__/item/id/8"><img src="http://www.shouzuanwu.com/upload/img/2017/02/02/5892dd893ba97.png" alt="手赚资讯" />
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
        请留下您的足迹
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
  <div class="separate" style="width:100%;height:45px;background-color:#90EE90;">
  </div>
  <div class="text-vertical-center">
        <span>热门评论</span>
        <br>
  </div>    
  <div id="comments">
  <?php if(is_array($data["comments"])): $k = 0; $__LIST__ = $data["comments"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><span style="color:#2f8bcd;"><?php echo ($vo["createTime"]); ?></span><?php echo ($vo["content"]); endforeach; endif; else: echo "" ;endif; ?>  
  </div>
  <div id="footer" style="text-align:center;vertical-align:middle;height:50px;line-height:50px;background-color:#49AB4F;">
  
  </div>
  <script type="text/javascript" src="/tel/Public/js/jquery-1.7.2.min.js"></script>
  <script>
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace( 'editor1' );
  </script> 
  <script type="text/javascript">
    $(document).ready(function(){
      $('#ok').click(function(){
        var itemid = $('#itemid').val();
        var content = CKEDITOR.instances.editor1.getData();
        if(content.length<5){
          alert('评论不能少于5个字');
        }
        if(content.length>6){
          $.ajax({
            type:'post',        
            url:'__URL__/addData',
            data:{
              itemid: itemid,
              content: content
            },
            async:false,
            success:function(data){     
              alert('评论成功');     
            }
          });           
        }

      });
    });
  </script>
  </body>
</html>