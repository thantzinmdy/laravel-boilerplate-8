<?php

namespace Zawmyolatt\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Zawmyolatt\Modules\Commands\CommandMakeCommand;
use Zawmyolatt\Modules\Commands\ControllerMakeCommand;
use Zawmyolatt\Modules\Commands\DisableCommand;
use Zawmyolatt\Modules\Commands\DumpCommand;
use Zawmyolatt\Modules\Commands\EnableCommand;
use Zawmyolatt\Modules\Commands\EventMakeCommand;
use Zawmyolatt\Modules\Commands\FactoryMakeCommand;
use Zawmyolatt\Modules\Commands\InstallCommand;
use Zawmyolatt\Modules\Commands\JobMakeCommand;
use Zawmyolatt\Modules\Commands\ListCommand;
use Zawmyolatt\Modules\Commands\ListenerMakeCommand;
use Zawmyolatt\Modules\Commands\MailMakeCommand;
use Zawmyolatt\Modules\Commands\MiddlewareMakeCommand;
use Zawmyolatt\Modules\Commands\MigrateCommand;
use Zawmyolatt\Modules\Commands\MigrateRefreshCommand;
use Zawmyolatt\Modules\Commands\MigrateResetCommand;
use Zawmyolatt\Modules\Commands\MigrateRollbackCommand;
use Zawmyolatt\Modules\Commands\MigrateStatusCommand;
use Zawmyolatt\Modules\Commands\MigrationMakeCommand;
use Zawmyolatt\Modules\Commands\ModelMakeCommand;
use Zawmyolatt\Modules\Commands\ModuleMakeCommand;
use Zawmyolatt\Modules\Commands\NotificationMakeCommand;
use Zawmyolatt\Modules\Commands\PolicyMakeCommand;
use Zawmyolatt\Modules\Commands\ProviderMakeCommand;
use Zawmyolatt\Modules\Commands\PublishCommand;
use Zawmyolatt\Modules\Commands\PublishConfigurationCommand;
use Zawmyolatt\Modules\Commands\PublishMigrationCommand;
use Zawmyolatt\Modules\Commands\PublishTranslationCommand;
use Zawmyolatt\Modules\Commands\RequestMakeCommand;
use Zawmyolatt\Modules\Commands\ResourceMakeCommand;
use Zawmyolatt\Modules\Commands\RouteProviderMakeCommand;
use Zawmyolatt\Modules\Commands\RuleMakeCommand;
use Zawmyolatt\Modules\Commands\MakeRepositoryCommand;
use Zawmyolatt\Modules\Commands\MakeBreadcrumbCommand;
use Zawmyolatt\Modules\Commands\SeedCommand;
use Zawmyolatt\Modules\Commands\SeedMakeCommand;
use Zawmyolatt\Modules\Commands\SetupCommand;
use Zawmyolatt\Modules\Commands\TestMakeCommand;
use Zawmyolatt\Modules\Commands\UnUseCommand;
use Zawmyolatt\Modules\Commands\UpdateCommand;
use Zawmyolatt\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MakeRepositoryCommand::class,
        MakeBreadcrumbCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
