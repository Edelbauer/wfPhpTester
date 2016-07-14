<?php
/**
 * Created by PhpStorm.
 * User: Praktikant.STTINSM
 * Date: 12.07.2016
 * Time: 09:12
 */

/**
 * Class Header
 */
class Header {

    private $_cnt;
    private $_text;
    private $_label;

    /**
     * Header constructor. wird aufgerufen bei new xxx()
     * @param $cnt
     * @param $text
     */
    public function __construct($cnt, $text)
    {
        $this->_cnt = $cnt;
        $this->_text = $text;
    }

    /**
     * Überschrift erzeungen
     * @return string
     */
    private function generateLabel(){

        $label = $this->getLabel();
        $html = "<div class='label'>$label</div>";

        return $html;
    }

    /**
     * Erstellen der HTML Codes
     * @return string
     */
    private function buildHeader() {
        $html ="";
        for($i=0;$i<$this->_cnt;$i++){
            $html.="<div class='header'>".$this->_text." - $i</div>";
        }

        return $html;
    }


    /**
     * HTML CODE ausgeben
     * @return string
     */
    public function getHtml(){
        $html = "";
        $html.= $this->generateLabel();
        $html.= $this->buildHeader();
        return $html;
    }

    /**
     * @param $label
     */
    public function setLabel($label){
        $this->_label=$label;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        if(!$this->_label){
            $this->_label = "Mein Wert";
        }
        return $this->_label;
    }

}

