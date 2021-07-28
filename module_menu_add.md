## Create menu in the admin panel in magento 2.4.1

#### STEP-1
Create registraion.php file in ```Menu\News\registraion.php```  and following code:
```
    <?php
    
    use Magento\Framework\Component\ComponentRegistrar;
    ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Menu_News', __DIR__);

```
#### STEP-2
Create composer.json file in ```Menu\News\composer.json```  and following code:
```
{
  "name": "menu/news",
  "version": "1.0.0",
  "description": "N/A",
  "type": "magento2-module",
  "require": {
    "magento/framework": "*"
  },
  "license": [
    "Proprietary"
  ],
  "autoload": {
    "files": [
      "registration.php"
    ],
    "psr-4": {
      "Menu\\News\\": ""
    }
  }
}
```
#### STEP-3
Create module.xml file in ```Menu\News\etc\module.xml```  and following code:
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="Menu_News"/>
</config>
```
#### STEP-4
Create Action Controller index.php file in ```Menu\News\Controller\Adminhtml\AllNews\Index.php```  and following code:
```
<?php


namespace Menu\News\Controller\Adminhtml\AllNews;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return ResultInterface|Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        return $resultPage;
    }
}

```
#### STEP-5
Create routes.xml file in ```Menu\News\etc\adminhtml\routes.xml```  and following code:
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="admin">
        <route id="news" frontName="news">
            <module name="Menu_News" />
        </route>
    </router>
</config>


```

#### STEP-6
Create menu.xml file in ```Menu\News\etc\adminhtml\menu.xml```  and following code:
```
<?xml version="1.0"?>
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Backend:etc/menu.xsd">
<menu>
    <add id="Menu_News::ixora" title="NEWS" translate="title" module="Menu_News" sortOrder="90" dependsOnModule="Menu_News" resource="Menu_News::ixora"/>
    <add id="Menu_News::news" title="Bangladesh today" translate="title" module="Menu_News" parent="Menu_News::ixora" sortOrder="50" dependsOnModule="Menu_News" resource="Menu_News::news"/>
    <add id="Menu_News::news_allnews" title="All News" translate="title" module="Menu_News" parent="Menu_News::news" sortOrder="10" dependsOnModule="Menu_News" action="news/allnews" resource="Menu_News::news_allnews"/>
</menu>
</config>

```
#### STEP-7
Create layout view file news_allnews_index.xml file in ```Menu\News\view\adminhtml\layout\news_allnews_index.xml```  and following code:
```
<?xml version="1.0"?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <head>
        <title>News</title>
    </head>
    <body>
        <referenceContainer name="content">
            <block class="Magento\Backend\Block\Template" template="Menu_News::allnews.phtml"/>
        </referenceContainer>
    </body>
</page>

```
#### STEP-8
Create template view file allnews.phtml file in ```Menu\News\view\adminhtml\templates\allnews.phtml```  and following code:
```
<p>You can find all news from here</p>

```
#### STEP-9
Run elasticsearch

#### STEP-10
Run following lines in the terminal in the project root directory
```
    php bin/magento setup:upgrade
    php bin/magento cache:clean
    php bin/magento cache:flush
```











