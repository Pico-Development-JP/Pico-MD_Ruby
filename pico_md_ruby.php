<?php
/**
 * Pico Markdown Extension: Ruby
 * マークダウン拡張構文：++で囲った文字列をルビつき文字列にする
 *
 * @author TakamiChie
 * @link http://onpu-tamago.net/
 * @license http://opensource.org/licenses/MIT
 * @version 1.0
 */
class Pico_MD_Ruby {
  public function after_parse_content(&$content)
  {
    $content = preg_replace('/\+\+(.+?)\|\|(.+?)\+\+/', '<ruby>\1<rp>(</rp><rt>\2</rt><rp>)</rp></ruby>', $content);
  }
}
?>