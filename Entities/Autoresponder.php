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

        $this->fields->increments('id')->html('text');
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

    /**
     * List of structure for this model.
     */
    public function structure($structure): array
    {

        $structure = [
            'table' => ['subject', 'wait_period', 'table_name', 'email_field', 'date_field', 'start_date', 'end_date', 'published'],
            'form' => [
                ['label' => 'Subject', 'class' => 'w-full', 'fields' => ['subject']],
                ['label' => 'Autoresponder', 'class' => 'w-1/2', 'fields' => ['wait_period', 'table_name', 'email_field', 'date_field']],
                ['label' => 'Setting', 'class' => 'w-1/2', 'fields' => ['start_date', 'end_date', 'published']],
                ['label' => 'Body', 'class' => 'w-full', 'fields' => ['body']],
            ],
            'filter' => ['subject', 'start_date', 'end_date', 'published'],
        ];

        return $structure;
    }

}
