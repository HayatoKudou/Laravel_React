<!DOCTYPE html>
<html>
<body>
    <header>
        <div class="container">
            <button id="title_button" class="title_button" type="button" name="button"><h1>Hayato Kudou Blog</h1></button>
            <div class="footer_a">
                <nav id="Header-Nav" class="header-nav">
                    <a href="#1" class="nav-list">お知らせ</a>
                    <a href="#2" class="nav-list">Twitter投稿</a>
                    <a href="http://kudohayatoblog.com/" class="nav-list">portfolio</a>
                </nav>
            </div>
            <div id="Hamburger" class="hamburger">
                <div></div>
                <div></div>
                <div></div>
                <p>MENU</p>
            </div>
        </div>
    </header>
</body>
</html>

<script type="module">
$('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    console.log(target);
    var top_height = target.offset().top;
    var header_height = $('header').height();
    var position = top_height - header_height;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
});

$('#title_button').on('click', function(){
    window.location.href = "/blog_top";
});
</script>
