<?php

$this->add_menu("sms", "mailmass", "Bulk Sms", "/mailmass/admin/autoresponder", "fas fa-cogs", 3);

$this->add_submenu("sms", "mailmass", "Autoresponder", "/mailmass/admin/autoresponder", 5);
$this->add_submenu("sms", "mailmass", "Campaign", "/mailmass/admin/campaign", 5);
$this->add_submenu("sms", "mailmass", "Group", "/mailmass/admin/group", 5);



