<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_1156682_y7tsfj12kx.css">
    <link rel="stylesheet" href="./css/login-style.css">
    <title>登入|注册</title>
</head>
<body>
    <header>
        <a href="#" class="iconfont icon-login1 "></a>
        <br/>
    </header>

    <main>
        <div class="content">
            <div class="demo demo-login">
                <a href="#" class="iconfont icon-guanbi close"></a>
                <ul class="clearfix">
                    <li><a href="#" class="login active">登录</a></li>
                    <li><a href="#" class="register active">注册</a></li>
                </ul>
                <div class="info"></div>
                <form action="func.php?type=login" method="post">
                    <div class="username">
                        <span class="iconfont icon-login2"></span>
                        <input class= "text" type="text" name="username"   placeholder="用户名">
                    </div>
                    <div class="password">
                        <span class="iconfont icon-mima"></span>
                        <input class= "text" type="password" name="password"  placeholder="密码">
                    </div>
                    
                    <div class="input-field">
                        <input type="submit" value="登录">

                    </div>
                    <span><?php if(isset($_COOKIE["register"])&&$_COOKIE["register"]=="yes"){echo "注册成功请登录";} ?></span>
                </form>
            </div>
            <div class="demo demo-register" >
                <a href="#" class="iconfont icon-guanbi close"></a>
                <ul class="clearfix">
                    <li><a href="#" class="login">登录</a></li>
                    <li><a href="#" class="register active">注册</a></li>
                </ul>
                <div class="info"></div>
                <form action="func.php?type=register" method="post">
                    <div class="username">
                        <span class="iconfont icon-login2"></span>
                        <input class= "text" type="text" name="username"   placeholder="输入用户名">
                    </div>
                    <div class="password">
                        <span class="iconfont icon-mima"></span>
                        <input class= "text" type="password" name="password"  placeholder="输入密码">
                    </div>
                    <div class="password">
                        <span class="iconfont icon-mima"></span>
                        <input class= "text" type="password" name="password2"  placeholder="再次输入密码">
                    </div>
                    <div class="input-field">
                        <input type="submit" value="注册">
                    </div>
                </form>
            </div>
        </div>
    </main>
   <script>
       function $(selector){
           return document.querySelector(selector);
       }
        //   窗口的 click
       $('header a').addEventListener('click',function(e){
           e.stopPropagation();
           $('.content  li .register').classList.remove('active');
           $('.content').style.display = 'block';
       })

   
       $('.content').addEventListener('click',function(e){
                e.stopPropagation();
            if(e.target.classList.contains('login'))
            {     
                $('.content li .register').classList.remove('active'); 
                $('main').classList.remove('login'); 
                $('main').classList.add('register');
            }
            if(e.target.classList.contains('register'))
            {     
                $('.content .demo-register li .login').classList.remove('active');
                $('main').classList.remove('register');
                $('main').classList.add('login');
                $('header a').addEventListener('click',function(e){
                    $('main').classList.remove('login'); 
                    $('main').classList.add('register');
                })
            }
            if(e.target.classList.contains('close'))
            {   
                $('.content').style.display = 'none';
            }
        })
        document.addEventListener('click', function(){
            $('.content').style.display = 'none';
        })



























       // 登录验证
       $('.demo-login form').addEventListener('submit', function(e){
            e.preventDefault()
        if(!/^\w{3,8}$/.test($('.demo-login input[name=username]').value)){
            $('.demo-login .info').innerText = '用户名需输入3-8个字符，包括字母数字下划线'
            return false
        }
        if(!/^\w{6,10}$/.test($('.demo-login input[name=password]').value)){
            $('.demo-login .info').innerText = '密码需输入6-10个字符，包括字母数字下划线'
            return false
        }
        this.submit()      
    })
        //注册验证
    $('.demo-register form').addEventListener('submit', function(e){
         e.preventDefault()
         if(!/^\w{3,8}$/.test($('.demo-register input[name=username]').value)){
         $('.demo-register .info').innerText = '用户名需输入3-8个字符，包括字母数字下划线'
         return false
        }
        // if(/^ZFY$|/.test($('.demo-register input[name=username]').value)){
        //
        // }
        if(!/^\w{6,10}$/.test($('.demo-register input[name=password]').value)){
            $('.demo-register .info').innerText = '密码需输入6-10个字符，包括字母数字下划线'
            return false
        }
        if($('.demo-register input[name=password]').value !== $('.demo-register input[name=password2]').value){
            $('.demo-register .info').innerText = '两次输入的密码不一致'
            return false
        }
        this.submit()      
    })




















   </script>

</body>
</html>
