<?php
namespace App\Console\Commands;
use App\Admin;
use Hash;
use Illuminate\Console\Command;
class GenerateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin {username} {email} {password}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new admin';
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
     * @return mixed
     */
    public function handle()
    {
        $admin = new Admin();
        $admin->username = $this->argument('username');
        $admin->email = $this->argument('email');
        $admin->password = Hash::make($this->argument('password'));
        $admin->save();

        $this->info('User '.$admin->username.' has been generated !');
    }
}