<html class="centered" data-livestyle-extension="available">
<head>
    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }

        .vjs-fluid {
            padding-top: 56.25%
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.1">
    <title>@if(isset($head_title)){{$head_title}} | 大阪コード学園@else 文系専用プログラミング学習サイト「大阪コード学園」 @endif</title>
    @if(isset($head_keyword))
    <meta name="keyword" content="{{$head_keyword}}">
    @endif
    @if(isset($head_desc))
    <meta name="description" content="{{$head_desc}}">
    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <link href="//fontastic.s3.amazonaws.com/pWGEWsamRGy6zAhfWCzAsb/icons.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Bitter:400,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet" type="text/css">
    <style type="text/css">.modal-mask{position:fixed;z-index:9998;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.9);transition:opacity .3s ease;display:flex;align-items:center}.modal--medium{width:600px}.modal--small{width:400px}.modal-container{margin:0 auto;max-height:90%;overflow-y:auto;background-color:#fff;border-radius:2px;box-shadow:0 2px 8px rgba(0,0,0,.33);transition:all .3s ease;color:#3a3a3a}.modal-container>*{padding:30px}.modal-header{background:#133259;color:#fff}.modal-header h3{margin:0;color:#fff;font-size:21px}.modal-footer{padding-top:0;margin-bottom:20px;font-size:16px}.modal-body+.modal-footer{margin-top:-30px}.modal-enter,.modal-leave{opacity:0}.modal-enter .modal-container,.modal-leave .modal-container{-webkit-transform:scale(1.1);transform:scale(1.1)}</style><style type="text/css">.Button .la-ball-fall{width:auto;height:16px}</style><style type="text/css">@media (max-width:1049px){#newsletter-form{display:none}}</style><style type="text/css">.like-reply-form button{vertical-align:middle;color:#c5c5c5;font-size:14px}.like-reply-form button .is-liked,.like-reply-form button:hover{color:#00baf3}.like-reply-form button:focus{outline:0}.like-reply-form button i{font-size:18px}</style></head>
    <body class="">
        <div id="root" class="page ">
        <form class="Form" role="form" method="post" id='modal-login'>
                <h2 class="Heading--Fancy">
                    <span>会員ログイン</span>
                </h2>
                <input type="hidden" name="csrf_token" value="{{ $token }}">

                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="メールアドレス" value="" required="">            
                </div>

                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="パスワード" required="">
                </div>

                <div class="form-group">
                    <button type="submit" class="Button Button--Callout">
                        ログイン
                    </button>
                </div>

                <div class="form-group" style="display: none;" id="login-error">
                    <span class="error utility-center">
                        ログインできませんでした。入力情報をお確かめ下さい。
                    </span>
                </div>

                <footer class="utility-subtext">
                    <a href="/password/create" class="utility-muted-link utility-left">
                        パスワードをお忘れですか？
                    </a>
                    <a href="/join" class="utility-muted-link utility-right">
                        会員登録
                    </a>
                </footer>
            </form>
            <div style="text-align:center;"><a href="/" style="color:#fff;">トップページへ</a></div>
        </div>

        <script>
            $("#modal-login").submit(function(){
                var $form = $(this);
                $form.find('button').attr('disabled', true);
                $.ajax({
                    type: 'post',
                    url: '/login',
                    dataType: 'json',
                    data: $form.serialize(),
                    success: function(resp){
                        if(resp.success){
                            window.location.href = '/home/';
                            $form.find("#login-error").attr('style', 'display:none');
                        } else if (resp.error) {
                            $form.find("#login-error").removeAttr('style');
                            $("#email,#password").keyup(function(){
                                $form.find('button').removeAttr('disabled');
                                $form.find("#login-error").attr('style', 'display:none');
                            });
                        }
                    }
                });
                return false;
            });
</script>

</body></html>