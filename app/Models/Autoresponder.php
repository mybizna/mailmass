<?php

namespace Modules\Mailmass\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

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


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('subject');
        $table->string('body');
        $table->integer('wait_period');
        $table->char('table_name', 255);
        $table->char('email_field', 255);
        $table->char('date_field', 255);
        $table->datetime('start_date');
        $table->datetime('end_date');
        $table->tinyInteger('published')->default(true);

    }
}
