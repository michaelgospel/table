<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>添加产品信息</title>
</head>
<body>
<div class="pd-20">
	<form action="/user/insert" method="post" class="form form-horizontal" id="form-article-add"  enctype="multipart/form-data">
		{!! csrf_field() !!}
		<!-- <input type="hidden" name="addtime" id="" placeholder="" value="{{time()}}" class="input-text"> -->


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

		<div class="row cl">
			<div class="formControls col-10">
			<label class="form-label col-2"></label>
				<div class="uploader-thum-container">
						<button type="submit"  id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">插入</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>