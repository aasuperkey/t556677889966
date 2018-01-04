<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '关于';
$content = '
您好，首先欢迎您来到我们网站。ICOELF站是全球第一家C2C的ICO和商品网站，本网站不参与现金（不仅限于各国的现金），只使用比特币和以太坊进行交易。以下是我们的更多介绍：

1，我们的团队：

   我们团队是一个年轻化的、从事区块链相关经验和团体。

2，我们解决了什么问题？

   We save your comments with decentralized reviews and provide token incentives.

3，关于法律：

    我们尊重各国的法律，在此购买过程中严禁中国、美国相关个人的参与，但是对ICO周边没有限制。

欢迎您跟我们沟通 ------> （<a href="https://t.me/joinchat/GYN0lRB0vuUBn2mnT0ZAvA">Contact ICOELF</a> Or ICOELFTEAM[#]gmail.com）。

--------------------------------------------------------------------------------------------

Hello, First of all, welcome to our website.ICOELF station is the world\'s first C2C ICO and commodity website，this site does not participate in cash (not limited to cash in each country), only use bitcoin and Ethereum transactions. The following is our more introduction:



As shown in Figure 1, our team:

Our team is a young, engaged in blockchain-related experience and individuals.



2, what problem did we solve?
We save your comments with decentralized reviews and provide token incentives.



3, on the law:

We respect the laws of various countries. During the purchasing process, China and the United States are strictly prohibited from participating in the process. However, there are no restrictions on the periphery of the ICO.



Finally, thank you for coming, please contact us. ------> （<a href="https://t.me/joinchat/GYN0lRB0vuUBn2mnT0ZAvA">Contact ICOELF</a> Or ICOELFTEAM[#]gmail.com）         
';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        关于
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>