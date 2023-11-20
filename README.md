# hyva-productslider
productslider in homepage  for Hyvä Themes

## What does it do?

It allows to use porduct slider in homepage through backend-configuration when using the Hyva Theme
 
## Installation
  
1. Install via composer
   Note: both repositories need to be configured until the package and its dependency are available through packagist.
   ```
   
   composer config repositories.hyva-themes-magento2-productslider git https://github.com/Ashokpdobariya/hyva-productslider.git
   composer require hyva-themes/magento2-productslider or
   composer require hyva-themes/magento2-productslider dev-main
   ```
2. Enable module
   ```
   bin/magento setup:upgrade
   ```
   
## Upgrading

After upgrading from release 1.0.3 or before be sure to run
```
bin/magento setup:upgrade
```
This will ensure configuration settings stored in the database are properly migrated to the `Hyva_ThemeFallback`.

Should the configuration settings be locked in `app/etc/config.php`, you have to migrate all paths in the
section `hyva_productslider` manually to the path `hyva_theme_fallback`.  
The full paths that need to be migrated are:
```

```


## Magento backend configuration

1. ```HYVA THEMES->Theme Fallback->General Settings->Enable```
    
    The configutation path is ```hyva_theme_fallback/general/enable```


2. ```HYVA THEMES->Theme Fallback->General Settings->Theme full path```

    The configutation path is ```hyva_theme_fallback/general/theme_full_path```
    
    default `frontend/Magento/luma`

3. ```HYVA THEMES->Theme Fallback->General Settings->The list of URL's parts```
   
   The configuration path is `hyva_theme_fallback/general/list_part_of_url`
4. ```Slider Configuration```
   
   The configuration path is `store/Configuration/zealousecommerce/homepge`
   <br>
   Enable Slider to `Yes`
   <br>
   Add Title that you want to set
   <br>
   set the sku  in product-sku tab just like `24-MB01,24-MB02,24-MB04`
## How does it work?

This module depends on `hyva-themes/magento2-theme-fallback` and only supplies the configuration. 
