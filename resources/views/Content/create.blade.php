<html>
<head>
    <title>增加内容</title>
    <meta charset="utf-8">
    <!-- 引入 Bootstrap -->
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form role="form">
    <div class="form-group">
        <!--向标签添加 class .control-label。-->
        <label for="username" class="col-sm-2 control-label">标题：</label>

        <!--控制表单的宽度-->
        <label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username"  placeholder="请输入用户名">
        </div>
        </label>
    </div>

    <div class="form-group">
        <!--向标签添加 class .control-label。-->
        <label for="username" class="col-sm-2 control-label">内容：</label>

        <!--控制表单的宽度-->
        <label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3"></textarea>
        </div>
        </label>
    </div>

    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">是否显示：</label>
        <label class="checkbox-inline">
            <input type="radio" name="optionsRadiosinline" id="optionsRaios1" value="option1" >是
        </label>
        <label class="checkbox-inline">

            <!--设置checked属性来表示默认被选中-->
            <input type="radio" name="optionsRadiosinline" id="optionsRaios2" value="option2" checked="">否
        </label>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">是否置顶：</label>
        <label class="checkbox-inline">
            <input type="radio" name="optionsRadiosinline" id="optionsRaios1" value="option1" >是
        </label>
        <label class="checkbox-inline">

            <!--设置checked属性来表示默认被选中-->
            <input type="radio" name="optionsRadiosinline" id="optionsRaios2" value="option2" checked="">否
        </label>
    </div>
    <div class="form-group">
        <!--向标签添加 class .control-label。-->
        <label for="username" class="col-sm-2 control-label">名字：</label>

        <!--控制表单的宽度-->
        <div class="col-sm-3">
            <input type="text" class="form-control" id="username"  placeholder="请输入用户名">
        </div>
    </div>
</form>

<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- 包括所有已编译的插件 -->
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>