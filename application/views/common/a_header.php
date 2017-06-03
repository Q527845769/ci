<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('no3/common/header2'); ?>
<?php $this->load->view('no3/common/tools'); ?>
<?php $this->load->view('no3/common/message', $message); ?>
<body>
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {
                }
            </script>
            <?php $this->load->view('no3/common/nav_shortcut'); ?>
            <?php $this->load->view('no3/common/nav_left1', $systemconfig, $choose,$menucheck); ?>
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>
        <div class="main-content">
            <?php $this->load->view('no3/common/nav_top', $header1); ?>

            <div class="page-content">
                <?php $this->load->view('no3/common/nav_top1', $header2); ?>

                <div class="row">
                    <div class="col-xs-12">
<!--                        --><?php //$this->load->view('no3/common/nav_top2', $header3); ?>
