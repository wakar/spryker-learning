# Spryker Learning

This repository contains my custom Spryker learning modules.

## Modules

- `src/Pyz/Yves/HelloWorld` - first custom Yves frontend module.
- `src/Pyz/Zed/HelloWorld` - first custom Zed Back Office module.

## Current Module

The HelloWorld Yves module adds a storefront route:

```text
/hello-world
```

The HelloWorld Zed module adds a Back Office page using the same module name:

```text
/hello-world
```

The module source is intentionally kept small and focused so it can be reviewed easily.

## Router Registration

To enable the route in a Spryker project, register the route provider in:

```text
src/Pyz/Yves/Router/RouterDependencyProvider.php
```

The exact highlighted diff is available here:

```text
docs/router-dependency-provider.patch
```

For the optional Zed Back Office menu entry, see:

```text
docs/zed-navigation-helloworld.patch
```
