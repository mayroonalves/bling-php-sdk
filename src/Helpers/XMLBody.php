<?php

namespace Bling\Helpers;

use Bling\Contracts\BodyInterface;

class XMLBody implements BodyInterface
{
    public function __construct($root = '<root/>')
    {
        $this->root = $root;
    }

    private function toXml($data, &$xmlData)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (is_numeric($key))
                    $key = 'item' . $key;
                $subnode = $xmlData->addChild($key);
                return $this->toXml($value, $subnode);
            } else {
                $xmlData->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }

    public function setBody(array $body): string
    {
        echo '<pre>';
        var_dump($this->root);
        echo '</pre>';
        exit;
        $xml = new \SimpleXMLElement($root);
        echo '<pre>';
        var_dump($this->toXml($body, $xml)->asXML());
        echo '</pre>';
        exit;
        return $this->toXml($body, $xml)->asXML();
    }
}
