<?php

namespace factories;

/**
 * Description of PageFactory
 *
 * @author dhieg
 */
abstract class PageFactory {
    private string $header;
    private string $contentHeader;
    private string $contentBody;
    private string $footer;
    private string $jsCode;
    
    public function __construct() {
        $this->setHeader('html/static/header');
        $this->setContentHeader('html/static/content_header');
        $this->setFooter('html/static/footer');
        $this->setJsCode('html/static/jscode');
    }
        
    //protected: qualquer classe filha em pacotes diferentes
    public function getHeader(): string {
        return $this->header;
    }

    public function getContentHeader(): string {
        return $this->content;
    }
    
    public function getContentBody(): string {
        return $this->contentBody;
    }
    
    public function getFooter(): string {
        return $this->footer;
    }
    
     public function getJsCode(): string {
        return $this->jsCode;
    }

    public function setHeader(string $header): void {
        $this->header = $header;
    }

    public function setContentHeader(string $content): void {
        $this->content = $content;
    }
    
    public function setContentBody(string $contentBody): void {
        $this->contentBody = $contentBody;
    }

    public function setFooter(string $footer): void {
        $this->footer = $footer;
    }

    public function setJsCode(string $jsCode): void {
        $this->jsCode = $jsCode;
    }
}
