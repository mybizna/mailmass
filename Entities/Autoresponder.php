<?php

namespace Modules\Mailmass\Entities;

use Illuminate\Database\Schema\Blueprint;
use Modules\Base\Entities\BaseModel;
use Modules\Core\Classes\Views\FormBuilder;
use Modules\Core\Classes\Views\ListTable;

class Autoresponder extends BaseModel
{

    protected $fillable = ['subject', 'body', 'wait_period', 'table_name', 'email_field',
        'date_field', 'start_date', 'end_date', 'published'];
    public $migrationDependancy = [];
    protected $table = "mailmass_autoresponder";

    public function listTable()
    {
        // listing view fields
        $fields = new ListTable();

        $fields->name('subject')->type('text')->ordering(true);
        $fields->name('wait_period')->type('text')->ordering(true);
        $fields->name('table_name')->type('text')->ordering(true);
        $fields->name('email_field')->type('text')->ordering(true);
        $fields->name('date_field')->type('text')->ordering(true);
        $fields->name('start_date')->type('date')->ordering(true);
        $fields->name('end_date')->type('date')->ordering(true);
        $fields->name('published')->type('switch')->ordering(true);

        return $fields;

    }

    public function formBuilder()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/2');
        $fields->name('body')->type('text')->group('w-1/2');
        $fields->name('wait_period')->type('text')->group('w-1/2');
        $fields->name('table_name')->type('text')->group('w-1/2');
        $fields->name('email_field')->type('text')->group('w-1/2');
        $fields->name('date_field')->type('text')->group('w-1/2');
        $fields->name('start_date')->type('date')->group('w-1/2');
        $fields->name('end_date')->type('date')->group('w-1/2');
        $fields->name('published')->type('switch')->group('w-1/2');

        return $fields;

    }

    public function filter()
    {
        // listing view fields
        $fields = new FormBuilder();

        $fields->name('subject')->type('text')->group('w-1/6');
        $fields->name('wait_period')->type('text')->group('w-1/6');
        $fields->name('table_name')->type('text')->group('w-1/6');
        $fields->name('email_field')->type('text')->group('w-1/6');
        $fields->name('date_field')->type('text')->group('w-1/6');
        $fields->name('start_date')->type('date')->group('w-1/6');
        $fields->name('end_date')->type('date')->group('w-1/6');
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
        $table->integer('wait_period');
        $table->char('table_name', 255);
        $table->char('email_field', 255);
        $table->char('date_field', 255);
        $table->datetime('start_date');
        $table->datetime('end_date');
        $table->tinyInteger('published')->default(true);
    }

}
