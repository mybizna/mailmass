<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Autoresponder extends BaseModel
{

    protected $fillable = ['subject', 'body', 'wait_period', 'table_name', 'email_field', 
    'date_field',  'start_date', 'end_date', 'published'];
    public $migrationDependancy = [];
    protected $table = "mailmass_autoresponder";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
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
