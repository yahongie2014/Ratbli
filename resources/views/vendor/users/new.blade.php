@extends('layouts.adminv2')
@section('title')
    اضافه مستخدم جديد
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box table-responsive">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-red"></i>
                        <h4 class="header-title m-t-0 m-b-30">اضافه مستخدم جديد</h4>
                    </div>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="portlet-body form">
                    <form method="post" action="{{ URL::Route('user_add') }}" class="form-horizontal form-bordered"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">إسم المستخدم</label>
                                <div class="col-md-9">
                                    <input maxlength="30" required="required" name="user_name" type="text"
                                           placeholder="إسم المستخدم" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">الاميل</label>
                                <div class="col-md-9">
                                    <input required="required" name="email" type="text" placeholder="الاميل"
                                           class="form-control"/>
                                    @if ($errors->has('email'))
                                        <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3">كلمه المرور</label>
                                <div class="col-md-9">
                                    <input required="required" type="password" name="password" placeholder="كلمه المرور"
                                           class="form-control"/>
                                    @if ($errors->has('password'))
                                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="form-group"{{ $errors->has('phone') ? ' has-error' : '' }}>
                                    <label class="control-label col-md-3">التيلفون</label>
                                    <div class="col-md-9">
                                        <input name="phone" type="text" placeholder="التيلفون" class="form-control"/>
                                        @if ($errors->has('phone'))
                                            <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">العنوان</label>
                                    <div class="col-md-9">
                                        <input name="address" type="text" placeholder="العنوان" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">الصوره الشخصيه</label>
                                    <div class="col-md-9">
                                        {!! Form::file('pic', null) !!}
                                        <p class="help-block"> الصوره الشخصيه </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">الصلاحيات</label>
                                    <hr>
                                    <div class="btn-group btn-group-lg" data-toggle="buttons">
                                        <label class="btn btn-primary" for="test2_t" >
                                            <input type="radio" name="is_account" id="test2_t" value="1"/> محاسب
                                            <input hidden  type="radio" name="is_privillage" id="test2_t" value="1"/>
                                        </label>
                                        <label class="btn btn-primary" for="test2_f" >
                                            <input type="radio" name="is_sales" id="test2_t" value="2"/> مبيعات
                                            <input hidden  type="radio" name="is_privillage" id="test2_t" value="2"/>
                                        </label>
                                        <label class="btn btn-primary" for="test2_r" >
                                            <input type="radio" name="is_cook" id="test2_t" value="3"/> طباخ
                                            <input hidden  type="radio" name="is_privillage" id="test2_t" value="3"/>
                                        </label>

                                    </div>
                                </div>


                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn green">
                                                    <i class="fa fa-check"></i> اضافه
                                                </button>
                                                <button type="button" class="btn default">الغاء</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('input[type=radio]').change( function() {
            alert("test");
        });
    </script>
@endsection