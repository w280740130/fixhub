<?php

/*
 * This file is part of Fixhub.
 *
 * Copyright (C) 2016 Fixhub.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fixhub\Http\Requests;

use Fixhub\Http\Requests\Request;

/**
 * Request for validating provider.
 */
class StoreProviderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|max:255|unique:providers,name',
            'slug' => 'required',
            'icon' => 'string|nullable|regex:/^ion\-(.*)/',
        ];

        // On edit add the provider ID to the rules
        if ($this->get('id')) {
            $rules['name'] .= ',' . $this->get('id');
        }

        return $rules;
    }
}
