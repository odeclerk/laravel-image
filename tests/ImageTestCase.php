<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Folklore\Image\Exception\FormatException;
use Orchestra\Testbench\TestCase;

class ImageTestCase extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app->instance('path.public', __DIR__.'/fixture');

        $app['config']->set('filesystems.disks.local.root', public_path());
    }

    protected function getPackageProviders($app)
    {
        return [
            \Folklore\Image\ImageServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Image' => \Folklore\Image\Support\Facades\Image::class
        ];
    }
}
