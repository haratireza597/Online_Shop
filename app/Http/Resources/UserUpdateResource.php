<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserUpdateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
            [
                'id'=>$this->id ,
                'name'=>$this->name ,
                'Family'=>$this->id,
                'Address'=>$this->Address,
                'phone'=>$this->phone,
                'password'=>$this->password,
                'Url_Avatar'=>$this->Url_Avatar,
            ];
    }
}
