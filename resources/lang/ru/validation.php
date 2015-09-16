<?php

return [
    'accepted'             => 'Поле ":attribute" должно быть accepted.',
    'active_url'           => 'Поле ":attribute" is not a valid URL.',
    'after'                => 'Поле ":attribute" должно быть a date after :date.',
    'alpha'                => 'Поле ":attribute" может содержать только буквы.',
    'alpha_dash'           => 'Поле ":attribute" may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'Поле ":attribute" may only contain letters and numbers.',
    'array'                => 'Поле ":attribute" должно быть an array.',
    'before'               => 'Поле ":attribute" должно быть a date before :date.',
    'between'              => [
        'numeric' => 'Поле ":attribute" должно быть between :min and :max.',
        'file'    => 'Поле ":attribute" должно быть between :min and :max kilobytes.',
        'string'  => 'Поле ":attribute" должно быть between :min and :max characters.',
        'array'   => 'Поле ":attribute" must have between :min and :max items.',
    ],
    'boolean'              => 'Поле ":attribute" field должно быть true or false.',
    'confirmed'            => 'Поле ":attribute" confirmation does not match.',
    'date'                 => 'Поле ":attribute" is not a valid date.',
    'date_format'          => 'Поле ":attribute" does not match format :format.',
    'different'            => 'Поле ":attribute" and :other должно быть different.',
    'digits'               => 'Поле ":attribute" должно быть :digits digits.',
    'digits_between'       => 'Поле ":attribute" должно быть between :min and :max digits.',
    'email'                => 'В поле ":attribute" введен некорректный email адрес.',
    'filled'               => 'Поле ":attribute" должно быть заполнено.',
    'exists'               => 'selected поле ":attribute" is invalid.',
    'image'                => 'Поле ":attribute" должно быть an image.',
    'in'                   => 'selected поле ":attribute" is invalid.',
    'integer'              => 'Поле ":attribute" должно быть an integer.',
    'ip'                   => 'Поле ":attribute" должно быть a valid IP address.',
    'max'                  => [
        'numeric' => 'Поле ":attribute" may not be greater than :max.',
        'file'    => 'Запрещено прикреплять файлы размером более :max кБайт.',
        'string'  => 'Поле ":attribute" должно содержать не более :max символов.',
        'array'   => 'Поле ":attribute" may not have more than :max items.',
    ],
    'mimes'                => 'Выбран недопустимый тип файла. :attribute должен быть одного из перечисленных типов :values.',
    'min'                  => [
        'numeric' => 'Поле ":attribute" должно быть не менее :min.',
        'file'    => 'Поле ":attribute" должно быть не менее :min кБ.',
        'string'  => 'Поле ":attribute" должно содержать не менее :min символов.',
        'array'   => 'Поле ":attribute" должен иметь не менее :min элементов.',
    ],
    'not_in'               => 'selected Поле ":attribute" is invalid.',
    'numeric'              => 'Поле ":attribute" должно содержать только цифры.',
    'regex'                => 'Поле ":attribute" format is invalid.',
    'required'             => 'Поле ":attribute" должно быть заполнено.',
    'required_if'          => 'Поле ":attribute" field is required when :other is :value.',
    'required_with'        => 'Поле ":attribute" field is required when :values is present.',
    'required_with_all'    => 'Поле ":attribute" field is required when :values is present.',
    'required_without'     => 'Поле ":attribute" field is required when :values is not present.',
    'required_without_all' => 'Поле ":attribute" field is required when none of :values are present.',
    'same'                 => 'Поле ":attribute" and :other must match.',
    'size'                 => [
        'numeric' => 'Поле ":attribute" должно быть :size.',
        'file'    => 'Поле ":attribute" должно быть :size кБ.',
        'string'  => 'Поле ":attribute" должно быть :size символов.',
        'array'   => 'Поле ":attribute" должен иметь :size элементов.',
    ],
    'string'               => 'Поле ":attribute" должно быть строкой.',
    'timezone'             => 'Поле ":attribute" должно быть a valid zone.',
    'unique'               => 'Поле ":attribute" has already been taken.',
    'url'                  => 'Поле ":attribute" формат неверный.',


    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'attributes' => [
        'name' => 'Имя',
        'tel' => 'Номер телефона',
        'message' => 'Сообщение',
        'attachment' => 'Файл',
    ],

];
