<?php

namespace Modules\Mailmass\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

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


    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('subject');
        $table->text('body');
        $table->dateTime('send_date');
        $table->tinyInteger('is_sent')->nullable()->default(0);
        $table->tinyInteger('published')->nullable()->default(1);

    }
}
