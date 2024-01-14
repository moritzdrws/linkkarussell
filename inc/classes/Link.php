<?php

class Link
{
    public string $link;
    public LinkType $linkType;
    public string $displayName;
    public string $iconCode;

    public function __construct($link, $linkType, $displayName, $iconCode = '')
    {
        $this->link = $link;
        $this->linkType = $linkType;
        $this->displayName = $displayName;
        $this->iconCode = $iconCode;
    }

    public function render($button_color, $button_color_hover, $text_color, $text_color_hover): string
    {

        return '
        
        
        
        <div class="link-item d-flex justify-content-center align-items-center">
                <div class="link-container row"
                
                    data-button-color="' . $button_color . '"
                    data-button-color-hover="' . $button_color_hover . '"
                    data-text-color="' . $text_color . '"
                    data-text-color-hover="' . $text_color_hover . '"
                    
                    
                    onmouseover="updateColor(this, \'' . $button_color_hover . '\',\'' . $text_color_hover . '\')" 
                    onmouseout="updateColor(this, \'' . $button_color . '\',\'' . $text_color . '\')">
                    
                    <div class="col-12 d-flex justify-content-center align-items-center link w-100">
                        <a class="w-100 p-3 text-center" target="_blank" href="' . $this->link . '">' . $this->displayName . '</a>
                    </div>
                </div>
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