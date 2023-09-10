# Sitediff demo

A small demo to show how sitediff works. For this demo we assume we have two sites:

- actual: An actual project
- upgrade: an upgrade we work on for the project

## Start project

After cloning the repository start the project:

```shell
    ddev start
```

You can now open two sites:

- https://actual.sitediff-demo.ddev.site/
- https://upgrade.sitediff-demo.ddev.site/

They may look very much the same, but there are two quite hidden errors in the upgrade site.

## Install sitediff

Install sitediff as described here:

https://github.com/evolvingweb/sitediff/blob/master/INSTALLATION.md

Note: The docker based installation method did not work for me because it was not able to connect to the ddev sites.
So please install sitediff locally for this demo.

## Running sitediff

Now is the time to spot the errors:

```shell
sitediff crawl
sitediff diff
sitediff serve
```

Sitediff serve should open an HTML report, where you can easily see diffs or the errors.

Please note, how we already have a configuration in the sitediff folder, that also contains some dom_transforms and
sanitazion rules to exclude false positives, i.e. things that are supposed to change like dynamic content or cache
hashes.











