<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>创建文章</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css" >
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
</head>


<body>

@if (Session::has('flash-message-content'))
<div class="alert alert-success">
    {{Session::get('flash-message-content')}}
</div>
@endif


<form id="form-submit" action="/content" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="name">主题</label>
        <input type="text" class="form-control" name="title" id="name" placeholder="请输入主题">
    </div>

    <div class="form-group">
        <label for="name">描述</label>
        <input type="text" class="form-control" name="description" id="name" placeholder="请输入简要描述">
    </div>
    {{--<div class="form-group">--}}
        {{--<label for="inputfile">文件输入</label>--}}
        {{--<input type="file" id="inputfile">--}}
        {{--<p class="help-block">这里是块级帮助文本的实例。</p>--}}
    {{--</div>--}}

    <div class="form-group">
        <label for="name">发布状态</label>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="publish_status">是请打勾
            </label>
        </div>
    </div>


    <div class="form-group">
        <label for="name">是否置顶</label>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="top_status" >是请打勾
            </label>
        </div>
    </div>

    <div class="form-group">
        <label for="name">发布时间</label>
        <br/>
        <label>
        <input type="date" name="create_time" value=""/>
        </label>
    </div>

    <div class="form-group">
        <label for="name">正文</label>

    <script id="container" name="content" type="text/plain">
    请输入内容
    </script>
    </div>
    <button type="submit" id="submit-default" class="btn btn-default">创建</button>
</form>




</body>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    var editor = UE.getEditor('container');
</script>
</html>