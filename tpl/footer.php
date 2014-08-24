<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form role="search" method="get" class="search-form" action="">
                    <input type="search" class="search-field" placeholder="搜索…" value="" name="s" title="搜索：">
                </form>
                <h3 class="widget-title">分类目录</h3>
                <ul>
                    <?php foreach($catgoryIds as $v):?>
                        <li class="cat-item cat-item-1"><a href="category.php?cid=<?=$v?>"><?=$redis->get("category:$v:name")?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="widget-title">近期文章</h3>
                <ul>
                    <?php foreach($recent_article_list as $v):$title = $redis->hGet("article:$v",'title')?>
                        <li>
                            <a href="article.php?id=<?=$v?>"><?=$title?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="widget-title">近期评论</h3><ul id="recentcomments"><li class="recentcomments"><a href="http://wordpress.org/" rel="external nofollow" class="url">WordPress先生</a>发表在《<a href="http://localhost/wordpress/?p=1#comment-1">世界，你好！</a>》</li></ul>
            </div>
            <div class="col-md-3">
                <h3 class="widget-title">文章归档</h3>
                <ul>
                    <li><a href="http://localhost/wordpress/?m=201311">2013年十一月</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tags-links').each(function(){
           taglast = $(this).find('span').last().remove();
        })
        $('.article.format-audio').each(function(index){
            var self = $(this);
            self.find('footer').html('').append($(this).find('.meta'));
            self.find('.content').prepend($('<i class="fa fa-volume-up fa-4x"></i>'));
            self.find('.content').find('embed').wrap("<div class='audio-content'></div>");
        })
    })
</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>