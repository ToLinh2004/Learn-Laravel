<?php

namespace App\Http\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' =>  'required|min:6',
            'product_price' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Trường :attribute bắt buộc phải nhập ',
            'min' => 'Trường :attribute không được nhỏ hơn :min ký tự',
            'integer' => 'Trường :attribute phải là số'
        ];
    }
    public function attributes()
    {
        return [
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá sản phẩm'
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) 
        {
            if ($validator->errors()->count()>0) {
                $validator->errors()->add('msg', 'đã có lỗi xảy ra');
            }
        });
    }
    function prepareForValidation()
{
    $this->merge([
        'create_at' => date('Y-m-d H:i:s'),
    ]);
}
protected function failedAuthorization(){
    // throw new AuthorizationException('Bạn đang truy cập vào vòng cấm');
    // throw new HttpResponseException(redirect('/')->with('msg','Bạn không có quyền truy cập')->with('type','danger'));
    throw new HttpResponseException(
        abort(404)
    );
}
}
