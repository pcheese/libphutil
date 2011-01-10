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

function xhpast_parser_token_constants() {
  return array(
    258 => 'T_REQUIRE_ONCE',
    259 => 'T_REQUIRE',
    260 => 'T_EVAL',
    261 => 'T_INCLUDE_ONCE',
    262 => 'T_INCLUDE',
    263 => 'T_LOGICAL_OR',
    264 => 'T_LOGICAL_XOR',
    265 => 'T_LOGICAL_AND',
    266 => 'T_PRINT',
    267 => 'T_SR_EQUAL',
    268 => 'T_SL_EQUAL',
    269 => 'T_XOR_EQUAL',
    270 => 'T_OR_EQUAL',
    271 => 'T_AND_EQUAL',
    272 => 'T_MOD_EQUAL',
    273 => 'T_CONCAT_EQUAL',
    274 => 'T_DIV_EQUAL',
    275 => 'T_MUL_EQUAL',
    276 => 'T_MINUS_EQUAL',
    277 => 'T_PLUS_EQUAL',
    278 => 'T_BOOLEAN_OR',
    279 => 'T_BOOLEAN_AND',
    280 => 'T_IS_NOT_IDENTICAL',
    281 => 'T_IS_IDENTICAL',
    282 => 'T_IS_NOT_EQUAL',
    283 => 'T_IS_EQUAL',
    284 => 'T_IS_GREATER_OR_EQUAL',
    285 => 'T_IS_SMALLER_OR_EQUAL',
    286 => 'T_SR',
    287 => 'T_SL',
    288 => 'T_INSTANCEOF',
    289 => 'T_UNSET_CAST',
    290 => 'T_BOOL_CAST',
    291 => 'T_OBJECT_CAST',
    292 => 'T_ARRAY_CAST',
    293 => 'T_BINARY_CAST',
    294 => 'T_UNICODE_CAST',
    295 => 'T_STRING_CAST',
    296 => 'T_DOUBLE_CAST',
    297 => 'T_INT_CAST',
    298 => 'T_DEC',
    299 => 'T_INC',
    300 => 'T_CLONE',
    301 => 'T_NEW',
    302 => 'T_EXIT',
    303 => 'T_IF',
    304 => 'T_ELSEIF',
    305 => 'T_ELSE',
    306 => 'T_ENDIF',
    307 => 'T_LNUMBER',
    308 => 'T_DNUMBER',
    309 => 'T_STRING',
    310 => 'T_STRING_VARNAME',
    311 => 'T_VARIABLE',
    312 => 'T_NUM_STRING',
    313 => 'T_INLINE_HTML',
    314 => 'T_CHARACTER',
    315 => 'T_BAD_CHARACTER',
    316 => 'T_ENCAPSED_AND_WHITESPACE',
    317 => 'T_CONSTANT_ENCAPSED_STRING',
    318 => 'T_BACKTICKS_EXPR',
    319 => 'T_ECHO',
    320 => 'T_DO',
    321 => 'T_WHILE',
    322 => 'T_ENDWHILE',
    323 => 'T_FOR',
    324 => 'T_ENDFOR',
    325 => 'T_FOREACH',
    326 => 'T_ENDFOREACH',
    327 => 'T_DECLARE',
    328 => 'T_ENDDECLARE',
    329 => 'T_AS',
    330 => 'T_SWITCH',
    331 => 'T_ENDSWITCH',
    332 => 'T_CASE',
    333 => 'T_DEFAULT',
    334 => 'T_BREAK',
    335 => 'T_CONTINUE',
    336 => 'T_GOTO',
    337 => 'T_FUNCTION',
    338 => 'T_CONST',
    339 => 'T_RETURN',
    340 => 'T_TRY',
    341 => 'T_CATCH',
    342 => 'T_THROW',
    343 => 'T_USE',
    344 => 'T_GLOBAL',
    345 => 'T_PUBLIC',
    346 => 'T_PROTECTED',
    347 => 'T_PRIVATE',
    348 => 'T_FINAL',
    349 => 'T_ABSTRACT',
    350 => 'T_STATIC',
    351 => 'T_VAR',
    352 => 'T_UNSET',
    353 => 'T_ISSET',
    354 => 'T_EMPTY',
    355 => 'T_HALT_COMPILER',
    356 => 'T_CLASS',
    357 => 'T_INTERFACE',
    358 => 'T_EXTENDS',
    359 => 'T_IMPLEMENTS',
    360 => 'T_OBJECT_OPERATOR',
    361 => 'T_DOUBLE_ARROW',
    362 => 'T_LIST',
    363 => 'T_ARRAY',
    364 => 'T_CLASS_C',
    365 => 'T_METHOD_C',
    366 => 'T_FUNC_C',
    367 => 'T_LINE',
    368 => 'T_FILE',
    369 => 'T_COMMENT',
    370 => 'T_DOC_COMMENT',
    371 => 'T_OPEN_TAG',
    372 => 'T_OPEN_TAG_WITH_ECHO',
    373 => 'T_OPEN_TAG_FAKE',
    374 => 'T_CLOSE_TAG',
    375 => 'T_WHITESPACE',
    376 => 'T_START_HEREDOC',
    377 => 'T_END_HEREDOC',
    378 => 'T_HEREDOC',
    379 => 'T_DOLLAR_OPEN_CURLY_BRACES',
    380 => 'T_CURLY_OPEN',
    381 => 'T_PAAMAYIM_NEKUDOTAYIM',
    382 => 'T_BINARY_DOUBLE',
    383 => 'T_BINARY_HEREDOC',
    384 => 'T_NAMESPACE',
    385 => 'T_NS_C',
    386 => 'T_DIR',
    387 => 'T_NS_SEPARATOR',
    388 => 'T_XHP_WHITESPACE',
    389 => 'T_XHP_TEXT',
    390 => 'T_XHP_LT_DIV',
    391 => 'T_XHP_LT_DIV_GT',
    392 => 'T_XHP_ATTRIBUTE',
    393 => 'T_XHP_CATEGORY',
    394 => 'T_XHP_CHILDREN',
    395 => 'T_XHP_ANY',
    396 => 'T_XHP_EMPTY',
    397 => 'T_XHP_PCDATA',
    398 => 'T_XHP_COLON',
    399 => 'T_XHP_HYPHEN',
    400 => 'T_XHP_BOOLEAN',
    401 => 'T_XHP_NUMBER',
    402 => 'T_XHP_ARRAY',
    403 => 'T_XHP_STRING',
    404 => 'T_XHP_ENUM',
    405 => 'T_XHP_FLOAT',
    406 => 'T_XHP_REQUIRED',
    407 => 'T_XHP_ENTITY',
  );
}
