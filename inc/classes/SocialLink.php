<?php

class SocialLink
{

    public string $link;
    public LinkType $linkType;


    public function __construct($link, $linkType)
    {
        $this->link = $link;
        $this->linkType = $linkType;
    }


    public function render(): string
    {
        return '
            <div class="social-link"> 
                <a target="_blank" href="' . $this->link . '">
                    <img height="26" class="light-img" 
                        src="' . $this->logo(DesignType::LIGHT) . '" alt="">
                        
                    <img height="26" class="dark-img"
                        src="' . $this->logo(DesignType::DARK) . '" alt="">
                </a>
            </div>

        
        ';
    }

    public function logo($designType): string
    {
        if ($this->linkType === LinkType::NORMAL) {
            return '';
        }

        $value = $this->linkType->value;
        $path = '/assets/images/logo/' . $value . '/' . $value;

        if ($designType === DesignType::LIGHT) {
            return $path . '-black.svg';
        }
        if ($designType === DesignType::DARK) {
            return $path . '-white.svg';
        }

        return $path . '.svg';
    }
}