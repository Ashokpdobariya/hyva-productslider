# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).



## [Unreleased]
### Added
- Nothing

### Changed
- Nothing

### Removed
- Nothing

## [1.1.2] - 2022-03-09
### Added
- Add paypal payflow callback urls to default fallback configuration.

  Big thanks to Lucas van Staden for the contribution!

  More information can be found in the [merge request #11](https://gitlab.hyva.io/hyva-themes/magento2-luma-checkout/-/merge_requests/11)

### Changed
- Nothing

### Removed
- Nothing




## [1.1.1] - 2021-06-17
### Added
- Nothing

### Changed
- Enable theme fallback in default system configuration after installation

### Removed
- Nothing

### [1.1.0] - 2021-06-04
### Added
- Nothing

### Changed
- Extracted the fallback logic to hyva-themes/magento2-theme-fallback.

  All code is backward compatible with one exception: the config XML paths changed.
  Configuration settings stored in the core_config_data table are migrated automatically, but settings 
  stored in `app/etc/config.php` will need to be migrated manually.
  Please read the **Upgrading** section in the readme for more details.

### Removed
- All the fallback logic. This module now only is responsible for providing the fallback configuration.

### [1.0.3] - 2021-04-10
### Added
- This Changelog

### Changed
- pluginOrder increased to 9999 to prevent conflicts with other modules

### Removed
- none

# Ealier releases
#### [1.0.2] - 2021-02-26
#### [1.0.1] - 2021-01-15
#### [1.0.0] - 2020-12-08

