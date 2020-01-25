<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'events';
  protected $dates = ['event_date'];
  public $timestamps = false;

  public function tickets(){
  	return $this->hasMany('App\Ticket');
  }

  public function registrations(){
  	return $this->hasMany('App\Register');
  }

  public function sessions(){
  	return $this->hasMany('App\Session');
  }
    public function channels(){
        return $this->hasMany('App\Channel');
    }
    public function organizer(){
      return $this->belongsTo('App\Organizer');
    }

}
