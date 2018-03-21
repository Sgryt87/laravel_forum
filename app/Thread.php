<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model {
	public function path() {
		return '/laravel_forum/public/threads/' . $this->id; // todo FIX ROUTING!!
	}

	public function replies() {
		return $this->hasMany( Reply::class );
	}

}
