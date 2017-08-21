<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{

        //声明模型中可以批量赋值的属性，以便用create方法
        protected $fillable=['title','content','publish_date','author'];

        //添加文章时给时间属性修改，注意：
        //set Attribute   中间填的是字段名   这样会自动转换格式
        public function setPublishDateAttribute($date){
            $this->attributes['publish_date']=Carbon::createFromFormat('Y-m-d',$date);
        }


    public function getCreatedAtAttribute($date)

    {

        if (Carbon::now() < Carbon::parse($date)->addDays(10)) {

            return Carbon::parse($date);

        }


        return Carbon::parse($date)->diffForHumans();

    }

    public function tags(){
            return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
