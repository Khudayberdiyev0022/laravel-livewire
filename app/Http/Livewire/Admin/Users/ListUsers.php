<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListUsers extends Component
{
  public    $form  = [];

  public function addNew()
  {
    $this->dispatchBrowserEvent('show-form');
  }

  public function createUser()
  {
   $data =  Validator::make($this->form, [
      'name'     => 'required',
      'email'    => 'required',
      'password' => 'required|confirmed',
    ])->validate();

    $data['password'] = Hash::make($data['password']);

    User::create($data);
  }

  public function render()
  {
    return view('livewire.admin.users.list-users');
  }
}
