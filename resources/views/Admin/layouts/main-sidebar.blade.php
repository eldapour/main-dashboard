<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{($setting->logo) ?? asset('assets/uploads/empty.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>
<!--        <li class="slide">-->
<!--            <a class="side-menu__item" data-toggle="slide" href="#">-->
<!--                <i class="fe fe-settings side-menu__icon"></i>-->
<!--                <span class="side-menu__label">الاعدادات</span><i class="angle fa fa-angle-left"></i>-->
<!--            </a>-->
<!--            <ul class="slide-menu">-->
<!---->
<!--                <li><a href="{{ route('setting.about') }}" class="slide-item"> من نحن</a></li>-->
<!--                <li><a href="{{ route('setting.terms') }}" class="slide-item">الشروط و الاحكام</a></li>-->
<!--                <li><a href="{{ route('setting.privacy') }}" class="slide-item">الخصوصية</a></li>-->
<!---->
<!--            </ul>-->
<!--        </li>-->

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('sliders.index')}}">--}}
{{--                <i class="fe fe-camera side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">البانر المتحرك</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المواقع</span>--}}
{{--            </a>--}}
{{--        </li>--}}



        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
