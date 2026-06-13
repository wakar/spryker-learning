# Spryker Learning

This repository contains my custom Spryker learning modules.

## Modules

- `src/Pyz/Yves/HelloWorld` - first custom Yves frontend module.

## Current Module

The HelloWorld Yves module adds a storefront route:

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
