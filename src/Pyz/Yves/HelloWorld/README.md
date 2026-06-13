# HelloWorld Yves Module

This is a first custom Spryker Yves frontend module created for learning and portfolio purposes.

## What It Does

The module adds a storefront page at:

```text
/hello-world
```

When the route is opened, Spryker calls the module controller and renders a Twig template with the message:

```text
Hello Yves!
```

## Files

```text
src/Pyz/Yves/HelloWorld/
├── Controller/
│   └── IndexController.php
├── Plugin/
│   └── Router/
│       └── HelloWorldRouteProviderPlugin.php
└── Theme/
    └── default/
        └── views/
            └── index/
                └── index.twig
```

## Route Registration

The route provider is registered in:

```text
src/Pyz/Yves/Router/RouterDependencyProvider.php
```

The registered plugin is:

```php
new HelloWorldRouteProviderPlugin()
```

## Request Flow

```text
/hello-world
    -> HelloWorldRouteProviderPlugin
    -> IndexController::indexAction()
    -> @HelloWorld/views/index/index.twig
    -> {{ data.helloWorld }}
```

## Learning Goal

This module demonstrates the basic structure of a Spryker Yves frontend page:

- route provider plugin
- controller action
- Twig template
- router dependency provider registration
