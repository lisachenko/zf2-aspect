GO AOP PHP and ZF2
==================

This module showcases a simple implementation of Go! AOP PHP into [ZendSkelettonApplication of ZF2](https://github.com/zendframework/ZendSkeletonApplication).
It contains the full bootstrapping of ZF2 including a DemoAspect from which you'll be able to learn from.

For more information on different aspects please see the [full documentation](http://go.aopphp.com/docs/).

Installation
------------

The easiest way to get Go! running with ZF2 is to create a composer project using this repository. You're able to 
create it as easily as running the following command in your CLI (assuming you have composer installed):

    composer create-project -s dev lisachenko/zf2-aspect

The second option would be to clone this repository and run composer install.

    git clone https://github.com/lisachenko/zf2-aspect && cd zf2-aspect && composer install

Once you've done this you're good to go and test out the power of Go! within your known ZF2 environment.

Enable AOP
----------

Per default this project is running the ZendSkelettonApplication without AOP enabled. To enable AOP all you have to
do is to append ```?aspect``` to your URL. For example ```http://localhost:8080/?aspect```.

To enable AOP by default with your own aspect, all you need to do is change the contents of ```public/index.php``` to
the following:

    <?php
    /**
     * This makes our life easier when dealing with paths. Everything is relative
     * to the application root now.
     */
    chdir(dirname(__DIR__));
    
    // Setup autoloading
    require 'init_aspect.php';
    
    // Run the application!
    Zend\Mvc\Application::init(require 'config/application.config.php')->run();

You should only do this for your own aspects though. The DemoAspect will match every function call and will echo its 
hook. So disable the DemoAspect in ```aspect/DemoAspectKernel.php``` and you're good to go.