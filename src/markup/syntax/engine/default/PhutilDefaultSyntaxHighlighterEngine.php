<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @group markup
 */
class PhutilDefaultSyntaxHighlighterEngine
  extends PhutilSyntaxHighlighterEngine {

  private $config = array();

  public function setConfig($key, $value) {
    $this->config[$key] = $value;
    return $this;
  }

  public function getLanguageFromFilename($filename) {

    static $default_map = array(
      // All files which have file extensions that we haven't already matched
      // map to their extensions.
      '@\\.([^./]+)$@' => 1,
    );

    $maps = array();
    if (!empty($this->config['filename.map'])) {
      $maps[] = $this->config['filename.map'];
    }
    $maps[] = $default_map;

    foreach ($maps as $map) {
      foreach ($map as $regexp => $lang) {
        $matches = null;
        if (preg_match($regexp, $filename, $matches)) {
          if (is_numeric($lang)) {
            return idx($matches, $lang);
          } else {
            return $lang;
          }
        }
      }
    }

    return null;
  }

  public function getHighlightFuture($language, $source) {

    $have_pygments = !empty($this->config['pygments.enabled']);

    if ($language == 'php' && xhpast_is_available()) {
      return id(new PhutilXHPASTSyntaxHighlighter())
        ->setConfig('pygments.enabled', $have_pygments)
        ->getHighlightFuture($source);
    }

    if ($language == 'diviner' || $language == 'remarkup') {
      return id(new PhutilDivinerSyntaxHighlighter())
        ->getHighlightFuture($source);
    }

    if ($have_pygments) {
      return id(new PhutilPygmentsSyntaxHighlighter())
        ->setConfig('language', $language)
        ->getHighlightFuture($source);
    }

    return id(new PhutilDefaultSyntaxHighlighter())
      ->getHighlightFuture($source);
  }
}
