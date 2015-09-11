<?php

return [


    'accepted'             => ':attribute должно быть accepted.',
    'active_url'           => ':attribute is not a valid URL.',
    'after'                => ':attribute должно быть a date after :date.',
    'alpha'                => ':attribute may only contain letters.',
    'alpha_dash'           => ':attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => ':attribute may only contain letters and numbers.',
    'array'                => ':attribute должно быть an array.',
    'before'               => ':attribute должно быть a date before :date.',
    'between'              => [
        'numeric' => ':attribute должно быть between :min and :max.',
        'file'    => ':attribute должно быть between :min and :max kilobytes.',
        'string'  => ':attribute должно быть between :min and :max characters.',
        'array'   => ':attribute must have between :min and :max items.',
    ],
    'boolean'              => ':attribute field должно быть true or false.',
    'confirmed'            => ':attribute confirmation does not match.',
    'date'                 => ':attribute is not a valid date.',
    'date_format'          => ':attribute does not match format :format.',
    'different'            => ':attribute and :other должно быть different.',
    'digits'               => ':attribute должно быть :digits digits.',
    'digits_between'       => ':attribute должно быть between :min and :max digits.',
    'email'                => ':attribute должно быть a valid email address.',
    'filled'               => ':attribute field is required.',
    'exists'               => 'selected :attribute is invalid.',
    'image'                => ':attribute должно быть an image.',
    'in'                   => 'selected :attribute is invalid.',
    'integer'              => ':attribute должно быть an integer.',
    'ip'                   => ':attribute должно быть a valid IP address.',
    'max'                  => [
        'numeric' => ':attribute may not be greater than :max.',
        'file'    => ':attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute may not be greater than :max символов.',
        'array'   => ':attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute должно быть a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute должно быть не менее :min.',
        'file'    => ':attribute должно быть не менее :min кБ.',
        'string'  => ':attribute должно быть не менее :min символов.',
        'array'   => ':attribute должен иметь не менее :min элементов.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'numeric'              => ':attribute должно быть a number.',
    'regex'                => ':attribute format is invalid.',
    'required'             => ':attribute field is required.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute and :other must match.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file'    => 'Поле :attribute должно быть :size кБ.',
        'string'  => 'Поле :attribute должно быть :size символов.',
        'array'   => 'Поле :attribute должен иметь :size элементов.',
    ],
    'string'               => ':attribute должно быть строкой.',
    'timezone'             => ':attribute должно быть a valid zone.',
    'unique'               => ':attribute has already been taken.',
    'url'                  => ':attribute формат неверный.',


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'attributes' => [],

];
