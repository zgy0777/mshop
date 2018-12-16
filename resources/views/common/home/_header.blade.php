{{--顶部导航栏--}}
<style>
    .am-btn{
        font-size:10px;
    }
    .am-btn-primary{
        color:#000;
        background:#fff;
        border-color:#fff;
    }
    a{
        color:#000;
        text-decoration:none;
    }
</style>
<div class="am-container header">
    <ul class="message-l">
        @guest
        <div class="topMessage">
            <div class="menu-hd">
                <a href="{{ route('login') }}" target="_top" class="h">亲，请登录</a>
                <a href="{{ route('register') }}" target="_top">免费注册</a>
            </div>
        </div>
        @else
            <div class="topMessage">
                <div class="menu-hd">
                    <a href="#" target="_top" class="h">Hi～ 欢迎</a>
                    <div class="am-dropdown" data-am-dropdown>
                        <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>test <span class="am-icon-caret-down"></span></button>
                        <ul class="am-dropdown-content">

                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    退出登录
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
        @endguest

    </ul>
    <ul class="message-r">
        <div class="topMessage home">
            <div class="menu-hd"><a href="#" target="_top" class="h">商城首页</a></div>
        </div>
        <div class="topMessage my-shangcheng">
            <div class="menu-hd MyShangcheng"><a href="#" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
        </div>
        <div class="topMessage mini-cart">
            <div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
        </div>
        <div class="topMessage favorite">
            <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
    </ul>
</div>