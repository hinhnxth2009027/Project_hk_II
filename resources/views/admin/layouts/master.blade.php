<!doctype html>
<html lang="vi">
@include('.admin.components.head')
<body >
{{--<img class="load_page" style="width: 50px;height: 50px;display: block;margin: 200px auto" src="/images/load_page.gif" alt="">--}}
<section class="body body_content" >
{{--<section class="body body_content" style="display: none">--}}
    <!-- start: header -->
    @include('.admin.components.header')
    <!-- end: header -->
    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
            <div class="sidebar-header">
                <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
                     data-fire-event="sidebar-left-toggle">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>
            @include('.admin.components.sidebar')
        </aside>
        <!-- end: sidebar -->
        <section role="main" class="content-body">
            <header class="page-header">
                <h2>Dashboard</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.html">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Dashboard</span></li>
                    </ol>
                </div>
            </header>
            <div class="row">
                @yield('main_content')
            </div>
        </section>
    </div>
</section>
@include('.admin.components.script')
<script>
 // document.addEventListener('DOMContentLoaded',function (){
 //     $('.body_content').css('display','block')
 //     $('.load_page').css('display','none')
 // })
</script>
</body>
</html>
