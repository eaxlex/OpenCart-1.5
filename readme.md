# <img style="height:35px;vertical-align: middle;" src="https://github.com/eaxlex/OpenCart-System/blob/latest/library/mktr/logo.png" alt="TheMarketer"> TheMarketer - OpenCart-1.5

## Compatible with:
    - OpenCart 1.5

## Install
Copy this repo in root

In order to proper function please add in root/index.php and root/admin/index.php of your store following code before:
```
// Router
if (isset($request->get['route'])) {
```

This Code
```
/* TheMarketer Start */
$controller->addPreAction(new Action('module/mktr_tracker/oc2'));
/* TheMarketer END */
````