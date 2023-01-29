<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Campaign extends BaseModel
{

    protected $fillable = ['subject', 'body', 'send_date', 'is_sent', 'published'];
    public $migrationDependancy = [];
    protected $table = "mailmass_campaign";

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
        $table->datetime('send_date');
        $table->tinyInteger('is_sent')->default(false);
        $table->tinyInteger('published')->default(true);
    }
}
