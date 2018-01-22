<?php
namespace Craft;

class KlaviyoConnectPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Klaviyo Connect');
    }

    public function getDescription()
    {
        return Craft::t('Klaviyo integration for Craft CMS');
    }

    public function getVersion()
    {
        return '0.1';
    }

    public function getDeveloper()
    {
        return 'Shoe Shine Design & Development';
    }

    public function getDeveloperUrl()
    {
        return 'http://shoeshinedesign.com/';
    }

    public function init()
    {
        require_once __DIR__ . '/vendor/autoload.php';
    }

    protected function defineSettings()
    {
        return array(
            'klaviyoSiteId' => array(AttributeType::String, 'default' => ''),
            'klaviyoApiKey' => array(AttributeType::String, 'default' => ''),
            'klaviyoDefaultProfileMapping' => array(AttributeType::String, 'default' => 'usermodel_mapping'),
            'klaviyoAvailableLists' => array(AttributeType::Mixed, 'default' => array()),
            'klaviyoListsAll' => array(AttributeType::Bool, 'default' => true),
        );
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('klaviyoconnect/settings', array(
            'settings' => $this->getSettings(),
        ));
    }
}
