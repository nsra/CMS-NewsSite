@extends("_felayout")
@section("content")

<div class="row">
	<div class="col-sm-8">
        <br>
    <h2>اعدادات الحساب </h2>
    <form method="post" action="/client/postChangepassword" class="form-horizontal">
{{ csrf_field() }}
  <br>
    <br>
    <br>
  
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label"> الاسم الجديد </label>
    <div class="col-sm-9">
<input value="{{$item->name}}"  type="text" class="form-control" name="name" id="name" placeholder="الاسم">
           
    </div>
  </div>
  
    <div class="form-group">
    <label for="email" class="col-sm-3 control-label">الايميل الجديد</label>
    <div class="col-sm-9">
      <input value="{{$item->email}}"  type="email" class="form-control" name="email" id="email" placeholder="الايميل">
     
    </div>
  </div>
  
    <div class="form-group">
    <label for="oldpassword" class="col-sm-3 control-label"> كلمة المرور الحالية</label>
    <div class="col-sm-9">
      <input value="{{old("oldpassword")}}"  type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="كلمة المرور الحالية">
      <div class="text-danger">{{$errors->first('oldpassword')}}</div>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label"> كلمة المرور الجديدة</label>
    <div class="col-sm-9">
      <input value="{{old("password")}}"  type="password" class="form-control" name="password" id="password" placeholder="كلمة المرور الجديدة">
      <div class="text-danger">{{$errors->first('password')}}</div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="password_confirmation" class="col-sm-3 control-label"> تأكيد الكلمة الجديدة</label>
    <div class="col-sm-9">
      <input value="{{old("password_confirmation")}}"  type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="تأكيد الكلمة الجديدة">
      <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
    </div>
  </div>
  
  
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">حفظ</button>
      <a class="btn btn-default" href="/">الغاء الأمر</a>
    </div>
  </div>
</form>
    </div>
</div>


@endsection()

@section("title")
تغيير كلمة المرور
@endsection()


