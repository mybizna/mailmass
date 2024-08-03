<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;

class Campaign extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['subject', 'body', 'send_date', 'is_sent', 'published'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "mailmass_campaign";

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
        $this->fields->datetime('send_date')->html('date');
        $this->fields->tinyInteger('is_sent')->nullable()->default(0)->html('switch');
        $this->fields->tinyInteger('published')->nullable()->default(1)->html('switch');
    }



}
