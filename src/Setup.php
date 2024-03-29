<?php

namespace Oyova\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class Setup
{
    protected string $configFilePath;

    protected array $in = [];

    protected array $exclude = [];

    protected array $notName = [];

    public function __construct(string $configFilePath)
    {
        $this->configFilePath = $configFilePath;
    }

    protected function rules(): array
    {
        return [
            'align_multiline_comment' => true,
            'array_indentation' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'assign_null_coalescing_to_coalesce_equal' => true,
            'backtick_to_shell_exec' => true,
            'binary_operator_spaces' => [
                'default' => 'single_space',
            ],
            'blank_line_after_namespace' => true,
            'blank_line_after_opening_tag' => true,
            'blank_line_before_statement' => [
                'statements' => [
                    'continue',
                    'return',
                ],
            ],
            'blank_line_between_import_groups' => true,
            'braces' => [
                'allow_single_line_anonymous_class_with_empty_body' => true,
                'allow_single_line_closure' => true,
                'position_after_control_structures' => 'same',
                'position_after_functions_and_oop_constructs' => 'next',
                'position_after_anonymous_constructs' => 'next',
            ],
            'cast_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'const' => 'one',
                    'method' => 'one',
                    'property' => 'one',
                    'trait_import' => 'none',
                ],
            ],
            'class_definition' => [
                'multi_line_extends_each_single_line' => true,
                'single_item_single_line' => true,
                'single_line' => true,
            ],
            'class_reference_name_casing' => true,
            'clean_namespace' => true,
            'compact_nullable_typehint' => true,
            'concat_space' => [
                'spacing' => 'none',
            ],
            'constant_case' => [
                'case' => 'lower',
            ],
            'control_structure_braces' => true,
            'control_structure_continuation_position' => true,
            'curly_braces_position' => [
                'control_structures_opening_brace' => 'same_line',
                'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_functions_opening_brace' => 'same_line',
                'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
                'allow_single_line_empty_anonymous_classes' => false,
                'allow_single_line_anonymous_functions' => false,
            ],
            'declare_equal_normalize' => true,
            'declare_parentheses' => true,
            'echo_tag_syntax' => [
                'shorten_simple_statements_only' => false,
            ],
            'elseif' => true,
            'empty_loop_body' => true,
            'empty_loop_condition' => true,
            'encoding' => true,
            'explicit_indirect_variable' => true,
            'explicit_string_variable' => true,
            'full_opening_tag' => true,
            'fully_qualified_strict_types' => true,
            'function_declaration' => true,
            'function_typehint_space' => true,
            'general_phpdoc_annotation_remove' => true,
            'general_phpdoc_tag_rename' => true,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'include' => true,
            'increment_style' => [
                'style' => 'post',
            ],
            'indentation_type' => true,
            'integer_literal_case' => true,
            'lambda_not_used_import' => true,
            'line_ending' => true,
            'linebreak_after_opening_tag' => true,
            'list_syntax' => true,
            'lowercase_cast' => true,
            'lowercase_keywords' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'magic_method_casing' => true,
            'method_argument_space' => [
                'on_multiline' => 'ignore',
            ],
            'method_chaining_indentation' => true,
            'multiline_comment_opening_closing' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'no_multi_line',
            ],
            'native_function_casing' => true,
            'native_function_type_declaration_casing' => true,
            'new_with_braces' => true,
            'no_alias_language_construct_call' => true,
            'no_alternative_syntax' => true,
            'no_binary_string' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_empty_comment' => true,
            'no_empty_phpdoc' => true,
            'no_empty_statement' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'extra',
                    'throw',
                    'use',
                ],
            ],
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_mixed_echo_print' => [
                'use' => 'echo',
            ],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_multiple_statements_per_line' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_space_around_double_colon' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_around_offset' => [
                'positions' => [
                    'inside',
                    'outside',
                ],
            ],
            'no_spaces_inside_parenthesis' => true,
            'no_superfluous_elseif' => true,
            'no_superfluous_phpdoc_tags' => [
                'remove_inheritdoc' => false,
            ],
            'no_trailing_comma_in_singleline' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'no_unneeded_control_parentheses' => [
                'statements' => [
                    'break',
                    'clone',
                    'continue',
                    'echo_print',
                    'return',
                    'switch_case',
                    'yield',
                ],
            ],
            'no_unneeded_curly_braces' => true,
            'no_unneeded_import_alias' => true,
            'no_unset_cast' => true,
            'no_unused_imports' => true,
            'no_useless_concat_operator' => true,
            'no_useless_else' => true,
            'no_useless_nullsafe_operator' => true,
            'no_useless_return' => true,
            'no_whitespace_before_comma_in_array' => true,
            'no_whitespace_in_blank_line' => true,
            'normalize_index_brace' => true,
            'not_operator_with_successor_space' => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'object_operator_without_whitespace' => true,
            'operator_linebreak' => [
                'only_booleans' => true,
                'position' => 'end',
            ],
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
            ],
            'ordered_interfaces' => true,
            'php_unit_fqcn_annotation' => true,
            'php_unit_method_casing' => [
                'case' => 'camel_case',
            ],
            'phpdoc_add_missing_param_annotation' => true,
            'phpdoc_align' => true,
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_line_span' => true,
            'phpdoc_no_access' => true,
            'phpdoc_no_alias_tag' => true,
            'phpdoc_no_empty_return' => true,
            'phpdoc_no_package' => true,
            'phpdoc_no_useless_inheritdoc' => true,
            'phpdoc_order' => true,
            'phpdoc_return_self_reference' => true,
            'phpdoc_scalar' => true,
            'phpdoc_single_line_var_spacing' => true,
            'phpdoc_summary' => true,
            'phpdoc_tag_casing' => true,
            'phpdoc_tag_type' => [
                'tags' => [
                    'inheritdoc' => 'inline',
                ],
            ],
            'phpdoc_to_comment' => true,
            'phpdoc_trim' => true,
            'phpdoc_trim_consecutive_blank_line_separation' => true,
            'phpdoc_types' => true,
            'phpdoc_types_order' => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_var_without_name' => true,
            'protected_to_private' => true,
            'return_assignment' => true,
            'return_type_declaration' => [
                'space_before' => 'none',
            ],
            'semicolon_after_instruction' => true,
            'short_scalar_cast' => true,
            'simple_to_complex_string_variable' => true,
            'simplified_if_return' => true,
            'single_blank_line_at_eof' => true,
            'single_blank_line_before_namespace' => true,
            'single_class_element_per_statement' => [
                'elements' => [
                    'const',
                    'property',
                ],
            ],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'single_line_comment_spacing' => true,
            'single_line_comment_style' => [
                'comment_types' => [
                    'hash',
                ],
            ],
            'single_quote' => true,
            'single_space_after_construct' => true,
            'single_trait_insert_per_statement' => true,
            'space_after_semicolon' => true,
            'standardize_increment' => true,
            'standardize_not_equals' => true,
            'statement_indentation' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'switch_continue_to_break' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => [
                'elements' => [
                    'arrays',
                ],
            ],
            'trim_array_spaces' => true,
            'types_spaces' => true,
            'unary_operator_spaces' => true,
            'visibility_required' => true,
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => [
                'equal' => false,
                'identical' => false,
                'less_and_greater' => false,
            ],
        ];
    }

    public function in($in): self
    {
        $this->in = (array) $in;

        return $this;
    }

    protected function getIn(): array
    {
        return $this->in ?: [dirname($this->configFilePath)];
    }

    public function exclude($exclude): self
    {
        $this->exclude = (array) $exclude;

        return $this;
    }

    protected function getExclude(): array
    {
        return $this->exclude;
    }

    public function notName($notName): self
    {
        $this->notName = (array) $notName;

        return $this;
    }

    protected function getNotName(): array
    {
        return array_merge($this->notName, ['*.blade.php']);
    }

    protected function getFinder(): Finder
    {
        return Finder::create()
            ->in($this->getIn())
            ->exclude($this->getExclude())
            ->append([
                $this->configFilePath,
            ])
            ->name('*.php')
            ->notName($this->getNotName())
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }

    public function getConfig(): Config
    {
        return (new Config())
            ->setFinder($this->getFinder())
            ->setRules($this->rules())
            ->setRiskyAllowed(false)
            ->setUsingCache(true);
    }
}
