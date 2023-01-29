<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Group extends BaseModel
{

    protected $fillable = ['name', 'description', 'ordering', 'published'];
    public $migrationDependancy = [];
    protected $table = "mailmass_group";

    /**
     * List of fields for managing postings.
     *
     * @param Blueprint $table
     * @return void
     */
    public function migration(Blueprint $table)
    {
        $table->increments('id');
        $table->char('name', 255);
        $table->string('description');
        $table->integer('ordering');
        $table->tinyInteger('published')->default(true);
    }
}
