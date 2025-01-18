<?php

namespace Modules\Mailmass\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Group extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'description', 'ordering', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mailmass_group";


    public function migration(Blueprint $table): void
    {

        $table->string('name', 255);
        $table->string('description');
        $table->integer('ordering');
        $table->tinyInteger('published')->default(true);

    }
}
