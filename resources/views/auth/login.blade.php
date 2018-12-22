@extends('layouts.home')
@section('content')
    <section class="login first grey">
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-border">
                    <div class="box-body">
                        <h4>登录</h4>
                        <form action="{{ route('login') }}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>邮箱</label>
                                <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span style="color: red;">
                                        <strong>{{ $errors->first('email') }} !</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="fw">密码
                                    <a href="forgot.html" class="pull-right">忘记密码?</a>
                                </label>
                                <input type="password" name="password" class="form-control">
                                @if ($errors->has('password'))
                                    <span style="color: red;">
                                        <strong>{{ $errors->first('password') }} !</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary btn-block">登录</button>
                            </div>
                            <div class="form-group text-center">
                                <span class="text-muted">没有账户?</span> <a href="{{route('register')}}">创建一个</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
