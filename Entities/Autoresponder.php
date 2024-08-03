<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

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

    /**
     * List of fields to be migrated to the datebase when creating or updating model during migration.
     *
     * @param Blueprint $table
     * @return void
     */
    public function fields(Blueprint $table = null): void
    {
        $this->fields = $table ?? new Blueprint($this->table);

        $this->fields->increments('id')->html('hidden');
        $this->fields->string('subject')->html('text');
        $this->fields->string('body')->html('textarea');
        $this->fields->integer('wait_period')->html('text');
        $this->fields->char('table_name', 255)->html('text');
        $this->fields->char('email_field', 255)->html('text');
        $this->fields->char('date_field', 255)->html('text');
        $this->fields->datetime('start_date')->html('date');
        $this->fields->datetime('end_date')->html('date');
        $this->fields->tinyInteger('published')->default(true)->html('switch');
    }





}
