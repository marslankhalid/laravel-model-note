<?php

namespace TMSLLC\ModelNote;

use Illuminate\Support\ServiceProvider;
use TMSLLC\ModelNote\Exceptions\InvalidNoteModel;

class ModelNoteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
<<<<<<< HEAD
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
=======
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
>>>>>>> 2e15663dca3d56ae4fb183c2b1eb849b56d6bc9c
        }

        if (! class_exists('CreateNotesTable')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__.'/../database/migrations/create_notes_table.php.stub' => database_path('migrations/'.$timestamp.'_create_notes_table.php'),
            ], 'migrations');
        }

        $this->publishes([
<<<<<<< HEAD
            __DIR__ . '/../config/model-note.php' => config_path('model-note.php'),
=======
            __DIR__.'/../config/model-note.php' => config_path('model-note.php'),
>>>>>>> 2e15663dca3d56ae4fb183c2b1eb849b56d6bc9c
        ], 'config');

        $this->guardAgainstInvalidNoteModel();
    }

    public function register()
    {
<<<<<<< HEAD
        $this->mergeConfigFrom(__DIR__ . '/../config/model-note.php', 'model-note');
=======
        $this->mergeConfigFrom(__DIR__.'/../config/model-note.php', 'model-note');
>>>>>>> 2e15663dca3d56ae4fb183c2b1eb849b56d6bc9c
    }

    public function guardAgainstInvalidNoteModel()
    {
        $modelClassName = config('model-note.note_model');

        if (! is_a($modelClassName, Note::class, true)) {
            throw InvalidNoteModel::create($modelClassName);
        }
    }
}
