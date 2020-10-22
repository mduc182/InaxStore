<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements Searchable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'birth', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function billdetails()
    {
        return $this->hasmany('App\Model\Billdetail');
    }
    
    public function bills()
    {
        return $this->hasmany('App\Model\Bill');
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('showuser', $this->id);
        return new SearchResult(
            $this,
            $this->name,
            $url

            
        );
    }
}

// class User extends Model
// {
//     public function billdetails()
//     {
//         return $this->hasmany('app\Model\Billdetail');
//     }
// }