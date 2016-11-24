@extends('layous.home')
@section('info')
    <title>{{Config::get('web.web_title')}} - {{Config::get('web.seo_title')}}</title>
    <meta name="keywords" content="{{Config::get('web.keywords')}}"/>
    <meta name="description" content="{{Config::get('web.description')}}"/>
@endsection
@section('content')
    <div class="banner">
        <section class="box">
            <ul class="texts">
                <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
                <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
                <p>加了锁的青春，不会再因谁而推开心门。</p>
            </ul>
            <div class="avatar"><a href="#"><span>后盾</span></a></div>
        </section>
    </div>
    <div class="template">
        <div class="box">
            <h3>
                <p><span>站长</span>推荐 Recommend</p>
            </h3>
            <ul>
                @foreach($pics as $p)
                    <li><a href="{{url('a/'.$p->art_id)}}" target="_blank"><img
                                    src="{{url($p->art_thumb)}}"></a><span>{{$p->art_title}}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <article>
        <h2 class="title_tj">
            <p>文章<span>推荐</span></p>
        </h2>
        <div class="bloglist left">
            @foreach($data as $d)
                <h3>{{$d->art_title}}</h3>
                <figure><img src="{{url($d->art_thumb)}}"></figure>
                <ul>
                    <p>{{$d->art_description}}...</p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview">
                    <span>{{date('Y-m-d H:i:s',$d->art_time)}}</span>
                    <span>作者：{{$d->art_editor}}</span>
                </p>
            @endforeach
            {{--分页--}}
            <div class="page">
                <ul class="pagination">
                    {{ $data->links() }}
                    {{--<li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="http://blog.hd/admin/article?page=2">2</a></li>
                    <li><a href="http://blog.hd/admin/article?page=2" rel="next">»</a></li>--}}
                </ul>
            </div>
        </div>
        <aside class="right">
            {{--分享--}}
            <!-- Baidu Button BEGIN -->
            <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a
                        class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span
                        class="bds_more"></span><a class="shareCount"></a></div>
            <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585"></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <script type="text/javascript">
                document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000)
            </script>
            <!-- Baidu Button END -->
            @parent
        </aside>
    </article>
@endsection