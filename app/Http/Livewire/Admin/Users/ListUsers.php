<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
  public    $form  = [];
  protected $rules = [
    'form.name'     => 'required',
    'form.email'    => 'required',
    'form.password' => 'required|confirmed',

  ];

  public function addNew()
  {
    $this->dispatchBrowserEvent('show-form');
  }

  public function createUser()
  {
    $data = $this->validate();
    User::create($this->form);
  }

  public function render()
  {
    return view('livewire.admin.users.list-users');
  }
}
