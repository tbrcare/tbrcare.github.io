<!doctype html>
<html lang="ko">

<!-- Mirrored from daycare119.com/bbs/login.php?&url=http%3A%2F%2Fdaycare119.com%2Fbbs%2Fboard.php%3Fbo_table%3Destimate by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:13:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="방문요양,방문목욕 전문센터 더바른재가복지센터 ">
<meta name="keyword" content="방문요양, 재가센터, 장기요양, 요양보호사">
<meta property="og:type" content="website">
<meta property="og:title" content="더바른재가복지센터">
<meta property="og:description" content="방문요양,방문목욕 더바른재가복지센터  ">
<meta property="og:image" content="../../ballpennara.com/sns-img.png">
<meta property="og:url" content="더바른재가복지센터">
<META http-equiv='cache-control' content='no-cache'>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="http://thebaruncare.com/favicon.ico" type="image/x-icon">


<title>로그인 | 더바른재가복지센터</title>
<link rel="stylesheet" href="../theme/silver/css/mobilea68a.css?ver=171222">
<link rel="stylesheet" href="../theme/silver/mobile/skin/member/basic/stylea68a.css?ver=171222">
<!--[if lte IE 8]>
<script src="http://thebaruncare.com/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "../index.html";
var g5_bbs_url   = "index.html";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "1";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/jquery.menua68a.js?ver=171222"></script>
<script src="../js/commona68a.js?ver=171222"></script>
<script src="../js/wresta68a.js?ver=171222"></script>
<script src="../js/placeholders.min.js"></script>
<script type="text/javascript" src="../theme/silver/js/dbnavifull.js"></script>
	
<link rel="stylesheet" href="../js/font-awesome/css/font-awesome.min.css">
<script src="../js/modernizr.custom.70111.js"></script>
</head>
<body>

<div id="mb_login" class="mbskin">
    <h1>로그인</h1>

    <form name="flogin" action="http://thebaruncare.com/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post" id="flogin">
    <input type="hidden" name="url" value="http%3A%2F%2Fdaycare119.com%2Fbbs%2Fboard.php%3Fbo_table%3Destimate">

    <div id="login_frm">
        <label for="login_id" class="sound_only">아이디<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="mb_id" id="login_id" placeholder="아이디(필수)" required class="frm_input required" maxLength="20">
        <label for="login_pw" class="sound_only">비밀번호<strong class="sound_only"> 필수</strong></label>
        <input type="password" name="mb_password" id="login_pw" placeholder="비밀번호(필수)" required class="frm_input required" maxLength="20">
        <div>
            <input type="checkbox" name="auto_login" id="login_auto_login">
            <label for="login_auto_login">자동로그인</label>
        </div>
       <input type="submit" value="로그인" class="btn_submit">
    </div>

    
    <section class="mb_login_join">
        <h2>회원로그인 안내</h2>
        
        <div>
            <a href="password_lost.html" target="_blank" id="login_password_lost">회원정보찾기</a>
            <a href="register.html">회원 가입</a>
        </div>
    </section>


    </form>

</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>


<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

</body>

<!-- Mirrored from daycare119.com/bbs/login.php?&url=http%3A%2F%2Fdaycare119.com%2Fbbs%2Fboard.php%3Fbo_table%3Destimate by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Nov 2020 14:13:57 GMT -->
</html>
