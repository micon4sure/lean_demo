<h2>code</h2>
<? $this->navigation() ?>

<h3>gentlemen, start your engines!</h3>
<p>
    Ok, so you read all about what lean is and what it does and now you're eager to see some code! Buckle up then, here
    goes!
</p>
<? $code = <<<ENDCODE
<?php
// register your lib with the autoloader
\$autoload->register('demo', APPLICATION_ROOT . '/lib');

// instantiate the application
\$application = new \lean\Application(\$environment);

// register a route
\$application->registerRoute('demo', '/demo/:id', array('controller' => '\lean\demo\Awesome', action => 'sweet'));

// aaaaaand… go!
\$application->run();

ENDCODE;
highlight_string($code); ?>

<p>
    Accessing <em>/demo/23</em> will now call the <em>sweetAction</em> in <em>\lean\demo\Awesome</em> with the id
    parameter set to 23!
</p>
<p>
    There's much more to be done with routing. You could just as well use Slim's routing directly and use lean
    as an accompanying library. It's up to you, that's the power of lean!
</p>