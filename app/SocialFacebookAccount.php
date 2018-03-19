<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
  	protected $fillable = ['UserID', 'provider_user_id', 'provider'];

  	public function user()
  	{
      return $this->belongsTo(User::class);
  	}
}
