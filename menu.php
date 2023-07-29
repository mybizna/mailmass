<?php

/** @var \Modules\Base\Classes\Fetch\Menus $this */

$this->add_menu("mail", "mailmass", "Bulk Sms", "/mailmass/admin/autoresponder", "fas fa-cogs", 3);

$this->add_submenu("mail", "mailmass", "Autoresponder", "/mailmass/admin/autoresponder", 5);
$this->add_submenu("mail", "mailmass", "Campaign", "/mailmass/admin/campaign", 5);
$this->add_submenu("mail", "mailmass", "Group", "/mailmass/admin/group", 5);



