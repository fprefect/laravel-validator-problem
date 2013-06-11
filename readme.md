### Injected 'validator' service gets overwritten when calling \Artisan::call('migrate') in test setUp

To reproduce, clone this repo and run `phpunit`. The output will be

    factory: did not work correctly
    facade: worked correctly

This was found by doing a backtrace when `$abstract == 'validator'` in `Illuminate\Container\Container::bind()`. It showed that 

    app/tests/ExampleTest.php(8): Illuminate\Support\Facades\Artisan::call('migrate')

re-registered ValidationServiceProvider after it was already registered at (eagerly loaded?)

    Illuminate/Foundation/ProviderRepository.php(67): Illuminate\Foundation\Application->register(Object(Illuminate\Validation\ValidationServiceProvider))
