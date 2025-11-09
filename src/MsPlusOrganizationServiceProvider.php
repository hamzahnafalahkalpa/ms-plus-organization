<?php

namespace WellmedPlus\MsPlusOrganization;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsPlusOrganizationServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsPlusOrganization::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
