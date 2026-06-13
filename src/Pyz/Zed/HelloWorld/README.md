# HelloWorld Zed Module

This is a first custom Spryker Zed Back Office module created for learning and portfolio purposes.

## What It Does

The module adds a simple Back Office page that renders:

```text
Hello World!
```

The page is handled by:

```text
Pyz\Zed\HelloWorld\Communication\Controller\IndexController::indexAction()
```

## Files

```text
src/Pyz/Zed/HelloWorld/
├── Communication/
│   └── Controller/
│       └── IndexController.php
└── Presentation/
    └── Index/
        └── index.twig
```

## Back Office URL

In a Spryker Zed application, this module follows the standard Zed routing convention:

```text
/hello-world
```

or explicitly:

```text
/hello-world/index
```

## Request Flow

```text
/hello-world
    -> HelloWorld module
    -> IndexController::indexAction()
    -> viewResponse(['helloWorldText' => 'Hello World!'])
    -> Presentation/Index/index.twig
    -> {{ helloWorldText }}
```

## Optional Navigation Registration

The module can be accessed directly by URL. To show it in the Back Office menu, add a navigation entry in:

```text
config/Zed/navigation.xml
```

The repository includes a sample highlighted diff at:

```text
docs/zed-navigation-helloworld.patch
```
