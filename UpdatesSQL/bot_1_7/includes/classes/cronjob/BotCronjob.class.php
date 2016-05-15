<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: Brooklyn
     * Date: 11.03.13
     * Time: 14:39
     */

    class BotCronjob {
        public function run() {
            require_once(ROOT_PATH.'includes/common.php');
            require_once(ROOT_PATH.'includes/classes/class.bot.php');
            Bot::getBots();
        }
    }