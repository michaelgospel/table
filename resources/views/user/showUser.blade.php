<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title></title>
</head>
<body>
<div class="pd-20">
	<form action="/user/insert" method="post" class="form form-horizontal" id="form-article-add"  enctype="multipart/form-data">
		{!! csrf_field() !!}

		<div class="row cl">

			<label class="form-label col-2">用户名</label>
			<div class="formControls col-4">
				<input type="text" name="username" id="" value="" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">密码</label>
			<div class="formControls col-4">
				<input type="password" name="password" id="" value="" class="input-text">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">年龄</label>
			<div class="formControls col-4">
				<input type="text" name="age" id="" value="" class="input-text">
			</div>
		</div>
	</form>
</div>
</body>
</html>