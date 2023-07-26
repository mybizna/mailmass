<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Campaign extends BaseModel
{

    protected $fillable = ['subject', 'body', 'send_date', 'is_sent', 'published'];
    public $migrationDependancy = [];
    protected $table = "mailmass_campaign";

    public function listTable()
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('subject')->type('text')->ordering(true);
        $fields->name('send_date')->type('date')->ordering(true);
        $fields->name('is_sent')->type('switch')->ordering(true);
        $fields->name('published')->type('switch')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/2');
        $fields->name('body')->type('text')->group('w-1/2');
        $fields->name('send_date')->type('date')->group('w-1/2');
        $fields->name('is_sent')->type('switch')->group('w-1/2');
        $fields->name('published')->type('switch')->group('w-1/2');

        return $fields;

    }

    public function filter()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/6');
        $fields->name('send_date')->type('date')->group('w-1/6');
        $fields->name('is_sent')->type('switch')->group('w-1/6');
        $fields->name('published')->type('switch')->group('w-1/6');

        return $fields;

    }
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
        $table->tinyInteger('is_sent')->nullable()->default(0);
        $table->tinyInteger('published')->nullable()->default(1);
    }
}
