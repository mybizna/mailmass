<?php

namespace Modules\Mailmass\Entities;

use Modules\Base\Entities\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Campaign extends BaseModel
{

    protected $fillable = ['name'];
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
        $table->string('name');
    }
}
