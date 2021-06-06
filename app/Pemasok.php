<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Pemasok extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'pemasok';
        protected $table = 'pemasok';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }