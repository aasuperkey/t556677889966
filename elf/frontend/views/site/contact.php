<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '联系我们';
$content = '
## Telegram
- <a href="https://t.me/joinchat/GYN0lRB0vuUBn2mnT0ZAvA" target="_Blank">Contact Us</a>

## 个人联系

- Mail：ICOELFTEAM[#]gmail.com

';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= $this->title ?>
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>