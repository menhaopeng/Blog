@extends('layous.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 编辑文章
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
        <div class="result_title">
            <h3>文章管理</h3>
            @if(count($errors) > 0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        {{$errors}}
                    @endif
                </div>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>文章列表</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/article/'.$field->art_id)}}" method="post">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th width="120">分类：</th>
                    <td>
                        <select name="cate_id">
                            @foreach($data as $d)
                                <option value="{{$d->cate_id}}" @if($d->cate_id==$field->cate_id) selected @endif> {{$d->_cate_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>文章标题：</th>
                    <td>
                        <input type="text" class="lg" name="art_title" value="{{$field->art_title}}">
                    </td>
                </tr>
                <tr>
                    <th>编辑：</th>
                    <td>
                        <input type="text" name="art_editor" value="{{$field->art_editor}}">
                    </td>
                </tr>
                <tr>
                    <th>缩略图：</th>
                    <td>
                        <input type="text" name="art_thumb" value="{{$field->art_thumb}}">
                        <script type="text/javascript"
                                src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}"></script>
                        <link rel="stylesheet" type="text/css"
                              href="{{asset('resources/org/uploadify/uploadify.css')}}">
                        <input id="file_upload" name="file_upload" type="file" multiple="true">
                        <script type="text/javascript">
                            <?php $timestamp = time();?>
                            $(function () {
                                $('#file_upload').uploadify({
                                    'formData': {
                                        'timestamp': '<?php echo $timestamp;?>',
                                        '_token': '{{csrf_token()}}'
                                    },
                                    'swf': "{{asset('resources/org/uploadify/uploadify.swf')}}",
                                    'uploader': "{{url('admin/upload')}}",
                                    'onUploadSuccess': function (file, data, response) {
                                        $('input[name=art_thumb]').val(data);
                                        $('#art_thumb_img').attr('src', data);
                                    }
                                });
                            });
                        </script>
                        <style>
                            .uploadify {
                                display: inline-block;
                            }

                            .uploadify-button {
                                border: none;
                                border-radius: 5px;
                                margin-top: 8px;
                            }

                            table.add_tab tr td span.uploadify-button-text {
                                color: #FFFFFF;
                                margin: 0;
                            }
                        </style>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <img src="{{$field->art_thumb}}" alt="" id="art_thumb_img" style="max-width: 350px;max-height: 100px;">
                    </td>
                </tr>
                <tr>
                    <th>关键词：</th>
                    <td>
                        <input type="text" class="lg" name="art_tag" value="{{$field->art_tag}}">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="art_description">{{$field->art_description}}</textarea>
                    </td>
                </tr>
                <tr>
                    <th>文章内容：</th>
                    <td>
                        <script type="text/javascript" charset="utf-8"
                                src="{{url('resources/org/ueditor/ueditor.config.js')}}"></script>
                        <script type="text/javascript" charset="utf-8"
                                src="{{url('resources/org/ueditor/ueditor.all.min.js')}}"></script>
                        <script type="text/javascript" charset="utf-8"
                                src="{{url('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                        <script id="editor" name="art_content" type="text/plain"
                                style="width:860px;height:500px;">{!! $field->art_content !!}</script>
                        <style>
                            .edui-default {
                                line-height: 28px;
                            }

                            div.edui-combox-bodu, div.edui-button-body, div.edui-splitbutton-body {
                                overflow: hidden;
                                height: 25px;
                            }

                            div.edui-box {
                                overflow: hidden;
                                height: 25px;
                            }
                        </style>
                        <script type="text/javascript">
                            var ue = UE.getEditor('editor');
                        </script>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection