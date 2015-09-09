<?php $this->header(); ?>
<div class="tm-content am-g-fixed am-container am-padding-top am-padding-bottom">
    <form action="" method="POST" data-am-validator>
        <ul class="am-list am-list-border">
            <li class="am-padding-xs">
                <ol class="am-breadcrumb am-margin-0 am-padding-0">
                    <li><a href="/">首页</a></li>
                    <li class="am-active">
                        新文档
                    </li>
                </ol>
            </li>
            <li class="am-padding-xs am-text-sm">
                标题
            </li>
            <li>
                <input name="title" class="tm-remove-border tm-input-background-color am-form-field" type="text" placeholder="填写标题" required>
            </li>
            <li class="am-padding-xs am-text-sm">
                内容
            </li>
            <li class="">
                <script id="editor" type="text/plain" style="height:250px;"></script>
            </li>
            <li class="am-padding-sm">
                <select  name="tree" data-am-selected="{maxHeight: 200, btnSize: 'sm', dropUp: 1}">
                    <option value="">请选择</option>
                    <?php foreach ($treeList as $key => $value) : ?>
                        <option value="<?= $value['tree_id']; ?>"><?= $value['tree_title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li class="am-padding-xs am-text-center">
                <button class="am-btn  am-btn-xs am-btn-primary">提交</button>
            </li>
        </ul>
    </form>
</div>
<script type="text/javascript">
    var ue = UE.getEditor('editor', {
        textarea: 'content',
        serverUrl:'/d/uedition/?method=POST'
    });
</script>
<?php $this->footer(); ?>