<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['name', 'value', 'attributes']);
        Form::component('bsTextArea', 'components.form.textarea', ['name', 'value', 'attributes']);
        Form::component('bsTextDue', 'components.form.due', ['name', 'value', 'attributes']);
        Form::component('bsSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes']);
        Form::component('hidden', 'components.form.hidden', ['name', 'value', 'attributes']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
