
<?= $this->getContent() ?>

<div class="jumbotron">
    <h1>未经授权</h1>
    <p>您没有权限访问</p>
   <p><?= $this->tag->linkTo(['index/index', '返回首页', 'class' => 'btn btn-primary']) ?></p>
</div>