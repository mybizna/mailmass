<?php

namespace Modules\Mailmass\Models;

use Modules\Base\Models\BaseModel;

class Autoresponder extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'wait_period', 'table_name', 'email_field',
        'date_field', 'start_date', 'end_date', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mailmass_autoresponder";

}
