<?php

namespace Xzito\CS\Config;

use PhpCsFixer\Config as CsConfig;

class Config extends CsConfig {

  public function __construct($name = 'xzito') {
    parent::__construct($name);

    $this->setRiskyAllowed(true);
  }

  public function getRules() {
    $rules = [
      '@DoctrineAnnotation' => true,
      '@PSR2' => true,
      '@PHP71Migration' => true,
      '@PHP71Migration:risky' => true,
      'align_multiline_comment' => [
        'comment_type' => 'all_multiline'
      ],
      // 'array_syntax' => [ 'syntax' => 'short' ],
      'binary_operator_spaces' => [
        'default' => 'single_space'
      ],
      'blank_line_after_opening_tag' => false,
      'braces' => [
        'allow_single_line_closure' => true,
        'position_after_functions_and_oop_constructs' => 'same'
      ],
      'cast_spaces' => false,
      'class_definition' => [
        'singleItemSingleLine' => true
      ],
      'class_keyword_remove' => false,
      'combine_consecutive_issets' => true,
      'combine_consecutive_unsets' => true,
      'compact_nullable_typehint' => true,
      'concat_space' => [
        'spacing' => 'one',
      ],
      'declare_equal_normalize' => [
        'space' => 'single'
      ],
      'declare_strict_types' => false,
      'dir_constant' => true,
      'doctrine_annotation_braces' => true,
      'doctrine_annotation_array_assignment' => true,
      'doctrine_annotation_indentation' => true,
      'doctrine_annotation_spaces' => true,
      'ereg_to_preg' => false,
      'function_to_constant' => true,
      'function_typehint_space' => true,
      'general_phpdoc_annotation_remove' => false,
      'header_comment' => false,
      'heredoc_to_nowdoc' => true,
      'include' => true,
      'increment_style' => [
        'style' => 'post',
      ],
      'indentation_type' => true,
      'is_null' => [
        'use_yoda_style' => false,
      ],
      'linebreak_after_opening_tag' => true,
      'list_syntax' => [
        'syntax' => 'short',
      ],
      'method_argument_space' => [
        'ensure_fully_multiline' => true,
        'keep_multiple_spaces_after_comma' => false,
      ],
      'lowercase_cast' => true,
      'mb_str_functions' => true,
      'magic_constant_casing' => true,
      'method_separation' => true,
      'modernize_types_casting' => true,
      'native_function_casing' => true,
      'native_function_invocation' => false,
      'new_with_braces' => true,
      'no_alias_functions' => false,
      'no_blank_lines_after_class_opening' => false,
      'no_blank_lines_after_phpdoc' => true,
      'no_blank_lines_before_namespace' => false,
      'no_empty_comment' => true,
      'no_empty_phpdoc' => true,
      'no_empty_statement' => true,
      'no_extra_consecutive_blank_lines' => [
        'tokens' => [
          'break',
          'continue',
          'curly_brace_block',
          'extra',
          'parenthesis_brace_block',
          'return',
          'square_brace_block',
          'throw',
          'use',
          'use_trait',
        ],
      ],
      'no_closing_tag' => true,
      'no_null_property_initialization' => true,
      'no_homoglyph_names' => false,
      'no_leading_import_slash' => true,
      'no_leading_namespace_whitespace' => true,
      'no_mixed_echo_print' => [
        'use' => 'echo',
      ],
      'no_multiline_whitespace_around_double_arrow' => true,
      'no_multiline_whitespace_before_semicolons' => true,
      'no_php4_constructor' => false,
      'no_short_bool_cast' => true,
      'no_short_echo_tag' => true,
      'no_singleline_whitespace_before_semicolons' => true,
      'no_spaces_around_offset' => true,
      'no_trailing_comma_in_list_call' => true,
      'no_trailing_comma_in_singleline_array' => true,
      'no_unneeded_control_parentheses' => false,
      'no_unreachable_default_argument_value' => true,
      'no_unused_imports' => true,
      'no_useless_else' => true,
      'no_useless_return' => true,
      'no_whitespace_before_comma_in_array' => true,
      'no_whitespace_in_blank_line' => true,
      'normalize_index_brace' => true,
      'not_operator_with_space' => false,
      'not_operator_with_successor_space' => false,
      'object_operator_without_whitespace' => true,
      'ordered_class_elements' => true,
      'ordered_imports' => true,
      'php_unit_construct' => true,
      'php_unit_dedicate_assert' => true,
      'php_unit_fqcn_annotation' => true,
      'php_unit_strict' => false,
      'php_unit_test_class_requires_covers' => false,
      'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false,
      ],
      'phpdoc_align' => true,
      'phpdoc_annotation_without_dot' => true,
      'phpdoc_indent' => true,
      'phpdoc_inline_tag' => true,
      'phpdoc_no_access' => true,
      'phpdoc_no_alias_tag' => true,
      'phpdoc_no_empty_return' => true,
      'phpdoc_no_package' => true,
      'phpdoc_no_useless_inheritdoc' => true,
      'phpdoc_return_self_reference' => true,
      'phpdoc_order' => true,
      'phpdoc_types_order' => true,
      'phpdoc_scalar' => true,
      'phpdoc_separation' => true,
      'phpdoc_single_line_var_spacing' => true,
      'phpdoc_summary' => true,
      'phpdoc_to_comment' => true,
      'phpdoc_trim' => true,
      'phpdoc_types' => true,
      'phpdoc_var_without_name' => true,
      'protected_to_private' => true,
      'psr0' => false,
      'psr4' => true,
      'return_type_declaration' => false,
      'self_accessor' => false, // it causes an edge case error
      'semicolon_after_instruction' => true,
      'single_line_comment_style' => true,
      'short_scalar_cast' => true,
      'silenced_deprecation_error' => false,
      'simplified_null_return' => false,
      'single_blank_line_before_namespace' => false,
      'single_quote' => true,
      'space_after_semicolon' => true,
      'standardize_not_equals' => true,
      'strict_comparison' => false, // risky
      'strict_param' => false, // risky
      'ternary_operator_spaces' => true,
      'ternary_to_null_coalescing' => true,
      'trailing_comma_in_multiline_array' => false,
      'trim_array_spaces' => true,
      'unary_operator_spaces' => true,
      'whitespace_after_comma_in_array' => true,
    ];

    return $rules;
  }
}
