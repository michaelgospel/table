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
		<!-- <input type="hidden" name="addtime" id="" placeholder="" value="{{time()}}" class="input-text"> -->


		<div class="row cl">
			<div class="formControls col-10">
			<label class="form-label col-2"></label>
				<div class="uploader-thum-container">
						<a href="/user/add">添加用户</a>
						<a href="/user/queryUser">查询用户</a>
					</div>
				</div>
			</div>
	</form>
</div>
</body>
</html>