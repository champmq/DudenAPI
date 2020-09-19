<?php

require_once 'simple_html_dom.php';

class DudenAPI
{

    public function getWord($word)
    {

        $dom = file_get_html("https://www.duden.de/rechtschreibung/" . $word, false);
        $infos = array();

        if (!empty($dom)) {
            $i = 0;
            foreach ($dom->find(".tabloid") as $divClass) {
                $wortart = explode(", ", $divClass->find(".tuple__val")[0]->plaintext);
                $infos["wortart"] = $wortart[0];
                $infos["geschlecht"] = $wortart[1];
                foreach ($divClass->find("#Bedeutung-1a .enumeration__text") as $bedeutung) {
                    $infos["bedeutung"] = $bedeutung->plaintext;
                }
                foreach ($divClass->find("#synonyme li") as $syn) {
                    $infos["synonym"] = $syn->plaintext;
                }
                foreach ($divClass->find("#herkunft p") as $herkunft) {
                    $infos["herkunft"] = $herkunft->plaintext;
                }
            }
        }
        return ($infos);
    }
}
