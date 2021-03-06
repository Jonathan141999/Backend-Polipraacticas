<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Postulation extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'languages' => $this->languages,
            'work_experience' => $this->work_experience,
            'career' => $this->career,
            'category'=>'/api/category/' . $this->category_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
