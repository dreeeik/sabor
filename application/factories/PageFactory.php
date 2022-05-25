<?php

namespace factories;

/**
 * Description of PageFactory
 *
 * @author dhieg
 */
abstract class PageFactory {
    private string $header;
    private string $content;
    private string $footer;
    private string $jsCode;
    
    //protected: qualquer classe filha em pacotes diferentes
    public function getHeader(): string {
        return $this->header;
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getFooter(): string {
        return $this->footer;
    }

    public function setHeader(string $header): void {
        $this->header = $header;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    public function setFooter(string $footer): void {
        $this->footer = $footer;
    }
    
    public function getJsCode(): string {
        return $this->jsCode;
    }

    public function setJsCode(string $jsCode): void {
        $this->jsCode = $jsCode;
    }


    
}
