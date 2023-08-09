<?php

namespace App\Providers;

use App\Repositories\Destination\DestinationRepository;
use App\Repositories\Destination\DestinationRepositoryImplement;
use App\Repositories\Milestone\MilestoneRepository;
use App\Repositories\Milestone\MilestoneRepositoryImplement;
use App\Repositories\Transaction\TransactionRepository;
use App\Repositories\Transaction\TransactionRepositoryImplement;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryImplement;
use App\Repositories\Wallet\WalletRepository;
use App\Repositories\Wallet\WalletRepositoryImplement;
use App\Services\Destination\DestinationService;
use App\Services\Destination\DestinationServiceImplement;
use App\Services\Milestone\MilestoneService;
use App\Services\Milestone\MilestoneServiceImplements;
use App\Services\Transaction\TransactionService;
use App\Services\Transaction\TransactionServiceImplement;
use App\Services\User\UserService;
use App\Services\User\UserServiceImplement;
use App\Services\Wallet\WalletService;
use App\Services\Wallet\WalletServiceImplement;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserService::class, UserServiceImplement::class);
        $this->app->bind(TransactionService::class, TransactionServiceImplement::class);
        $this->app->bind(WalletService::class, WalletServiceImplement::class);
        $this->app->bind(MilestoneService::class, MilestoneServiceImplements::class);
        $this->app->bind(DestinationService::class, DestinationServiceImplement::class);

        $this->app->bind(UserRepository::class, UserRepositoryImplement::class);
        $this->app->bind(TransactionRepository::class, TransactionRepositoryImplement::class);
        $this->app->bind(WalletRepository::class, WalletRepositoryImplement::class);
        $this->app->bind(MilestoneRepository::class, MilestoneRepositoryImplement::class);
        $this->app->bind(DestinationRepository::class, DestinationRepositoryImplement::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('currency', function ( $expression ) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });

        Blade::directive("date_formatter", function ($date) {
            return "<?= date('l, d F Y', strtotime($date)) ?>";
        });

        Blade::directive("time_formatter", function ($time) {
            return "<?= date('H:i', strtotime($time)) ?>";
        });
    }
}
