<?php

namespace Oyova\PhpCsFixer;

use Oyova\PhpCsFixer\Fixers\SpaceInsideParenthesisFixer;
use PhpCsFixer\Config;

class WordPressSetup extends Setup
{
    protected function rules(): array
    {
        $rules = array_merge(parent::rules(), [
            'array_syntax' => [
                'syntax' => 'long',
            ],
            'binary_operator_spaces' => [
                'default' => 'align_single_space_minimal',
            ],
            'braces' => [
                'allow_single_line_anonymous_class_with_empty_body' => true,
                'allow_single_line_closure' => true,
                'position_after_control_structures' => 'same',
                'position_after_functions_and_oop_constructs' => 'next',
                'position_after_anonymous_constructs' => 'same',
            ],
            'concat_space' => [
                'spacing' => 'one',
            ],
            'curly_braces_position' => [
                'control_structures_opening_brace' => 'same_line',
                'functions_opening_brace' => 'same_line',
                'anonymous_functions_opening_brace' => 'same_line',
                'classes_opening_brace' => 'same_line',
                'anonymous_classes_opening_brace' => 'same_line',
                'allow_single_line_empty_anonymous_classes' => false,
                'allow_single_line_anonymous_functions' => false,
            ],
            'no_blank_lines_after_class_opening' => false,
            'no_spaces_around_offset' => [
                'positions' => ['outside'],
            ],
            'Oyova/space_inside_parenthesis' => true,
            'trim_array_spaces' => false,
            'yoda_style' => true,
        ]);

        ksort($rules);

        return $rules;
    }

    public function getConfig(): Config
    {
        return parent::getConfig()
            ->registerCustomFixers([
                new SpaceInsideParenthesisFixer(),
            ])
            ->setIndent("\t");
    }
}
