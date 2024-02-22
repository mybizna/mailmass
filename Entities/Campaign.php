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
     * The fields that are to be render when performing relationship queries.
     *
     * @var array<string>
     */
    public $rec_names = ['subject'];

    /**
     * List of tables names that are need in this model during migration.
     *
     * @var array<string>
     */
    public array $migrationDependancy = [];

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

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {

        $structure['table'] = ['subject', 'send_date', 'is_sent', 'published'];
        $structure['form'] = [
            ['label' => 'Subject', 'class' => 'col-span-full', 'fields' => ['subject']],
            ['label' => 'Date', 'class' => 'col-span-full md:col-span-6', 'fields' => ['send_date']],
            ['label' => 'Setting', 'class' => 'col-span-full md:col-span-6', 'fields' => ['is_sent', 'published']],
            ['label' => 'Body', 'class' => 'col-span-full', 'fields' => ['body']],
        ];
        $structure['filter'] = ['subject', 'send_date', 'is_sent', 'published'];

        return $structure;
    }
}
