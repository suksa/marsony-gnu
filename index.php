<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

// include_once(G5_PATH.'/head.php');
include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

add_javascript('<script src="'.G5_JS_URL.'/masonry.pkgd.min.js"></script>', 0);
?>
<style>
    .grid {width: 100%}
    .grid .grid-item {width: calc(20% - 10px); margin: 0 0 10px}
    .grid img {width: 100%; height: auto}
</style>
<section>
    <div class="grid">
        <div class="grid-item"><img src="https://dummyimage.com/600x400/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/300x500/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/400x600/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/400x200/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/200x300/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/800x100/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/600x400/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/300x500/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/400x600/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/50x20/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/200x300/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/800x100/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/600x400/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/300x500/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/400x600/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/400x200/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/200x300/000/fff" alt=""></div>
        <div class="grid-item"><img src="https://dummyimage.com/800x100/000/fff" alt=""></div>
    </div>
</section>
<script>
    $(window).load(function() {
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: '.grid-item',
            percentPosition: true,
            gutter: 10
        })
    })
    $(function() {
        
    })
</script>
<?php
include_once(G5_PATH.'/tail.php');