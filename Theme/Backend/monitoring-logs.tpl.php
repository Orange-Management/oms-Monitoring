<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules\Monitoring
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

/**
 * @var \phpOMS\Views\View $this
 */
$logger      = $this->getData('logger');

$logs = \array_reverse($logger->get(25), true);

echo $this->getData('nav')->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head"><?= $this->getHtml('Modules'); ?><i class="fa fa-download floatRight download btn"></i></div>
            <table class="default">
                <thead>
                <tr>
                    <td><?= $this->getHtml('Timestamp'); ?>
                    <td><?= $this->getHtml('Level'); ?>
                    <td><?= $this->getHtml('Source'); ?>
                    <td class="wf-100"><?= $this->getHtml('Message'); ?>
                <tbody>
                        <?php foreach ($logs as $key => $value) :
                        $url = \phpOMS\Uri\UriFactory::build('{/prefix}admin/monitoring/logs/single?{?}&id=' . $key); ?>
                <tr>
                    <td><a href=<?= $this->printHtml($url); ?>><i class="fa fa-clock-o"></i> <?= $this->printHtml($value[0] ?? ''); ?></a>
                    <td><a href=<?= $this->printHtml($url); ?>><i class="fa fa-<?= $this->printHtml(\in_array($value[1], ['notice', 'info', 'debug']) ? 'info-circle' : 'warning'); ?>"></i> <?= $this->printHtml($value[1] ?? ''); ?></a>
                    <td><a href=<?= $this->printHtml($url); ?>><i class="fa fa-wifi"></i> <?= $this->printHtml($value[2] ?? ''); ?></a>
                    <td><a href=<?= $this->printHtml($url); ?>><i class="fa fa-commenting"></i> <?= $this->printHtml($value[7] ?? ''); ?></a>
                        <?php endforeach;
                        if (!isset($key)) : ?>
                <tr>
                    <td colspan="4">
                        <?php endif; ?>
            </table>
        </div>
    </div>
</div>
