### Plugin types:
1. Before (Execute before) <br />
2. After (Execute after) <br />
3. Around (Execute before and after) <br />

### How to make plugin?
Create directory and di.xml file as following:
```angular2html
    app/code/Codilar/Demo/etc/frontend/di.xml
```
Create a plugins directory: ```app/Codilar/Demo/Pugins``` 
and how register plugins in di.xml file is given below-
```  
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:ObjectManager/etc/config.xsd">
    <type name="Magento\Store\Model\Store">
        <plugin name="plugin_for_product" type="Codilar\Demo\Pugins\Product" />
    </type>
</config>
```

ref: https://www.youtube.com/watch?v=ko75VJVor9I