<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UpdateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:update {user : id of the user} {comments* : comments to append}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the comments of a specific user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $user = User::findOrFail($this->argument('user'));
        $user->comments .= implode(' ', $this->argument('comments'));


        if ($user->save()) {
            $this->info('Updated Comment');
        }

        return 0;
    }
}
